class Game {

    constructor() {
        this.map = new Map( this.save.bind(this) );

        // Amount of players mode
        this.mode = 2;
        this.menuShown = true;
        this.isAdvanced = false;

        this.infoContainer = document.getElementById('game_info');
        this.buildQueue = document.getElementById('build_queue');
        this.mapData = {};

        this.currentPhase = '';
        this.nextStep = '';

        this.initGameOrder();

        this.showStartMenu();
        //this.closeMenu();
        //this.initNewGame();
    }

    showStartMenu() {
        document.getElementsByClassName('button')[0].style.opacity = 1;
        document.getElementsByClassName('button')[1].style.opacity = 1;
        document.getElementsByClassName('continue')[0].addEventListener("click",function(){
            this.closeMenu();
            this.load();
        }.bind(this));
        document.getElementsByClassName('newgame')[0].addEventListener("click",function(){
            this.closeMenu();
            this.initNewGame();
        }.bind(this));
    }

    save() {
        let data = {
            phase: this.currentPhase,
            step: this.currentStep,
            map: this.map.savePlanets()
        };
        localStorage.setItem('rebellionData', JSON.stringify(data));
    }

    load() {
        try {
            const data = JSON.parse(localStorage.getItem('rebellionData') || '') || false;
        } catch(e) {
            alert('New game');
            this.initNewGame();
            return;
        }
        console.log('Load data:');
        console.log(data);
        this.currentPhase = data.phase;
        this.nextStep = data.step;
        this.map.loadPlanets(data.map);
        this.next();
    }

    initNewGame() {
        this.map.reset();

        const mode = document.getElementsByName('players');
        for(let i=0;i<mode.length;i++) {
            if(mode[i].checked) {
                this.mode = mode[i].value;
                break;
            }
        }
        if(this.mode == 4) {
            this.isAdvanced = true;
        }
        console.log('Current mode: '+ this.mode + ' players');

        this.currentPhase = 'init';
        this.run('init');
    }

    next() {
        let phase = this.currentPhase;
        let nextStep = this.nextStep;

        // If next step is not set
        if(!nextStep) {
            if(this.gameOrder[phase].confirm) {
                if(!confirm('End phase?')) {
                    return;
                }
            }

            phase = this.gameOrder[phase].next;
            this.currentPhase = phase;
            nextStep = undefined;
        }
        this.currentStep = nextStep;
        this.run(phase, nextStep);
        this.save();
    }

    run(key, next) {
        const phase = this.gameOrder[key];
        // Start a phase if next step is not selected
        next = next !== undefined ? next : phase.start;

        let current = phase[next];
        if(this.isAdvanced && phase[next + '_adv'] !== undefined) {
            current = phase[next + '_adv'];
        }

        this.nextStep = current.next !== undefined ? current.next : null;

        console.log('Running ['+key+'->' + next + ']');

        this.updateInfo(current.info);
        if(current.modes) {
            current.modes.forEach(this.runMode.bind(this));
        }
    }

    runMode(data) {
        const el = data[0] == 'this' ? this : this[data[0]],
            func = data[1],
            param = data[2] !== undefined ? data[2] :null;
        el[func](param)
    }

    updateInfo(text) {
        this.infoContainer.innerHTML = text;
    }

    closeMenu() {
        let mask = document.getElementsByClassName('mask')[0];
        mask.style.opacity = 0;
        setTimeout(function () {
            mask.style.display = "none";
        },500);

        /*
        this.nextButton = document.getElementById('next_button');
        this.nextButton.style.display = 'block';

        this.nextButton.addEventListener("click",);
        */
        Game.showNav('next_button', function(){
            this.next();
        }.bind(this));
        Game.showNav('menu_button', function(){
            this.toggleMenu();
        }.bind(this));
        Game.showNav('map_nav', function(){
            this.map.setMapMode();
        }.bind(this));
        Game.showNav('sabotage_nav', function(){
            this.map.setSabotageMode();
        }.bind(this));
        Game.showNav('probe_nav', function(){
            this.map.setProbeMode();
        }.bind(this));
    }

    toggleMenu() {
        let header = document.getElementById('game_info'),
            next = document.getElementById('next_button')
        ;

        const display = this.menuShown ? 'none' : 'block';

        header.style.display = display;
        next.style.display = display;

        this.menuShown = !this.menuShown;
    }

    showRebelBuild() {
        console.log('Looking for rebel resources');
        const resources = this.map.getResources([1]);
        this.showResources(resources, {
            1: 'X-Wing or Y-Wing or Transport',
            2: 'Corellian Corvette',
            3: 'Mon Calamari Cruiser',
            4: 'Rebel Trooper',
            5: 'Airspeeder',
            6: 'Generator or Canon'
        });
    }

    showEmpireBuild() {
        console.log('Looking for empire resources');
        let resources = this.map.getResources([2,3,4]);
        this.showResources(resources, {
            1: 'TIE Fighter',
            2: 'Assault Carrier',
            3: 'Star Destroyer',
            4: 'Stormtrooper',
            5: 'AT-ST',
            6: 'AT-AT'
        });
    }

    showResources(resources, units) {
        var queue = {
            1: {},
            2: {},
            3: {}
        };
        resources.forEach(function(res){
            if(queue[res.q][res.type] === undefined) {
                queue[res.q][res.type] = 0
            }
            queue[res.q][res.type] ++;
        });

        let str = '';
        for(let i in queue) {
            let line = '';
            for(let type in queue[i]) {
                line += '<li>'+units[type]+''+(queue[i][type] > 1 ? ' <strong>x' + queue[i][type] + '</strong>' : '')+'</li>';
            }
            if(line == '') {
                continue;
            }
            str += '<h3>Queue ' + i + '</h3><ul>'+line+'</ul>';
        }
        this.buildQueue.style.display = 'block';
        this.buildQueue.innerHTML = str;
    }

    hideBuild() {
        this.buildQueue.style.display = 'none';
    }

    static showNav(id, callback) {
        let button = document.getElementById(id);
        button.style.display = 'block';
        button.addEventListener("click",callback);
    }

    initGameOrder() {
        this.gameOrder = {
            // Phase
            'init': {
                start: 'planet_selection',
                next: 'assignment',
                // Step
                planet_selection: {
                    info: 'Shuffle the probe deck and reveal cards from the top of the deck until <strong>3 Rebel</strong> systems and <strong>5 Imperial</strong> systems have been revealed.<br />' +
                    'Place a <strong>Rebel loyalty</strong> marker in each of the <strong>3 Rebel</strong> systems.<br />' +
                    'Place a <strong>subjugation marker</strong> in the <strong>first 2 Imperial</strong> systems drawn and ' +
                    'an <strong>Imperial loyalty marker</strong> in each of the <strong>other 3 Imperial</strong> systems drawn.',
                    modes: [
                        ['map', 'toggleClicks', true],
                        ['map', 'setClickMode', 'toggleLoyalty']
                    ],
                    next: 'set_ships_empire'
                } ,

                set_ships_empire: {
                    info: 'The Imperial player receives 3 Star Destroyers, 3 Assault Carriers, 12 TIE Fighters, 12 Stormtroopers, 5 AT-STs, 1 AT-AT, and 1 Death Star.<br />' +
                    'These units can be placed in any system that has an Imperial loyalty marker or subjugation marker. <br />' +
                    'At least 1 ground unit must be placed in each Imperial system.',
                    modes: [
                        ['map', 'toggleClicks', false]
                    ],
                    next: 'set_ships_rebel'
                } ,

                set_ships_rebel: {
                    info: 'The Rebel player receives 1 Corellian Corvette, 1 Rebel Transport, 2 X-wings, 2 Y-wings, 6 Rebel Troopers, and 2 Airspeeders. <br />' +
                    'These units can be placed in the “Rebel Base” space of the game board and/or in any <strong>one</strong> Rebel or neutral system.',
                    next: 'draw_starting_actions'
                } ,

                draw_starting_actions: {
                    info: 'Each faction draws two random starting action cards (i.e., the action cards without a recruit icon on them).<br />' +
                    'These cards provide special, once-per-game abilities.',
                    next: 'select_base'
                } ,

                select_base: {
                    info: 'Choose Rebel Base Location',
                    next: 'draw_starting_hand'
                } ,

                draw_starting_hand: {
                    info: 'Draw Starting Hand: Each player takes his four starting missions and draws two cards from his mission',
                    next: null
                }

            } ,

            assignment: {
                start: 'rebel_assignment',
                next: 'command',

                rebel_assignment: {
                    info: '<strong>Assignment phase.</strong><br />' +
                    'The <strong>Rebel player starts</strong> by assigning any of his leaders to missions. When he is finished, the Imperial player assigns any of his leaders to missions.',
                    next: null
                }
            } ,

            command: {
                start: 'command_phase',
                next: 'refresh',
                confirm: true,

                command_phase: {
                    info: '<strong>Command phase.</strong><br />' +
                    'Order: Rebel -> Empire',
                    modes: [
                        ['map', 'toggleClicks', true],
                        ['map', 'setClickMode', 'toggleLoyalty']
                    ],
                    next: null
                } ,

                command_phase_adv: {
                    info: '<strong>Command phase.</strong><br />' +
                    'Order: <span class="admiral">Rebel Admiral</span>, <span class="admiral">Empire Admiral</span>, <br />' +
                    '<span class="general">Empire General</span>, <span class="general">Rebel General</span><br />',
                    modes: [
                        ['map', 'toggleClicks', true],
                        ['map', 'setClickMode', 'toggleLoyalty']
                    ],
                    next: null
                }
            } ,

            refresh: {
                start: 'refresh_start',
                next: 'assignment',

                refresh_start: {
                    info: '<strong>Refresh phase.</strong><br />' +
                    '<strong>Rebel player</strong>: "Start of Refresh Phase" objectives',
                    modes: [
                        ['map', 'toggleClicks', false]
                    ],
                    next: 'retrieve_leaders'
                } ,

                retrieve_leaders: {
                    info: '<strong>Refresh phase.</strong><br />' + 'Retrieve Leaders.',
                    next: 'draw_missions'
                } ,

                draw_missions: {
                    info: '<strong>Refresh phase.</strong><br />' +
                    'Draw Missions: Each player draws two mission cards and, if there are more than 10 cards in his hand, he discards down to 10 cards',
                    next: 'launch_probe_droid'
                } ,

                draw_missions_adv: {
                    info: '<strong>Refresh phase.</strong><br />' +
                    'Draw Missions: Each <span class="general">General</span> player draws two mission cards and, if there are more than 10 cards in his hand, he discards down to 10 cards',
                    next: 'launch_probe_droid'
                } ,

                launch_probe_droid: {
                    info: '<strong>Refresh phase.</strong><br />' +
                    '<strong>Imperial player</strong> draws two probe cards',
                    modes: [
                        ['map', 'toggleClicks', true],
                        ['map', 'setClickMode', 'toggleLoyalty']
                    ],
                    next: 'draw_objective'
                } ,

                launch_probe_droid_adv: {
                    info: '<strong>Refresh phase.</strong><br />' +
                    '<strong>Imperial <span class="general">General</span></strong> draws two probe cards',
                    modes: [
                        ['map', 'toggleClicks', true],
                        ['map', 'setClickMode', 'toggleLoyalty']
                    ],
                    next: 'draw_objective'
                } ,

                draw_objective: {
                    info: '<strong>Refresh phase.</strong><br />' +
                    'The <strong>Rebel player</strong> draws one objective card and adds it to his hand.',
                    modes: [
                        ['map', 'toggleClicks', false]
                    ],
                    next: 'advance_time_marker'
                } ,

                advance_time_marker: {
                    info: '<strong>Refresh phase.</strong><br />' +
                    'Advance Time Marker: Advance the time marker one space along the track. ',
                    next: 'recruit'
                } ,

                recruit: {
                    info: '<strong>Refresh phase.</strong><br />' +
                    '<strong>Recruit Icon</strong>: Each player draws two cards from his action deck, chooses one leader shown on either card, and places that leader in his leader pool.',
                    next: 'build_rebel'
                } ,

                recruit_adv: {
                    info: '<strong>Refresh phase.</strong><br />' +
                    '<strong>Recruit Icon</strong>: Each <span class="general">general player</span> draws two cards from his action deck, chooses one leader shown on either card, and places that leader in his leader pool.',
                    next: 'build_rebel'
                } ,

                build_rebel: {
                    info: '<strong>Refresh phase.</strong><br />' +
                    '<strong>Build Icon</strong>: Rebel player builds one unit matching each resource icon in his loyal.',
                    modes: [
                        ['this', 'showRebelBuild']
                    ],
                    next: 'build_empire'
                } ,

                build_rebel_adv: {
                    info: '<strong>Refresh phase.</strong><br />' +
                    '<strong>Build Icon</strong>: <span class="admiral">Rebel admiral</span> player builds one unit matching each resource icon in his loyal.',
                    modes: [
                        ['this', 'showRebelBuild']
                    ],
                    next: 'build_empire'
                } ,

                build_empire: {
                    info: '<strong>Refresh phase.</strong><br />' +
                    '<strong>Build Icon</strong>: Empire player builds one unit matching each resource icon in his loyal and subjugated systems.',
                    modes: [
                        ['this', 'showEmpireBuild']
                    ],
                    next: 'deploy_rebel'
                } ,

                build_empire_adv: {
                    info: '<strong>Refresh phase.</strong><br />' +
                    '<strong>Build Icon</strong>: <span class="admiral">Empire admiral</span> player builds one unit matching each resource icon in his loyal and subjugated systems.',
                    modes: [
                        ['this', 'showEmpireBuild']
                    ],
                    next: 'deploy_rebel'
                } ,

                deploy_rebel: {
                    info: '<strong>Refresh phase.</strong><br />' +
                    '<strong>Deploy Units</strong>: the <strong>Rebel</strong> player slides all units one space down his build queue.<br />' +
                    'The player deploys these units in systems that have his loyalty.',
                    modes: [
                        ['this', 'hideBuild']
                    ],
                    next: 'deploy_empire'
                } ,

                deploy_rebel_adv: {
                    info: '<strong>Refresh phase.</strong><br />' +
                    '<strong>Deploy Units</strong>: the <span class="admiral">Rebel Admiral</span> player slides all units one space down his build queue.<br />' +
                    'The player deploys these units in systems that have his loyalty',
                    modes: [
                        ['this', 'hideBuild']
                    ],
                    next: 'deploy_empire'
                } ,

                deploy_empire: {
                    info: '<strong>Refresh phase.</strong><br />' +
                    '<strong>Deploy Units</strong>: the <strong>Empire</strong> player slides all units one space down his build queue.<br />' +
                    'The player deploys these units in systems that have his loyalty or subjugation markers.',
                    next: null
                } ,

                deploy_empire_adv: {
                    info: '<strong>Refresh phase.</strong><br />' +
                    '<strong>Deploy Units</strong>: the <span class="admiral">Empire Admiral</span> player slides all units one space down his build queue.<br />' +
                    'The player deploys these units in systems that have his loyalty or subjugation markers.',
                    next: null
                }

            }

        };
    }
}
