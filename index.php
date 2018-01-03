<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Star Wars: Rebellion | Map</title>
<!--    <meta content="Toggle each system between Probe Droid, Subjugation/Loyalty and Intel. Track the locations revealed by your Probe Droid cards, subjugation or loyalty markers, and mission cards. Make finding the location of the Rebel base in the Star Wars: Rebellion board game easier for the Imperial player." name="description">-->
    <meta content="Star Wars: Rebellion | Helper Map" property="og:title">
<!--    <meta content="Toggle each system between Probe Droid, Subjugation/Loyalty and Intel. Track the locations revealed by your Probe Droid cards, subjugation or loyalty markers, and mission cards. Make finding the location of the Rebel base in the Star Wars: Rebellion board game easier for the Imperial player." property="og:description">-->
<!--    <meta content="images/RebellionMap-OG.jpg" property="og:image">-->
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,800" rel="stylesheet">
    <link href="css/map.css" rel="stylesheet" type="text/css">
<!--    <link href="images/droid-icon.png" rel="shortcut icon" type="image/x-icon">-->
<!--    <link href="images/droid.png" rel="apple-touch-icon">-->
    <script src="js/modernizr.js" type="text/javascript"></script>
    <script src="js/snap.svg-min.js" type="text/javascript"></script>

    <script src="js/planet.js" type="text/javascript"></script>
    <script src="js/map.js" type="text/javascript"></script>
    <script src="js/game.js" type="text/javascript"></script>
    <script type="text/javascript">
        //<![CDATA[
        window.onload = function() {
            var rebellionGame = new Game();
        };
        //]]>
    </script>
</head>
<body class="loyalty">
<div class="mask">
    <div class="menuwrap w-clearfix">
        <div class="leftborder"></div>
        <div class="rightborder"></div>
        <div class="base">
            <h1 class="heading-2">Rebellion Map</h1>
            <div class="button continue">Continue</div>
            <div class="container">
                <div><input type="radio" name="players" value="2" id="pl2" checked="checked" /><label for="pl2">2 players</label></div>
                <div><input type="radio" name="players" value="4" id="pl4" /><label for="pl4">4 players</label></div>
            </div>
            <div class="button newgame">New Map</div>
        </div>
    </div>
</div>
<div class="navbutton" id="menu_button">Menu</div>
<div class="navbutton" id="next_button">Next</div>
<div class="navbutton" id="map_nav">Maps</div>
<div class="navbutton" id="sabotage_nav">Sabotage</div>
<div class="navbutton" id="probe_nav">Probe Droid</div>

<div id="build_queue" class="with-border"></div>

<div class="header" id="game_info">Header content</div>
<div class="space">
    <div class="left-right"></div>
    <div class="mid-wrap">
<!--        <div class="top-bot"></div>-->
        <div class="centre">
            <!-- SVG code goes inside this div -->
            <svg version="1.1" id="mysvg" class="svg" width="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 1920 1080" style="enable-background:new 0 0 1920 1080;" xml:space="preserve">
        <style type="text/css">
            .coruscant{opacity:0.25;}
            .st0{clip-path:url(#SVGID_2_);}
            .st1{fill:none;stroke:#B8CCC7;stroke-width:3;}
            .st2{fill:none;stroke:#E6A447;stroke-width:10.5146;}
            .st3{display:none;fill:#FFFFFF;opacity:1;}
            .st4{display:inline;fill:#E6A447;}
            .st5{fill:url(#SVGID_3_);}
            .st6{fill:url(#SVGID_4_);}
            .st7{fill:url(#SVGID_5_);}
            .st8{fill:url(#SVGID_6_);}
            .st9{fill:url(#SVGID_7_);}
            .st10{fill:url(#SVGID_8_);}
            .st11{fill:url(#SVGID_9_);}
            .st12{fill:url(#SVGID_10_);}
            .st13{fill:url(#SVGID_11_);}
            .st14{fill:url(#SVGID_12_);}
            .st15{fill:url(#SVGID_13_);}
            .st16{fill:url(#SVGID_14_);}
            .st17{fill:url(#SVGID_15_);}
            .st18{fill:url(#SVGID_16_);}
            .st19{fill:url(#SVGID_17_);}
            .st20{fill:url(#SVGID_18_);}
            .st21{fill:url(#SVGID_19_);}
            .st22{fill:url(#SVGID_20_);}
            .st23{fill:url(#SVGID_21_);}
            .st24{fill:url(#SVGID_22_);}
            .st25{fill:url(#SVGID_23_);}
            .st26{fill:url(#SVGID_24_);}
            .st27{fill:url(#SVGID_25_);}
            .st28{fill:url(#SVGID_26_);}
            .st29{fill:url(#SVGID_27_);}
            .st30{fill:url(#SVGID_28_);}
            .st31{fill:url(#SVGID_29_);}
            .st32{fill:url(#SVGID_30_);}
            .st33{fill:url(#SVGID_31_);}
            .st34{fill:url(#SVGID_32_);}
            .st35{fill:url(#SVGID_33_);}
            .st36{clip-path:url(#SVGID_35_);fill:url(#SVGID_36_);}
            .st37{clip-path:url(#SVGID_38_);fill:url(#SVGID_39_);}
            .st38{opacity:0.7;}
            .st39{fill:url(#SVGID_40_);}
            .st40{fill:url(#SVGID_41_);}
            .st41{fill:url(#SVGID_42_);}
            .st42{fill:url(#SVGID_43_);}
            .st43{fill:url(#SVGID_44_);}
            .st44{fill:url(#SVGID_45_);}
            .st45{fill: '#000';opacity:0.25;}
            .st46{display:inline;fill:#FFFFFF;}
            .st47{display:inline;}
            .st48{fill:#FFFFFF;}
            .st49{display:none;fill:#FFFFFF;opacity:1;}
            .st50{fill:url(#Coruscant_2_);}
            .st51{enable-background:new    ;}
        </style>
                <g id="Boundaries_1_">
                    <g>
                        <defs>
                            <rect id="SVGID_1_" width="1920" height="1080"/>
                        </defs>
                        <clipPath id="SVGID_2_">
                            <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
                        </clipPath>
                        <g class="st0">
                            <g>
                                <path class="st1" d="M112.8,1085.5c1.4-62,11.4-116.1,11.4-116.1l-17.7-36.9c29.8-120.8,89.4-201.6,129.1-256.5"/>
                                <path class="st1" d="M285.9,1085.5c-0.7-51.8,13.5-123.9,13.5-123.9l87.3-69.8l80.9,37.6l46.8,51.8l161.1,69
                            c0,0,0,21.2,1.4,36.1"/>
                                <polyline class="st1" points="-6.4,117.6 304.4,438.4 431.4,448.6 467.6,492.5 				"/>
                                <path class="st1" d="M-8.5,11.8l149,175.7l133.4,29c0,0,75.1-45.5,189.8-83.3"/>
                                <line class="st1" x1="348.4" y1="178" x2="535.7" y2="453.3"/>
                                <path class="st1" d="M467.6,929.4c19.2-62,66.7-125.5,90.1-149"/>
                                <polyline class="st1" points="434.2,513.7 559.1,656.5 527.2,752.9 				"/>
                                <line class="st1" x1="605.9" y1="418.8" x2="789" y2="748.2"/>
                                <polyline class="st1" points="906.1,449.4 921.7,531.8 1011.1,607.1 1016.8,687.1 				"/>
                                <path class="st1" d="M813.8,1003.9l18.4-1.6c91.2-210.4,458.2-142.4,428.4,82.4"/>
                                <path class="st1" d="M849.3,720l51.6,124.7c47.9-20.6,154.9-50.6,267.1-5.3l54.3-14.7l41.3-87.5"/>
                                <line class="st1" x1="1121.2" y1="887.6" x2="1134" y2="828.2"/>
                                <line class="st1" x1="664.1" y1="-8.8" x2="748.2" y2="259.4"/>
                                <path class="st1" d="M629,292.4c92.1-33.5,212.9-48.8,277.3-57.1"/>
                                <polyline class="st1" points="1047.8,58.6 1047.8,117.1 906.3,235.3 937.1,446.5 				"/>
                                <line class="st1" x1="1814.1" y1="858.2" x2="1532.6" y2="985.9"/>
                                <path class="st1" d="M1504.4,781.8l75.6,13.5l98.4-74.1c29.6,7.5,55.8,22.5,79.8,35.3l29.8-18.8l6.9-15.9l150.1-97.1"/>
                                <path class="st1" d="M1758.2,756.5c22.9,31.8,44.7,75.9,55.9,102.9l-12.8,103.5c11.2,35.3,15.4,99.4,14.4,121.8"/>
                                <path class="st1" d="M1243.1,589.8c32.6,8.6,102.2,38.4,107.9,43.1l95.1-5.5c22,11,115.7,83.9,122.8,95.7"/>
                                <polyline class="st1" points="1582.3,354.5 1482.2,512.9 1478.7,578.8 1446,627.4 				"/>
                                <path class="st1" d="M1538.3,424.3l86.6-5.5c0,0,92.2,55.7,119.9,83.1"/>
                                <path class="st1" d="M1156.5,135.7c74.5,6.3,226.3,36.1,262.5,51"/>
                                <line class="st1" x1="1491.4" y1="-7.1" x2="1386.4" y2="277.6"/>
                                <path class="st1" d="M1453.8,94.1c144,36.9,296.6,120.8,307.2,126.3"/>
                            </g>
                            <g>
                                <path class="st2" d="M-12.1,514.5L395.2,778l132-25.1l286.7,251c0,0-13.5,23.5-6.4,80.8"/>
                                <path class="st2" d="M151.8,621.2c0,0,55.3-63.5,69.5-76.1l157.5,9.4c54.6-42.4,177.4-124.7,296.6-160.8"/>
                                <line class="st2" x1="-9.2" y1="443.9" x2="184.5" y2="582.7"/>
                                <path class="st2" d="M489.6-11l24.1,52.5L496,123.1l38.3,76.1l69.5,38.4l94.4,205.5l79.5,32.9c194.4-50.2,365.4-41.6,500.9-1.6"
                                />
                                <path class="st2" d="M653.5,862.7c95.1-120.8,233.4-177.3,414.4-174.9l46.8-42.4l103.6,22l45.4,69.8
                            c161.1,73.7,237.7,213.3,234.1,347.5"/>
                                <polyline class="st2" points="440.6,-10 469.4,52.4 463.7,133.2 496,123.1 				"/>
                                <polyline class="st2" points="1022.4,-7.1 1022.4,56.5 1072.1,56.5 1072.1,-7.8 				"/>
                                <polyline class="st2" points="1072.1,56.5 1156.5,135.7 1136.7,335.7 1099.1,369.4 1094.1,442.4 				"/>
                                <path class="st2" d="M1218.3,667.4l115.7-363.1l52.5-26.7c66.7,20.4,157.5,55.7,195.8,76.9l113.5-43.1L1926.4-9.4"/>
                                <polyline class="st2" points="1932.8,49.4 1780.9,241.6 1732,260.4 				"/>
                                <polyline class="st2" points="1931.4,427.5 1918.6,437.6 1798.7,447.1 1744.7,502 1746.9,531.8 				"/>
                                <polyline class="st2" points="1934.9,465.9 1805.1,476.1 1685.1,589 1677.3,624.3 1421.2,858.8 				"/>
                                <path class="st2" d="M1451,831.4c62.4,75.3,93.7,162.4,91.5,251.8"/>
                            </g>
                            <g class="st3">
                                <path class="st4" d="M1913.7,6.4v1067.3H6.3V6.4H1913.7 M1920,0.1H0V1080h1920V0.1L1920,0.1z"/>
                            </g>
                        </g>
                    </g>
                </g>
                <g id="Planets">

                    <radialGradient id="SVGID_3_" cx="835.1837" cy="553.3038" r="114.9359" fx="771.2703" fy="554.7675" gradientTransform="matrix(-0.6724 0.7402 -1.0075 -0.9152 1954.2076 441.489)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0" style="stop-color:#DBD7B1"/>
                        <stop  offset="0.1016" style="stop-color:#D8D6B0"/>
                        <stop  offset="0.1674" style="stop-color:#D0D4AE"/>
                        <stop  offset="0.2232" style="stop-color:#C1CFAB"/>
                        <stop  offset="0.2732" style="stop-color:#ACC9A6"/>
                        <stop  offset="0.3195" style="stop-color:#90C0A0"/>
                        <stop  offset="0.363" style="stop-color:#6FB698"/>
                        <stop  offset="0.4044" style="stop-color:#47AA8F"/>
                        <stop  offset="0.443" style="stop-color:#1A9C84"/>
                        <stop  offset="0.4629" style="stop-color:#00947E"/>
                        <stop  offset="0.6609" style="stop-color:#302E1E"/>
                        <stop  offset="0.6794" style="stop-color:#383222"/>
                        <stop  offset="0.7547" style="stop-color:#524130"/>
                        <stop  offset="0.8322" style="stop-color:#644B3A"/>
                        <stop  offset="0.9125" style="stop-color:#6F5140"/>
                        <stop  offset="1" style="stop-color:#735342"/>
                    </radialGradient>
                    <circle class="st5" cx="837.9" cy="576.4" r="70.7"/>

                    <radialGradient id="SVGID_4_" cx="1118.3969" cy="517.376" r="93.0434" fx="1066.6575" fy="518.5609" gradientTransform="matrix(0.5194 0.8546 -1.1632 0.7069 1139.3447 -804.0971)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0" style="stop-color:#DBD7B1"/>
                        <stop  offset="0.1016" style="stop-color:#D8D6B1"/>
                        <stop  offset="0.1674" style="stop-color:#D0D2AF"/>
                        <stop  offset="0.2232" style="stop-color:#C1CBAE"/>
                        <stop  offset="0.2732" style="stop-color:#ACC2AB"/>
                        <stop  offset="0.3195" style="stop-color:#90B6A7"/>
                        <stop  offset="0.363" style="stop-color:#6FA7A3"/>
                        <stop  offset="0.4044" style="stop-color:#47959D"/>
                        <stop  offset="0.443" style="stop-color:#1A8297"/>
                        <stop  offset="0.4629" style="stop-color:#007694"/>
                        <stop  offset="0.6609" style="stop-color:#302E1E"/>
                        <stop  offset="0.6794" style="stop-color:#383222"/>
                        <stop  offset="0.7547" style="stop-color:#524130"/>
                        <stop  offset="0.8322" style="stop-color:#644B3A"/>
                        <stop  offset="0.9125" style="stop-color:#6F5140"/>
                        <stop  offset="1" style="stop-color:#735342"/>
                    </radialGradient>
                    <circle class="st6" cx="1120.6" cy="536" r="57.3"/>

                    <radialGradient id="SVGID_5_" cx="799.1442" cy="333.235" r="75.3722" fx="759.8674" fy="347.8958" gradientTransform="matrix(0.919 0.3942 -0.6714 1.5652 288.4352 -503.3745)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0.1931" style="stop-color:#CCCFB8"/>
                        <stop  offset="0.2442" style="stop-color:#C2C6AD"/>
                        <stop  offset="0.3351" style="stop-color:#A6AE8E"/>
                        <stop  offset="0.4544" style="stop-color:#7A885D"/>
                        <stop  offset="0.5421" style="stop-color:#556935"/>
                        <stop  offset="0.5459" style="stop-color:#536835"/>
                        <stop  offset="0.64" style="stop-color:#2F4B41"/>
                        <stop  offset="0.7164" style="stop-color:#183947"/>
                        <stop  offset="0.7649" style="stop-color:#10324A"/>
                        <stop  offset="0.7753" style="stop-color:#122C3B"/>
                        <stop  offset="0.795" style="stop-color:#162325"/>
                        <stop  offset="0.8183" style="stop-color:#191C14"/>
                        <stop  offset="0.8472" style="stop-color:#1B1809"/>
                        <stop  offset="0.8876" style="stop-color:#1C1502"/>
                        <stop  offset="1" style="stop-color:#1C1400"/>
                    </radialGradient>
                    <circle class="st7" cx="790.5" cy="350.2" r="56.1"/>

                    <radialGradient id="SVGID_6_" cx="866.4288" cy="85.6199" r="97.2301" fx="815.7616" fy="104.5322" gradientTransform="matrix(0.4154 0.9096 -1.5492 0.7075 639.1293 -763.0838)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0.1931" style="stop-color:#DADBC5"/>
                        <stop  offset="0.2281" style="stop-color:#D9D8C0"/>
                        <stop  offset="0.2692" style="stop-color:#D6D1B2"/>
                        <stop  offset="0.3134" style="stop-color:#D1C49A"/>
                        <stop  offset="0.3595" style="stop-color:#CAB279"/>
                        <stop  offset="0.4035" style="stop-color:#C29D53"/>
                        <stop  offset="0.5965" style="stop-color:#948F00"/>
                        <stop  offset="0.7649" style="stop-color:#1D3827"/>
                        <stop  offset="0.7671" style="stop-color:#1D3625"/>
                        <stop  offset="0.7935" style="stop-color:#1D2714"/>
                        <stop  offset="0.8262" style="stop-color:#1C1C09"/>
                        <stop  offset="0.8722" style="stop-color:#1C1602"/>
                        <stop  offset="1" style="stop-color:#1C1400"/>
                    </radialGradient>
                    <circle class="st8" cx="853.6" cy="100.5" r="72.4"/>

                    <radialGradient id="SVGID_7_" cx="1026.3221" cy="239.6848" r="79.3605" fx="982.1915" fy="240.6954" gradientTransform="matrix(0.9705 0.2411 -0.3281 1.321 108.9065 -324.3359)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0" style="stop-color:#BFDBCF"/>
                        <stop  offset="0.138" style="stop-color:#BED8CC"/>
                        <stop  offset="0.2274" style="stop-color:#BAD0C4"/>
                        <stop  offset="0.303" style="stop-color:#B2C1B6"/>
                        <stop  offset="0.3709" style="stop-color:#A8ACA2"/>
                        <stop  offset="0.4331" style="stop-color:#9C9188"/>
                        <stop  offset="0.4629" style="stop-color:#948179"/>
                        <stop  offset="0.6609" style="stop-color:#1E2930"/>
                        <stop  offset="0.713" style="stop-color:#383635"/>
                        <stop  offset="0.7804" style="stop-color:#52423B"/>
                        <stop  offset="0.8497" style="stop-color:#644C3F"/>
                        <stop  offset="0.9216" style="stop-color:#6F5141"/>
                        <stop  offset="1" style="stop-color:#735342"/>
                    </radialGradient>
                    <circle class="st9" cx="1028.2" cy="255.6" r="48.8"/>

                    <radialGradient id="SVGID_8_" cx="1240.2878" cy="289.8095" r="89.3679" fx="1191.6938" fy="279.3423" gradientTransform="matrix(0.5941 0.8044 -1.3699 1.0119 900.3901 -1001.0857)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0.13" style="stop-color:#CCCFB8"/>
                        <stop  offset="0.2032" style="stop-color:#C8CDB6"/>
                        <stop  offset="0.2705" style="stop-color:#BDC5AE"/>
                        <stop  offset="0.3354" style="stop-color:#ABB8A1"/>
                        <stop  offset="0.3989" style="stop-color:#90A790"/>
                        <stop  offset="0.4613" style="stop-color:#6F9079"/>
                        <stop  offset="0.5222" style="stop-color:#46745D"/>
                        <stop  offset="0.5442" style="stop-color:#356952"/>
                        <stop  offset="0.5787" style="stop-color:#25514E"/>
                        <stop  offset="0.6192" style="stop-color:#163A4B"/>
                        <stop  offset="0.645" style="stop-color:#10324A"/>
                        <stop  offset="0.6814" style="stop-color:#132C3A"/>
                        <stop  offset="0.7552" style="stop-color:#172121"/>
                        <stop  offset="0.8315" style="stop-color:#1A1A0E"/>
                        <stop  offset="0.9113" style="stop-color:#1B1504"/>
                        <stop  offset="1" style="stop-color:#1C1400"/>
                    </radialGradient>
                    <circle class="st10" cx="1237" cy="290.6" r="56.7"/>

                    <radialGradient id="SVGID_9_" cx="1399.859" cy="434.3193" r="103.9897" fx="1342.0326" fy="435.6436" gradientTransform="matrix(0.4659 0.8848 -1.2044 0.6342 1270.7279 -1079.7498)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0.104" style="stop-color:#B6DBDA"/>
                        <stop  offset="0.2078" style="stop-color:#B3D8D9"/>
                        <stop  offset="0.275" style="stop-color:#ABD0D4"/>
                        <stop  offset="0.332" style="stop-color:#9CC1CD"/>
                        <stop  offset="0.3831" style="stop-color:#87ADC2"/>
                        <stop  offset="0.4303" style="stop-color:#6B92B4"/>
                        <stop  offset="0.4741" style="stop-color:#4B72A4"/>
                        <stop  offset="0.5074" style="stop-color:#2C5494"/>
                        <stop  offset="0.6733" style="stop-color:#0C0E14"/>
                        <stop  offset="1" style="stop-color:#1F68B0"/>
                    </radialGradient>
                    <circle class="st11" cx="1402.3" cy="455.2" r="64"/>

                    <radialGradient id="SVGID_10_" cx="1590.2703" cy="551.0065" r="46.9492" fx="1564.1628" fy="551.6044" gradientTransform="matrix(0.9526 0.3043 -0.3222 1.0088 252.9274 -488.6762)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0.2277" style="stop-color:#CCDEDC"/>
                        <stop  offset="0.3331" style="stop-color:#C9DCDA"/>
                        <stop  offset="0.4014" style="stop-color:#C1D5D3"/>
                        <stop  offset="0.4591" style="stop-color:#B2C9C8"/>
                        <stop  offset="0.511" style="stop-color:#9DB9B7"/>
                        <stop  offset="0.5585" style="stop-color:#82A4A2"/>
                        <stop  offset="0.5866" style="stop-color:#6E9493"/>
                        <stop  offset="0.7129" style="stop-color:#0C0E14"/>
                        <stop  offset="1" style="stop-color:#1F68B0"/>
                    </radialGradient>
                    <circle class="st12" cx="1590.8" cy="554" r="34.8"/>

                    <radialGradient id="SVGID_11_" cx="1144.6654" cy="733.261" r="70.2386" fx="1105.6072" fy="734.1555" gradientTransform="matrix(0.9526 0.3043 -0.4141 1.2966 357.9361 -565.7552)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0.2277" style="stop-color:#CFE5EB"/>
                        <stop  offset="0.3198" style="stop-color:#CCE3E9"/>
                        <stop  offset="0.3795" style="stop-color:#C4DAE4"/>
                        <stop  offset="0.43" style="stop-color:#B5CDDB"/>
                        <stop  offset="0.4754" style="stop-color:#A0B9CD"/>
                        <stop  offset="0.5173" style="stop-color:#84A0BC"/>
                        <stop  offset="0.5562" style="stop-color:#6482A8"/>
                        <stop  offset="0.5866" style="stop-color:#446594"/>
                        <stop  offset="0.6733" style="stop-color:#0C0E14"/>
                        <stop  offset="1" style="stop-color:#1F68B0"/>
                    </radialGradient>
                    <circle class="st13" cx="1146.3" cy="747.4" r="43.2"/>

                    <radialGradient id="SVGID_12_" cx="1323.0126" cy="875.4176" r="120.4091" fx="1256.0557" fy="876.951" gradientTransform="matrix(0.4659 0.8848 -1.2044 0.6342 1760.9299 -850.3849)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0" style="stop-color:#C5D8DB"/>
                        <stop  offset="0.1054" style="stop-color:#C2D7DA"/>
                        <stop  offset="0.1736" style="stop-color:#BAD3D7"/>
                        <stop  offset="0.2314" style="stop-color:#ABCDD2"/>
                        <stop  offset="0.2834" style="stop-color:#96C5CA"/>
                        <stop  offset="0.3314" style="stop-color:#7ABAC0"/>
                        <stop  offset="0.3765" style="stop-color:#59ACB4"/>
                        <stop  offset="0.4194" style="stop-color:#319CA6"/>
                        <stop  offset="0.4594" style="stop-color:#048A96"/>
                        <stop  offset="0.4629" style="stop-color:#008894"/>
                        <stop  offset="0.6609" style="stop-color:#693913"/>
                        <stop  offset="0.7111" style="stop-color:#6C4121"/>
                        <stop  offset="0.8021" style="stop-color:#704B33"/>
                        <stop  offset="0.8968" style="stop-color:#72513E"/>
                        <stop  offset="1" style="stop-color:#735342"/>
                    </radialGradient>
                    <circle class="st14" cx="1325.9" cy="899.6" r="74.1"/>
                    <radialGradient id="SVGID_13_" cx="830.8221" cy="869.4847" r="107.6171" gradientUnits="userSpaceOnUse">
                        <stop  offset="0" style="stop-color:#00101C"/>
                        <stop  offset="7.567141e-02" style="stop-color:#001220"/>
                        <stop  offset="0.1551" style="stop-color:#001A2D"/>
                        <stop  offset="0.2362" style="stop-color:#002642"/>
                        <stop  offset="0.3179" style="stop-color:#00375F"/>
                        <stop  offset="0.3465" style="stop-color:#003E6B"/>
                        <stop  offset="0.5074" style="stop-color:#008894"/>
                        <stop  offset="0.5438" style="stop-color:#2497A1"/>
                        <stop  offset="0.5988" style="stop-color:#55AAB3"/>
                        <stop  offset="0.6535" style="stop-color:#7DBBC1"/>
                        <stop  offset="0.7069" style="stop-color:#9DC8CC"/>
                        <stop  offset="0.7585" style="stop-color:#B3D1D4"/>
                        <stop  offset="0.8076" style="stop-color:#C0D6D9"/>
                        <stop  offset="0.8515" style="stop-color:#C5D8DB"/>
                    </radialGradient>
                    <circle class="st15" cx="812.3" cy="846" r="57.8"/>

                    <radialGradient id="SVGID_14_" cx="661.1664" cy="647.6271" r="82.9094" fx="617.9619" fy="663.7538" gradientTransform="matrix(0.4154 0.9096 -1.5492 0.7075 1389.8098 -412.0076)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0.1931" style="stop-color:#DADBC5"/>
                        <stop  offset="0.231" style="stop-color:#D8D7C0"/>
                        <stop  offset="0.2756" style="stop-color:#D0CDB2"/>
                        <stop  offset="0.3235" style="stop-color:#C4BB9A"/>
                        <stop  offset="0.3734" style="stop-color:#B4A379"/>
                        <stop  offset="0.4035" style="stop-color:#A89162"/>
                        <stop  offset="0.5965" style="stop-color:#735526"/>
                        <stop  offset="0.7649" style="stop-color:#1D3827"/>
                        <stop  offset="0.7671" style="stop-color:#1D3625"/>
                        <stop  offset="0.7935" style="stop-color:#1D2714"/>
                        <stop  offset="0.8262" style="stop-color:#1C1C09"/>
                        <stop  offset="0.8722" style="stop-color:#1C1602"/>
                        <stop  offset="1" style="stop-color:#1C1400"/>
                    </radialGradient>
                    <circle class="st16" cx="650.2" cy="660.3" r="61.8"/>

                    <radialGradient id="SVGID_15_" cx="395.1601" cy="642.828" r="70.2026" fx="358.2745" fy="630.0129" gradientTransform="matrix(0.3068 0.9518 -1.1181 0.3604 992.6466 35.056)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0.2277" style="stop-color:#D69C71"/>
                        <stop  offset="0.4579" style="stop-color:#AD351D"/>
                        <stop  offset="0.599" style="stop-color:#0C0E14"/>
                        <stop  offset="1" style="stop-color:#1F68B0"/>
                    </radialGradient>
                    <circle class="st17" cx="396.8" cy="633.2" r="42.7"/>

                    <radialGradient id="SVGID_16_" cx="158.8254" cy="410.0563" r="76.624" fx="116.2164" fy="411.032" gradientTransform="matrix(0.4955 0.8686 -1.1823 0.6744 564.951 -4.4392)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0.1337" style="stop-color:#DBCFC5"/>
                        <stop  offset="0.2125" style="stop-color:#D0BAA8"/>
                        <stop  offset="0.3843" style="stop-color:#B5835D"/>
                        <stop  offset="0.5817" style="stop-color:#944000"/>
                        <stop  offset="0.703" style="stop-color:#6B2500"/>
                        <stop  offset="0.7217" style="stop-color:#5D2204"/>
                        <stop  offset="0.7738" style="stop-color:#3C1C0C"/>
                        <stop  offset="0.8271" style="stop-color:#211713"/>
                        <stop  offset="0.8818" style="stop-color:#0F1318"/>
                        <stop  offset="0.9383" style="stop-color:#04111B"/>
                        <stop  offset="1" style="stop-color:#00101C"/>
                    </radialGradient>
                    <circle class="st18" cx="160.6" cy="425.4" r="47.2"/>

                    <radialGradient id="SVGID_17_" cx="332.5733" cy="328.4285" r="94.2193" fx="283.0689" fy="311.2293" gradientTransform="matrix(0.3068 0.9518 -1.1181 0.3604 597.7445 -106.4689)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0.2277" style="stop-color:#E3DD96"/>
                        <stop  offset="0.4332" style="stop-color:#19963C"/>
                        <stop  offset="0.5297" style="stop-color:#303014"/>
                        <stop  offset="1" style="stop-color:#1F68B0"/>
                    </radialGradient>
                    <circle class="st19" cx="334.8" cy="315.5" r="57.3"/>

                    <radialGradient id="SVGID_18_" cx="545.1741" cy="289.4103" r="74.8212" fx="509.5429" fy="267.9062" gradientTransform="matrix(0.9397 -0.3421 0.4018 1.1038 -83.4051 156.4307)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0.203" style="stop-color:#E3DD96"/>
                        <stop  offset="0.2571" style="stop-color:#E1D992"/>
                        <stop  offset="0.3083" style="stop-color:#DACE88"/>
                        <stop  offset="0.3584" style="stop-color:#CFBB75"/>
                        <stop  offset="0.4077" style="stop-color:#BFA05C"/>
                        <stop  offset="0.4561" style="stop-color:#AB7E3B"/>
                        <stop  offset="0.4975" style="stop-color:#965A19"/>
                        <stop  offset="0.5891" style="stop-color:#303014"/>
                        <stop  offset="1" style="stop-color:#1F68B0"/>
                    </radialGradient>
                    <circle class="st20" cx="534.9" cy="290" r="45.5"/>

                    <radialGradient id="SVGID_19_" cx="622.9094" cy="106.3203" r="89.6007" fx="590.2175" fy="68.7028" gradientTransform="matrix(0.9397 -0.3421 0.4018 1.1038 -5.1462 202.0336)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0.203" style="stop-color:#E3DD96"/>
                        <stop  offset="0.2571" style="stop-color:#E1D992"/>
                        <stop  offset="0.3083" style="stop-color:#DACE88"/>
                        <stop  offset="0.3584" style="stop-color:#CFBB75"/>
                        <stop  offset="0.4077" style="stop-color:#BFA05C"/>
                        <stop  offset="0.4561" style="stop-color:#AB7E3B"/>
                        <stop  offset="0.4975" style="stop-color:#965A19"/>
                        <stop  offset="0.5891" style="stop-color:#303014"/>
                        <stop  offset="1" style="stop-color:#1F68B0"/>
                    </radialGradient>
                    <circle class="st21" cx="611.9" cy="114.9" r="54.5"/>
                    <radialGradient id="SVGID_20_" cx="275.8369" cy="108.7603" r="95.7897" gradientUnits="userSpaceOnUse">
                        <stop  offset="0.4653" style="stop-color:#0A2663"/>
                        <stop  offset="0.6856" style="stop-color:#004278"/>
                        <stop  offset="0.723" style="stop-color:#05467A"/>
                        <stop  offset="0.7681" style="stop-color:#145182"/>
                        <stop  offset="0.8174" style="stop-color:#2C648D"/>
                        <stop  offset="0.8696" style="stop-color:#4F7F9E"/>
                        <stop  offset="0.924" style="stop-color:#7BA1B3"/>
                        <stop  offset="0.9796" style="stop-color:#B0CACD"/>
                        <stop  offset="1" style="stop-color:#C5DBD7"/>
                    </radialGradient>
                    <circle class="st22" cx="258.6" cy="88.1" r="71.3"/>

                    <radialGradient id="SVGID_21_" cx="88.3591" cy="665.0778" r="79.3605" fx="44.2284" fy="666.0884" gradientTransform="matrix(0.5194 0.8546 -1.1632 0.7069 816.0635 119.4207)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0" style="stop-color:#DAE0B5"/>
                        <stop  offset="5.244871e-02" style="stop-color:#D5DCB3"/>
                        <stop  offset="0.1151" style="stop-color:#C6D2AD"/>
                        <stop  offset="0.183" style="stop-color:#AEC1A3"/>
                        <stop  offset="0.2545" style="stop-color:#8DAA94"/>
                        <stop  offset="0.329" style="stop-color:#618B82"/>
                        <stop  offset="0.4048" style="stop-color:#2D676C"/>
                        <stop  offset="0.4629" style="stop-color:#004759"/>
                        <stop  offset="0.6609" style="stop-color:#302E1E"/>
                        <stop  offset="0.6794" style="stop-color:#383222"/>
                        <stop  offset="0.7547" style="stop-color:#524130"/>
                        <stop  offset="0.8322" style="stop-color:#644B3A"/>
                        <stop  offset="0.9125" style="stop-color:#6F5140"/>
                        <stop  offset="1" style="stop-color:#735342"/>
                    </radialGradient>
                    <circle class="st23" cx="90.2" cy="681" r="48.8"/>

                    <radialGradient id="SVGID_22_" cx="275.0182" cy="809.5604" r="114.0238" fx="211.6121" fy="811.0124" gradientTransform="matrix(0.2203 0.9754 -1.3277 0.2998 1289.2955 298.5876)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0" style="stop-color:#C5D8DB"/>
                        <stop  offset="0.1324" style="stop-color:#C2D7DA"/>
                        <stop  offset="0.2182" style="stop-color:#BAD3D7"/>
                        <stop  offset="0.2908" style="stop-color:#ABCDD2"/>
                        <stop  offset="0.3561" style="stop-color:#96C5CA"/>
                        <stop  offset="0.4164" style="stop-color:#7ABAC0"/>
                        <stop  offset="0.4731" style="stop-color:#59ACB4"/>
                        <stop  offset="0.527" style="stop-color:#319CA6"/>
                        <stop  offset="0.5774" style="stop-color:#048A96"/>
                        <stop  offset="0.5817" style="stop-color:#008894"/>
                        <stop  offset="0.703" style="stop-color:#003E6B"/>
                        <stop  offset="0.7399" style="stop-color:#003357"/>
                        <stop  offset="0.801" style="stop-color:#00233D"/>
                        <stop  offset="0.8638" style="stop-color:#00192B"/>
                        <stop  offset="0.929" style="stop-color:#001220"/>
                        <stop  offset="1" style="stop-color:#00101C"/>
                    </radialGradient>
                    <circle class="st24" cx="277.7" cy="832.4" r="70.2"/>

                    <radialGradient id="SVGID_23_" cx="439.6955" cy="1014.1891" r="83.5861" gradientTransform="matrix(-0.8464 -0.5325 0.6807 -1.0819 121.535 2345.5574)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0" style="stop-color:#00101C"/>
                        <stop  offset="6.608307e-02" style="stop-color:#001221"/>
                        <stop  offset="0.1465" style="stop-color:#001930"/>
                        <stop  offset="0.2343" style="stop-color:#002349"/>
                        <stop  offset="0.3268" style="stop-color:#00316B"/>
                        <stop  offset="0.4183" style="stop-color:#004394"/>
                        <stop  offset="0.5005" style="stop-color:#3971A6"/>
                        <stop  offset="0.5909" style="stop-color:#719EB8"/>
                        <stop  offset="0.6689" style="stop-color:#9ABFC5"/>
                        <stop  offset="0.7302" style="stop-color:#B3D4CD"/>
                        <stop  offset="0.7673" style="stop-color:#BCDBD0"/>
                    </radialGradient>
                    <circle class="st25" cx="415.6" cy="998.1" r="44.9"/>

                    <radialGradient id="SVGID_24_" cx="603.4595" cy="912.1903" r="65.5738" fx="569.2886" fy="924.9451" gradientTransform="matrix(0.919 0.3942 -0.6714 1.5652 661.2848 -753.4778)" gradientUnits="userSpaceOnUse">
                        <stop  offset="7.425743e-03" style="stop-color:#57A4CF"/>
                        <stop  offset="0.1931" style="stop-color:#9FBECF"/>
                        <stop  offset="0.2379" style="stop-color:#9FBBC9"/>
                        <stop  offset="0.3003" style="stop-color:#9EB2B7"/>
                        <stop  offset="0.373" style="stop-color:#9EA399"/>
                        <stop  offset="0.4529" style="stop-color:#9D8E70"/>
                        <stop  offset="0.5025" style="stop-color:#9C7F53"/>
                        <stop  offset="0.5097" style="stop-color:#977B51"/>
                        <stop  offset="0.5941" style="stop-color:#65553C"/>
                        <stop  offset="0.6677" style="stop-color:#40392E"/>
                        <stop  offset="0.7271" style="stop-color:#292724"/>
                        <stop  offset="0.7649" style="stop-color:#212121"/>
                    </radialGradient>
                    <circle class="st26" cx="596" cy="926.9" r="48.8"/>

                    <radialGradient id="SVGID_25_" cx="1425.443" cy="700.7581" r="79.689" fx="1381.1296" fy="701.7729" gradientTransform="matrix(1 7.047611e-04 -9.592698e-04 1.3611 0.6726 -254.0675)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0" style="stop-color:#DBCDB6"/>
                        <stop  offset="0.1148" style="stop-color:#DBCCB3"/>
                        <stop  offset="0.1892" style="stop-color:#DAC8AB"/>
                        <stop  offset="0.2521" style="stop-color:#DAC29C"/>
                        <stop  offset="0.3083" style="stop-color:#D9BA87"/>
                        <stop  offset="0.3292" style="stop-color:#D8B67D"/>
                        <stop  offset="0.3636" style="stop-color:#D4B279"/>
                        <stop  offset="0.3993" style="stop-color:#CAA76C"/>
                        <stop  offset="0.4356" style="stop-color:#B99458"/>
                        <stop  offset="0.4721" style="stop-color:#A0793B"/>
                        <stop  offset="0.4876" style="stop-color:#946C2C"/>
                        <stop  offset="0.5693" style="stop-color:#9F4B1D"/>
                        <stop  offset="0.703" style="stop-color:#3B1600"/>
                    </radialGradient>
                    <circle class="st27" cx="1416.1" cy="706.6" r="52.8"/>

                    <radialGradient id="SVGID_26_" cx="1663.7854" cy="839.8477" r="76.9019" fx="1621.0137" fy="840.3524" gradientTransform="matrix(0.7602 0.6497 -0.688 0.805 976.8445 -917.2147)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0.1139" style="stop-color:#DED7CC"/>
                        <stop  offset="0.2822" style="stop-color:#DEB46F"/>
                        <stop  offset="0.3674" style="stop-color:#DCB16C"/>
                        <stop  offset="0.4226" style="stop-color:#D6A964"/>
                        <stop  offset="0.4693" style="stop-color:#CC9A55"/>
                        <stop  offset="0.5113" style="stop-color:#BE8640"/>
                        <stop  offset="0.5497" style="stop-color:#AB6C25"/>
                        <stop  offset="0.5857" style="stop-color:#954C04"/>
                        <stop  offset="0.5866" style="stop-color:#944B03"/>
                        <stop  offset="0.7129" style="stop-color:#0C0E14"/>
                        <stop  offset="1" style="stop-color:#1F68B0"/>
                    </radialGradient>
                    <circle class="st28" cx="1664.5" cy="844" r="48.3"/>

                    <radialGradient id="SVGID_27_" cx="1685.3632" cy="989.2433" r="58.3802" fx="1652.8992" fy="989.9868" gradientTransform="matrix(0.9374 0.3482 -0.4739 1.276 574.2874 -859.8065)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0.2277" style="stop-color:#B6DBD2"/>
                        <stop  offset="0.3048" style="stop-color:#B3DAD0"/>
                        <stop  offset="0.3547" style="stop-color:#ABD5CB"/>
                        <stop  offset="0.397" style="stop-color:#9CCDC1"/>
                        <stop  offset="0.4349" style="stop-color:#87C3B3"/>
                        <stop  offset="0.47" style="stop-color:#6BB5A1"/>
                        <stop  offset="0.5025" style="stop-color:#4BA48C"/>
                        <stop  offset="0.5272" style="stop-color:#2C9478"/>
                        <stop  offset="0.6634" style="stop-color:#0C0E14"/>
                        <stop  offset="1" style="stop-color:#1F68B0"/>
                    </radialGradient>
                    <circle class="st29" cx="1686.7" cy="1001" r="35.9"/>

                    <radialGradient id="SVGID_28_" cx="1860.1715" cy="795.5692" r="47.7065" fx="1833.6429" fy="796.1767" gradientTransform="matrix(0.9526 0.3043 -0.3222 1.0088 344.5208 -572.9373)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0.2277" style="stop-color:#CCDEDC"/>
                        <stop  offset="0.3416" style="stop-color:#CADBD9"/>
                        <stop  offset="0.4154" style="stop-color:#C3D3D1"/>
                        <stop  offset="0.4778" style="stop-color:#B7C4C3"/>
                        <stop  offset="0.5336" style="stop-color:#A6AFAF"/>
                        <stop  offset="0.585" style="stop-color:#919495"/>
                        <stop  offset="0.5866" style="stop-color:#909394"/>
                        <stop  offset="0.7129" style="stop-color:#0C0E14"/>
                        <stop  offset="1" style="stop-color:#1F68B0"/>
                    </radialGradient>
                    <circle class="st30" cx="1860.7" cy="798.6" r="35.4"/>

                    <radialGradient id="SVGID_29_" cx="1788.0917" cy="588.1669" r="81.1849" fx="1742.9465" fy="589.2008" gradientTransform="matrix(0.9705 0.2411 -0.3281 1.321 245.7088 -619.8231)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0" style="stop-color:#DBD7B1"/>
                        <stop  offset="0.126" style="stop-color:#D9D4B0"/>
                        <stop  offset="0.2077" style="stop-color:#D4CCAC"/>
                        <stop  offset="0.2768" style="stop-color:#CBBDA5"/>
                        <stop  offset="0.3389" style="stop-color:#BEA89B"/>
                        <stop  offset="0.3963" style="stop-color:#AE8C8F"/>
                        <stop  offset="0.4495" style="stop-color:#9A6C7F"/>
                        <stop  offset="0.4629" style="stop-color:#94627B"/>
                        <stop  offset="0.6609" style="stop-color:#302E1E"/>
                        <stop  offset="0.6794" style="stop-color:#383222"/>
                        <stop  offset="0.7547" style="stop-color:#524130"/>
                        <stop  offset="0.8322" style="stop-color:#644B3A"/>
                        <stop  offset="0.9125" style="stop-color:#6F5140"/>
                        <stop  offset="1" style="stop-color:#735342"/>
                    </radialGradient>
                    <circle class="st31" cx="1790" cy="604.5" r="50"/>

                    <radialGradient id="SVGID_30_" cx="1793.943" cy="322.9722" r="103.9897" fx="1736.1166" fy="324.2964" gradientTransform="matrix(0.4659 0.8848 -1.2044 0.6342 1347.1005 -1469.1821)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0.2277" style="stop-color:#D8DBB6"/>
                        <stop  offset="0.3048" style="stop-color:#D7DAB3"/>
                        <stop  offset="0.3547" style="stop-color:#D2D5AB"/>
                        <stop  offset="0.397" style="stop-color:#C9CD9C"/>
                        <stop  offset="0.4349" style="stop-color:#BEC387"/>
                        <stop  offset="0.47" style="stop-color:#AEB56B"/>
                        <stop  offset="0.5025" style="stop-color:#9CA44B"/>
                        <stop  offset="0.5272" style="stop-color:#8B942C"/>
                        <stop  offset="0.6634" style="stop-color:#0C0E14"/>
                        <stop  offset="1" style="stop-color:#1F68B0"/>
                    </radialGradient>
                    <circle class="st32" cx="1796.4" cy="343.8" r="64"/>

                    <radialGradient id="SVGID_31_" cx="1686.8674" cy="65.6364" r="58.7903" fx="1656.2314" fy="77.0717" gradientTransform="matrix(0.4154 0.9096 -1.5492 0.7075 1087.7719 -1515.2188)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0.1931" style="stop-color:#DBA272"/>
                        <stop  offset="0.2581" style="stop-color:#D49B6C"/>
                        <stop  offset="0.3535" style="stop-color:#C0875A"/>
                        <stop  offset="0.4676" style="stop-color:#A0673E"/>
                        <stop  offset="0.5951" style="stop-color:#743B16"/>
                        <stop  offset="0.5965" style="stop-color:#733A16"/>
                        <stop  offset="0.7649" style="stop-color:#1D3827"/>
                        <stop  offset="0.7671" style="stop-color:#1D3625"/>
                        <stop  offset="0.7935" style="stop-color:#1D2714"/>
                        <stop  offset="0.8262" style="stop-color:#1C1C09"/>
                        <stop  offset="0.8722" style="stop-color:#1C1602"/>
                        <stop  offset="1" style="stop-color:#1C1400"/>
                    </radialGradient>
                    <circle class="st33" cx="1679.1" cy="74.7" r="43.8"/>

                    <radialGradient id="SVGID_32_" cx="1309.7069" cy="57.2409" r="46.7308" fx="1285.3552" fy="66.3306" gradientTransform="matrix(0.4154 0.9096 -1.5492 0.7075 854.29 -1174.5999)" gradientUnits="userSpaceOnUse">
                        <stop  offset="0.1931" style="stop-color:#B0B0B0"/>
                        <stop  offset="0.2511" style="stop-color:#ACAAA9"/>
                        <stop  offset="0.3362" style="stop-color:#A19895"/>
                        <stop  offset="0.4381" style="stop-color:#8E7A75"/>
                        <stop  offset="0.5519" style="stop-color:#745249"/>
                        <stop  offset="0.5965" style="stop-color:#694035"/>
                        <stop  offset="0.7649" style="stop-color:#1D3827"/>
                        <stop  offset="0.7671" style="stop-color:#1D3625"/>
                        <stop  offset="0.7935" style="stop-color:#1D2714"/>
                        <stop  offset="0.8262" style="stop-color:#1C1C09"/>
                        <stop  offset="0.8722" style="stop-color:#1C1602"/>
                        <stop  offset="1" style="stop-color:#1C1400"/>
                    </radialGradient>
                    <circle class="st34" cx="1303.5" cy="64.4" r="34.8"/>
                    <g>

                        <radialGradient id="SVGID_33_" cx="1562.5452" cy="212.1575" r="121.3223" fx="1518.2793" fy="161.2222" gradientTransform="matrix(0.9683 -0.2891 0.3451 1.1246 -23.5115 430.9419)" gradientUnits="userSpaceOnUse">
                            <stop  offset="0.203" style="stop-color:#E3DD96"/>
                            <stop  offset="0.258" style="stop-color:#E1D992"/>
                            <stop  offset="0.3101" style="stop-color:#DACE88"/>
                            <stop  offset="0.361" style="stop-color:#CFBB75"/>
                            <stop  offset="0.4111" style="stop-color:#BFA05C"/>
                            <stop  offset="0.4603" style="stop-color:#AB7E3B"/>
                            <stop  offset="0.5024" style="stop-color:#965A19"/>
                            <stop  offset="0.5908" style="stop-color:#303014"/>
                            <stop  offset="1" style="stop-color:#1F68B0"/>
                        </radialGradient>
                        <path class="st35" d="M1612.5,224.3c-1.8,33.2-30.5,58.5-64.1,56.7c-33.5-1.9-59.3-30.2-57.4-63.4c1.8-33.2,30.5-58.5,64.1-56.7
                    S1614.3,191.2,1612.5,224.3z"/>
                        <g>
                            <defs>
                                <path id="SVGID_34_" d="M1497,194.7c-3.4,7-5.5,14.7-6,22.9c-1.8,33.2,23.9,61.5,57.4,63.4c33.4,1.8,61.9-23.3,64-56.1
                            L1497,194.7z"/>
                            </defs>
                            <clipPath id="SVGID_35_">
                                <use xlink:href="#SVGID_34_"  style="overflow:visible;"/>
                            </clipPath>

                            <radialGradient id="SVGID_36_" cx="1623.5767" cy="73.7386" r="22.7911" gradientTransform="matrix(-0.2776 0.9612 -4.4786 -1.271 2337.7292 -1253.8723)" gradientUnits="userSpaceOnUse">
                                <stop  offset="0.5693" style="stop-color:#000000;stop-opacity:0"/>
                                <stop  offset="0.8762" style="stop-color:#000000;stop-opacity:0.8"/>
                                <stop  offset="1" style="stop-color:#000000;stop-opacity:0"/>
                            </radialGradient>
                            <path class="st36" d="M1659.3,243.8c-4.9,16-55.1,15.2-112.3-1.8c-57.2-17-99.6-43.8-94.7-59.8s55.1-15.2,112.3,1.8
                        C1621.7,201,1664.1,227.7,1659.3,243.8z"/>
                        </g>
                        <g>
                            <defs>
                                <path id="SVGID_37_" d="M1608,246.4c0-0.3,0.1-0.7,0.1-1c0.2-2.5,0.1-5-0.3-7.4c-14.2-8.6-34.2-17.5-57-24.7
                            c-20.8-6.7-40.5-10.9-56.3-12.5c3.2-9,8.5-16.9,15.3-23.3c-31.8-6.2-55.3-4.6-59.2,5.8c-5.9,15.7,34.6,45.2,90.4,66.1
                            c55.9,20.8,106,25,111.9,9.4c1.4-3.6,0.3-8-2.9-12.8C1638.7,247,1624.2,247.2,1608,246.4z"/>
                            </defs>
                            <clipPath id="SVGID_38_">
                                <use xlink:href="#SVGID_37_"  style="overflow:visible;"/>
                            </clipPath>

                            <radialGradient id="SVGID_39_" cx="1622.0721" cy="82.8831" r="16.8387" gradientTransform="matrix(-0.3301 0.9444 -5.9145 -2.0378 2578.2903 -1141.9729)" gradientUnits="userSpaceOnUse">
                                <stop  offset="0.6436" style="stop-color:#B37100;stop-opacity:0"/>
                                <stop  offset="0.6653" style="stop-color:#B67709;stop-opacity:0.1252"/>
                                <stop  offset="0.7005" style="stop-color:#BE8921;stop-opacity:0.3283"/>
                                <stop  offset="0.7447" style="stop-color:#CAA548;stop-opacity:0.584"/>
                                <stop  offset="0.7959" style="stop-color:#DBCC7E;stop-opacity:0.8794"/>
                                <stop  offset="0.8168" style="stop-color:#E3DD96"/>
                                <stop  offset="0.8768" style="stop-color:#E2DB94;stop-opacity:0.6726"/>
                                <stop  offset="0.9071" style="stop-color:#DDD38C;stop-opacity:0.5074"/>
                                <stop  offset="0.9307" style="stop-color:#D5C680;stop-opacity:0.3784"/>
                                <stop  offset="0.9509" style="stop-color:#CAB36E;stop-opacity:0.2683"/>
                                <stop  offset="0.9688" style="stop-color:#BC9B57;stop-opacity:0.1701"/>
                                <stop  offset="0.985" style="stop-color:#AB7D3A;stop-opacity:8.175308e-02"/>
                                <stop  offset="1" style="stop-color:#965A19;stop-opacity:0"/>
                            </radialGradient>
                            <path class="st37" d="M1652.9,258.7c-5.9,15.7-56,11.5-111.9-9.4c-55.9-20.8-96.4-50.4-90.4-66.1c5.9-15.7,56-11.5,111.9,9.4
                        C1618.4,213.4,1658.9,243,1652.9,258.7z"/>
                        </g>
                    </g>
                </g>
                <g id="Impassable" class="st38">
                    <linearGradient id="SVGID_40_" gradientUnits="userSpaceOnUse" x1="479.6057" y1="125.895" x2="479.6057" y2="5.895">
                        <stop  offset="0" style="stop-color:#D42A00"/>
                        <stop  offset="0.9977" style="stop-color:#D42A00;stop-opacity:2.339244e-03"/>
                        <stop  offset="1" style="stop-color:#D42A00;stop-opacity:0"/>
                    </linearGradient>
                    <polygon class="st39" points="491.5,119 508.2,42.2 488.8,0 451,0 474.7,51.4 469.5,125.9 	"/>
                    <linearGradient id="SVGID_41_" gradientUnits="userSpaceOnUse" x1="1750.1592" y1="481.1613" x2="1920" y2="481.1613">
                        <stop  offset="0" style="stop-color:#D42A00"/>
                        <stop  offset="1" style="stop-color:#D42A00;stop-opacity:0"/>
                    </linearGradient>
                    <polygon class="st40" points="1750.2,504 1751.3,519.5 1802.8,471 1920,461.8 1920,442.8 1801,452.1 	"/>
                    <linearGradient id="SVGID_42_" gradientUnits="userSpaceOnUse" x1="1462.4514" y1="854.8181" x2="1510.4514" y2="1072.818">
                        <stop  offset="0" style="stop-color:#D42A00"/>
                        <stop  offset="1" style="stop-color:#D42A00;stop-opacity:0"/>
                    </linearGradient>
                    <path class="st41" d="M1537.3,1080c1.3-85.8-28.6-168.9-86.8-240.9l-22,20.2c6.5,8.5,12.7,17.3,18.4,26.2
                c37.7,59.1,57.1,126.2,56.3,194.5H1537.3z"/>
                    <linearGradient id="SVGID_43_" gradientUnits="userSpaceOnUse" x1="1048.7864" y1="40.7214" x2="1044.7864" y2="0.7214">
                        <stop  offset="0" style="stop-color:#D42A00"/>
                        <stop  offset="1" style="stop-color:#D42A00;stop-opacity:0"/>
                    </linearGradient>
                    <rect x="1027.7" class="st42" width="39.2" height="51.2"/>
                    <linearGradient id="SVGID_44_" gradientUnits="userSpaceOnUse" x1="183.4549" y1="578.3419" x2="7.4549" y2="508.3419">
                        <stop  offset="0" style="stop-color:#D42A00"/>
                        <stop  offset="1" style="stop-color:#D42A00;stop-opacity:0"/>
                    </linearGradient>
                    <path class="st43" d="M177.5,584.2L0,457v59.1l151.2,97.8C156.3,608.1,166.4,596.5,177.5,584.2z"/>
                    <linearGradient id="SVGID_45_" gradientUnits="userSpaceOnUse" x1="1746.1791" y1="243.028" x2="1910.1791" y2="51.028">
                        <stop  offset="0" style="stop-color:#D42A00"/>
                        <stop  offset="1" style="stop-color:#D42A00;stop-opacity:0"/>
                    </linearGradient>
                    <polygon class="st44" points="1777.7,237.2 1920,57.1 1920,8.5 1747.2,248.9 	"/>
                </g>
                <g id="Buttons">
                    <g id="Kashyyyk"></g>
                    <g id="Felucia"></g>
                    <g id="Toydaria"></g>
                    <g id="Naboo"></g>
                    <g id="Dathomir"></g>
                    <g id="CatoNeimoidia"></g>
                    <g id="Bothawui"></g>
                    <g id="NalHutta"></g>
                    <g id="Tatooine"></g>
                    <g id="Ryloth"></g>
                    <g id="Geonosis"></g>
                    <g id="Rodia"></g>
                    <g id="Dagobah"></g>
                    <g id="Mustafar"></g>
                    <g id="Bespin"></g>
                    <g id="Hoth"></g>
                    <g id="Endor"></g>
                    <g id="Sullust"></g>
                    <g id="Corellia"></g>
                    <g id="Malastare"></g>
                    <g id="Alderaan"></g>
                    <g id="Mandalore"></g>
                    <g id="Kessel"></g>
                    <g id="MonCalamari"></g>
                    <g id="Utapau"></g>
                    <g id="Saleucami"></g>
                    <g id="Yavin"></g>
                    <g id="Ilum"></g>
                    <g id="OrdMantell"></g>
                    <g id="Dantooine"></g>
                    <g id="Mygeeto"></g>
                <g id="Coruscant">
                    <radialGradient id="Coruscant_2_" cx="1051.6376" cy="991.0864" r="88.2472" gradientUnits="userSpaceOnUse">
                        <stop  offset="0.3069" style="stop-color:#732B14"/>
                        <stop  offset="0.4758" style="stop-color:#752E17"/>
                        <stop  offset="0.5819" style="stop-color:#7A361F"/>
                        <stop  offset="0.6707" style="stop-color:#82452E"/>
                        <stop  offset="0.75" style="stop-color:#8E5943"/>
                        <stop  offset="0.8231" style="stop-color:#9E745D"/>
                        <stop  offset="0.8914" style="stop-color:#B1957E"/>
                        <stop  offset="0.9549" style="stop-color:#C7BBA5"/>
                        <stop  offset="1" style="stop-color:#DADBC5"/>
                    </radialGradient>
                    <circle id="Coruscant_1_" class="st50" cx="1035.8" cy="972" r="65.7"/>
                    <g class="st51">
                        <path class="st48" d="M972.7,1039.1c-1,4-4.5,6.7-8.6,6.7c-5.3,0-9-4.3-9-8.9c0-4.3,3.4-8.8,8.9-8.8c5.3,0,8.2,4.1,8.6,6.8h-4.6
                    c-0.5-1.3-1.8-3-4.1-3c-2.9,0-4.6,2.6-4.6,5c0,2.6,1.7,5.1,4.6,5.1c2.7,0,3.8-2.3,4.1-2.9H972.7z"/>
                        <path class="st48" d="M984.8,1028.1c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C977.4,1031.3,980.1,1028.1,984.8,1028.1z M984.9,1042c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C980.2,1039.5,982,1042,984.9,1042z"/>
                        <path class="st48" d="M998,1028.5h5.4c3,0,4.1,0.4,5.2,1.2c1.4,1.1,2.1,2.9,2.1,4.6c0,2-1,4.8-4.2,5.4l4.6,5.8h-5l-3.9-5.5h0v5.5
                    H998V1028.5z M1002.1,1037h1.5c2.6,0,2.9-1.6,2.9-2.4c0-1.5-1.1-2.3-2.8-2.3h-1.6V1037z"/>
                        <path class="st48" d="M1019,1028.5v10.3c0,1.1,0.1,3.2,2.2,3.2c2.2,0,2.2-1.9,2.2-3.2v-10.3h4.3v10.3c0,2.9-0.6,4.1-1.7,5.2
                    c-1.1,1.1-2.6,1.8-4.8,1.8c-1.2,0-3.5-0.3-4.9-1.8c-1.4-1.5-1.7-2.7-1.7-5.2v-10.3H1019z"/>
                        <path class="st48" d="M1039.3,1033.4c-0.1-0.6-0.2-1.7-1.6-1.7c-0.8,0-1.5,0.5-1.5,1.3c0,1,0.5,1.2,3.5,2.6c3.2,1.4,4,2.9,4,4.9
                    c0,2.5-1.4,5.2-5.9,5.2c-4.9,0-6.1-3.2-6.1-5.4v-0.6h4.3c0,2,1.2,2.3,1.8,2.3c1,0,1.7-0.9,1.7-1.6c0-1.1-0.7-1.4-3.3-2.5
                    c-1.2-0.5-4.2-1.7-4.2-4.9s3.1-5,6-5c1.7,0,3.5,0.6,4.6,1.9c1,1.2,1.1,2.4,1.1,3.4H1039.3z"/>
                        <path class="st48" d="M1064.5,1039.1c-1,4-4.5,6.7-8.6,6.7c-5.3,0-9-4.3-9-8.9c0-4.3,3.4-8.8,8.9-8.8c5.3,0,8.2,4.1,8.6,6.8h-4.6
                    c-0.5-1.3-1.8-3-4.1-3c-2.9,0-4.6,2.6-4.6,5c0,2.6,1.7,5.1,4.6,5.1c2.7,0,3.8-2.3,4.1-2.9H1064.5z"/>
                        <path class="st48" d="M1071.8,1043l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H1071.8z M1073,1039.6h3.6l-1.7-5.8h0h0
                    L1073,1039.6z"/>
                        <path class="st48" d="M1086.6,1028.5h3.7l6.6,10.7l0,0l-0.2-10.6h4.2v17h-3.8l-6.5-10.3l0,0l0.1,10.3h-4.2V1028.5z"/>
                        <path class="st48" d="M1107.6,1032.3h-3.4v-3.8h11v3.8h-3.3v13.2h-4.3V1032.3z"/>
                    </g>
                </g>
                <g id="Names">
                    <g class="st51">
                        <path class="st48" d="M14.7,721.2h5.6c1.9,0,5.3,0,7.5,3.2c1.2,1.6,1.6,3.4,1.6,5.3c0,4.6-2.3,8.6-8.8,8.6h-6V721.2z M19,734.4
                    h1.9c3.2,0,4.2-2.3,4.2-4.7c0-1-0.2-2.2-0.8-3.2c-0.5-0.8-1.4-1.6-3.3-1.6H19V734.4z"/>
                        <path class="st48" d="M37,735.8l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H37z M38.2,732.3h3.6l-1.7-5.8h0h0L38.2,732.3z"/>
                        <path class="st48" d="M51.7,721.2h3.7l6.6,10.7l0,0l-0.2-10.6h4.2v17h-3.8l-6.5-10.3l0,0l0.1,10.3h-4.2V721.2z"/>
                        <path class="st48" d="M72.8,725h-3.4v-3.8h11v3.8h-3.3v13.2h-4.3V725z"/>
                        <path class="st48" d="M91.8,720.9c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C84.4,724.1,87.1,720.9,91.8,720.9z M91.9,734.7c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C87.2,732.3,89,734.7,91.9,734.7z"/>
                        <path class="st48" d="M113.1,720.9c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C105.7,724.1,108.3,720.9,113.1,720.9z M113.1,734.7c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C108.4,732.3,110.2,734.7,113.1,734.7z"/>
                        <path class="st48" d="M126.2,721.2h4.3v17h-4.3V721.2z"/>
                        <path class="st48" d="M135.5,721.2h3.7l6.6,10.7l0,0l-0.2-10.6h4.2v17H146l-6.5-10.3l0,0l0.1,10.3h-4.2V721.2z"/>
                        <path class="st48" d="M154.8,721.2h9.5v3.8h-5.3v2.6h5.1v3.8h-5.1v2.9h5.3v3.8h-9.5V721.2z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M218.4,891.5h5.6l3.4,11.2h0l3.3-11.2h5.6v17h-4l0.1-12.7l0,0l-3.6,12.8H226l-3.6-12.8l0,0l0.1,12.7h-4
                    V891.5z"/>
                        <path class="st48" d="M244.8,902.4l-5.1-10.8h4.7l2.5,6.8l2.6-6.8h4.7l-5,10.8v6.2h-4.3V902.4z"/>
                        <path class="st48" d="M273.9,898.9c0,0.3,0,0.6,0,0.9c0,5.7-4.4,9.1-9.1,9.1c-5.2,0-9-4-9-8.9c0-5.1,4.1-8.8,9.1-8.8
                    c4.1,0,7.6,2.7,8.5,6h-4.9c-0.7-1.2-1.9-2.2-3.7-2.2c-2.1,0-4.6,1.6-4.6,4.9c0,3.6,2.5,5.1,4.7,5.1c2.2,0,3.6-1.1,4.1-2.7h-5.1
                    v-3.5H273.9z"/>
                        <path class="st48" d="M277.9,891.5h9.5v3.8h-5.3v2.6h5.1v3.8h-5.1v2.9h5.3v3.8h-9.5V891.5z"/>
                        <path class="st48" d="M292.1,891.5h9.5v3.8h-5.3v2.6h5.1v3.8h-5.1v2.9h5.3v3.8h-9.5V891.5z"/>
                        <path class="st48" d="M308,895.3h-3.4v-3.8h11v3.8h-3.3v13.2H308V895.3z"/>
                        <path class="st48" d="M327,891.2c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C319.6,894.4,322.3,891.2,327,891.2z M327.1,905c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C322.4,902.6,324.2,905,327.1,905z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M567.2,971.2c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C559.8,974.4,562.4,971.2,567.2,971.2z M567.3,985c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C562.6,982.6,564.3,985,567.3,985z"/>
                        <path class="st48" d="M580.3,971.5h5.4c3,0,4.1,0.4,5.2,1.2c1.4,1.1,2.1,2.9,2.1,4.6c0,2-1,4.8-4.2,5.4l4.6,5.8h-5l-3.9-5.5h0v5.5
                    h-4.2V971.5z M584.5,980.1h1.5c2.6,0,2.9-1.6,2.9-2.4c0-1.5-1.1-2.3-2.8-2.3h-1.6V980.1z"/>
                        <path class="st48" d="M597.1,971.5h5.6c1.9,0,5.3,0,7.5,3.2c1.2,1.6,1.6,3.4,1.6,5.3c0,4.6-2.3,8.6-8.8,8.6h-6V971.5z
                     M601.4,984.7h1.9c3.2,0,4.2-2.3,4.2-4.7c0-1-0.2-2.2-0.8-3.2c-0.5-0.8-1.4-1.6-3.3-1.6h-1.9V984.7z"/>
                        <path class="st48" d="M624.9,971.5h5.6l3.4,11.2h0l3.3-11.2h5.6v17h-4l0.1-12.7l0,0l-3.6,12.8h-2.9l-3.6-12.8l0,0l0.1,12.7h-4
                    V971.5z"/>
                        <path class="st48" d="M651.8,986.1l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H651.8z M653,982.6h3.6l-1.7-5.8h0h0L653,982.6z
                    "/>
                        <path class="st48" d="M666.6,971.5h3.7l6.6,10.7l0,0l-0.2-10.6h4.2v17h-3.8l-6.5-10.3l0,0l0.1,10.3h-4.2V971.5z"/>
                        <path class="st48" d="M687.6,975.3h-3.4v-3.8h11v3.8H692v13.2h-4.3V975.3z"/>
                        <path class="st48" d="M698.6,971.5h9.5v3.8h-5.3v2.6h5.1v3.8h-5.1v2.9h5.3v3.8h-9.5V971.5z"/>
                        <path class="st48" d="M712.8,971.5h4.3v13.2h5v3.8h-9.4V971.5z"/>
                        <path class="st48" d="M725.5,971.5h4.3v13.2h5v3.8h-9.4V971.5z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M385.9,1040.9h4.3v17h-4.3V1040.9z"/>
                        <path class="st48" d="M395.2,1040.9h4.3v13.2h5v3.8h-9.4V1040.9z"/>
                        <path class="st48" d="M412.1,1040.9v10.3c0,1.1,0.1,3.2,2.2,3.2c2.2,0,2.2-1.9,2.2-3.2v-10.3h4.3v10.3c0,2.9-0.6,4.1-1.7,5.2
                    c-1.1,1.1-2.6,1.8-4.8,1.8c-1.2,0-3.5-0.3-4.9-1.8c-1.4-1.5-1.7-2.7-1.7-5.2v-10.3H412.1z"/>
                        <path class="st48" d="M425.7,1040.9h5.6l3.4,11.2h0l3.3-11.2h5.6v17h-4l0.1-12.7l0,0l-3.6,12.8h-2.9l-3.6-12.8l0,0l0.1,12.7h-4
                    V1040.9z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M1280.9,984.2c-1,4-4.5,6.7-8.6,6.7c-5.3,0-9-4.3-9-8.9c0-4.3,3.4-8.8,8.9-8.8c5.3,0,8.2,4.1,8.6,6.8h-4.6
                    c-0.5-1.3-1.8-3-4.1-3c-2.9,0-4.6,2.6-4.6,5c0,2.6,1.7,5.1,4.6,5.1c2.7,0,3.8-2.3,4.1-2.9H1280.9z"/>
                        <path class="st48" d="M1293,973.3c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C1285.6,976.5,1288.3,973.3,1293,973.3z M1293.1,987.1c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C1288.4,984.7,1290.2,987.1,1293.1,987.1z"/>
                        <path class="st48" d="M1306.2,973.6h5.4c3,0,4.1,0.4,5.2,1.2c1.4,1.1,2.1,2.9,2.1,4.6c0,2-1,4.8-4.2,5.4l4.6,5.8h-5l-3.9-5.5h0
                    v5.5h-4.2V973.6z M1310.3,982.1h1.5c2.6,0,2.9-1.6,2.9-2.4c0-1.5-1.1-2.3-2.8-2.3h-1.6V982.1z"/>
                        <path class="st48" d="M1323,973.6h9.5v3.8h-5.3v2.6h5.1v3.8h-5.1v2.9h5.3v3.8h-9.5V973.6z"/>
                        <path class="st48" d="M1337.3,973.6h4.3v13.2h5v3.8h-9.4V973.6z"/>
                        <path class="st48" d="M1350,973.6h4.3v13.2h5v3.8h-9.4V973.6z"/>
                        <path class="st48" d="M1362.6,973.6h4.3v17h-4.3V973.6z"/>
                        <path class="st48" d="M1375.8,988.1l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H1375.8z M1377,984.7h3.6l-1.7-5.8h0h0
                    L1377,984.7z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M962.9,782c-1,4-4.5,6.7-8.6,6.7c-5.3,0-9-4.3-9-8.9c0-4.3,3.4-8.8,8.9-8.8c5.3,0,8.2,4.1,8.6,6.8h-4.6
                    c-0.5-1.3-1.8-3-4.1-3c-2.9,0-4.6,2.6-4.6,5c0,2.6,1.7,5.1,4.6,5.1c2.7,0,3.8-2.3,4.1-2.9H962.9z"/>
                        <path class="st48" d="M970.2,785.9l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H970.2z M971.4,782.4h3.6l-1.7-5.8h0h0
                    L971.4,782.4z"/>
                        <path class="st48" d="M986,775.1h-3.4v-3.8h11v3.8h-3.3v13.2H986V775.1z"/>
                        <path class="st48" d="M1005,771c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C997.6,774.2,1000.3,771,1005,771z M1005.1,784.8c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C1000.4,782.4,1002.2,784.8,1005.1,784.8z"/>
                        <path class="st48" d="M1026.9,771.3h3.7l6.6,10.7l0,0l-0.2-10.6h4.2v17h-3.8L1031,778l0,0l0.1,10.3h-4.2V771.3z"/>
                        <path class="st48" d="M1046.2,771.3h9.5v3.8h-5.3v2.6h5.1v3.8h-5.1v2.9h5.3v3.8h-9.5V771.3z"/>
                        <path class="st48" d="M1060.4,771.3h4.3v17h-4.3V771.3z"/>
                        <path class="st48" d="M1069.7,771.3h5.6l3.4,11.2h0l3.3-11.2h5.6v17h-4l0.1-12.7l0,0l-3.6,12.8h-2.9l-3.6-12.8l0,0l0.1,12.7h-4
                    V771.3z"/>
                        <path class="st48" d="M1100.8,771c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C1093.3,774.2,1096,771,1100.8,771z M1100.8,784.8c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C1096.1,782.4,1097.9,784.8,1100.8,784.8z"/>
                        <path class="st48" d="M1113.9,771.3h4.3v17h-4.3V771.3z"/>
                        <path class="st48" d="M1123,771.3h5.6c1.9,0,5.3,0,7.5,3.2c1.2,1.6,1.6,3.4,1.6,5.3c0,4.6-2.3,8.6-8.8,8.6h-6V771.3z
                     M1127.4,784.5h1.9c3.2,0,4.2-2.3,4.2-4.7c0-1-0.2-2.2-0.8-3.2c-0.5-0.8-1.4-1.6-3.3-1.6h-1.9V784.5z"/>
                        <path class="st48" d="M1142.1,771.3h4.3v17h-4.3V771.3z"/>
                        <path class="st48" d="M1155.3,785.9l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H1155.3z M1156.5,782.4h3.6l-1.7-5.8h0h0
                    L1156.5,782.4z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M748.2,915.7l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H748.2z M749.4,912.2h3.6l-1.7-5.8h0h0
                    L749.4,912.2z"/>
                        <path class="st48" d="M763,901.1h4.3v13.2h5v3.8H763V901.1z"/>
                        <path class="st48" d="M775.6,901.1h5.6c1.9,0,5.3,0,7.5,3.2c1.2,1.6,1.6,3.4,1.6,5.3c0,4.6-2.3,8.6-8.8,8.6h-6V901.1z
                     M779.9,914.3h1.9c3.2,0,4.2-2.3,4.2-4.7c0-1-0.2-2.2-0.8-3.2c-0.5-0.8-1.4-1.6-3.3-1.6h-1.9V914.3z"/>
                        <path class="st48" d="M794.6,901.1h9.5v3.8h-5.3v2.6h5.1v3.8h-5.1v2.9h5.3v3.8h-9.5V901.1z"/>
                        <path class="st48" d="M808.7,901.1h5.4c3,0,4.1,0.4,5.2,1.2c1.4,1.1,2.1,2.9,2.1,4.6c0,2-1,4.8-4.2,5.4l4.6,5.8h-5l-3.9-5.5h0v5.5
                    h-4.2V901.1z M812.9,909.7h1.5c2.6,0,2.9-1.6,2.9-2.4c0-1.5-1.1-2.3-2.8-2.3h-1.6V909.7z"/>
                        <path class="st48" d="M830.2,915.7l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H830.2z M831.3,912.2h3.6l-1.7-5.8h0h0
                    L831.3,912.2z"/>
                        <path class="st48" d="M849.8,915.7l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H849.8z M851,912.2h3.6l-1.7-5.8h0h0L851,912.2z
                    "/>
                        <path class="st48" d="M864.6,901.1h3.7l6.6,10.7l0,0l-0.2-10.6h4.2v17h-3.8l-6.5-10.3l0,0l0.1,10.3h-4.2V901.1z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M769.9,649h4.3v7.7h0l4.8-7.7h4.6l-5.6,8.5l6,8.5H779l-4.6-7.4h0v7.4h-4.3V649z"/>
                        <path class="st48" d="M792.2,663.5l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17H799l-0.8-2.5H792.2z M793.4,660.1h3.6l-1.7-5.8h0h0
                    L793.4,660.1z"/>
                        <path class="st48" d="M813.5,654c-0.1-0.6-0.2-1.7-1.6-1.7c-0.8,0-1.5,0.5-1.5,1.3c0,1,0.5,1.2,3.5,2.6c3.2,1.4,4,2.9,4,4.9
                    c0,2.5-1.4,5.2-5.9,5.2c-4.9,0-6.1-3.2-6.1-5.4v-0.6h4.3c0,2,1.2,2.3,1.8,2.3c1,0,1.7-0.9,1.7-1.6c0-1.1-0.7-1.4-3.3-2.5
                    c-1.2-0.5-4.2-1.7-4.2-4.9s3.1-5,6-5c1.7,0,3.5,0.6,4.6,1.9c1,1.2,1.1,2.4,1.1,3.4H813.5z"/>
                        <path class="st48" d="M822.1,649h4.3v6.4h5.6V649h4.3v17H832v-6.8h-5.6v6.8h-4.3V649z"/>
                        <path class="st48" d="M844.7,659.8l-5.1-10.8h4.7l2.5,6.8l2.6-6.8h4.7l-5,10.8v6.2h-4.3V659.8z"/>
                        <path class="st48" d="M861.9,659.8l-5.1-10.8h4.7l2.5,6.8l2.6-6.8h4.7l-5,10.8v6.2h-4.3V659.8z"/>
                        <path class="st48" d="M879,659.8l-5.1-10.8h4.7l2.5,6.8l2.6-6.8h4.7l-5,10.8v6.2H879V659.8z"/>
                        <path class="st48" d="M891.9,649h4.3v7.7h0l4.8-7.7h4.6l-5.6,8.5l6,8.5h-5.1l-4.6-7.4h0v7.4h-4.3V649z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M570.5,731h5.6l3.4,11.2h0l3.3-11.2h5.6v17h-4l0.1-12.7l0,0l-3.6,12.8H578l-3.6-12.8l0,0l0.1,12.7h-4V731z"
                        />
                        <path class="st48" d="M597.4,745.5l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H597.4z M598.5,742.1h3.6l-1.7-5.8h0h0
                    L598.5,742.1z"/>
                        <path class="st48" d="M612.1,731h3.7l6.6,10.7l0,0l-0.2-10.6h4.2v17h-3.8l-6.5-10.3l0,0l0.1,10.3h-4.2V731z"/>
                        <path class="st48" d="M631.3,731h5.6c1.9,0,5.3,0,7.5,3.2c1.2,1.6,1.6,3.4,1.6,5.3c0,4.6-2.3,8.6-8.8,8.6h-6V731z M635.7,744.2
                    h1.9c3.2,0,4.2-2.3,4.2-4.7c0-1-0.2-2.2-0.8-3.2c-0.5-0.8-1.4-1.6-3.3-1.6h-1.9V744.2z"/>
                        <path class="st48" d="M653.6,745.5l-0.9,2.5H648l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H653.6z M654.8,742.1h3.6l-1.7-5.8h0h0
                    L654.8,742.1z"/>
                        <path class="st48" d="M668.5,731h4.3v13.2h5v3.8h-9.4V731z"/>
                        <path class="st48" d="M689.1,730.7c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C681.7,733.9,684.4,730.7,689.1,730.7z M689.2,744.5c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C684.5,742.1,686.3,744.5,689.2,744.5z"/>
                        <path class="st48" d="M702.3,731h5.4c3,0,4.1,0.4,5.2,1.2c1.4,1.1,2.1,2.9,2.1,4.6c0,2-1,4.8-4.2,5.4l4.6,5.8h-5l-3.9-5.5h0v5.5
                    h-4.2V731z M706.4,739.5h1.5c2.6,0,2.9-1.6,2.9-2.4c0-1.5-1.1-2.3-2.8-2.3h-1.6V739.5z"/>
                        <path class="st48" d="M719.1,731h9.5v3.8h-5.3v2.6h5.1v3.8h-5.1v2.9h5.3v3.8h-9.5V731z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M329,681.6h5.6c1.9,0,5.3,0,7.5,3.2c1.2,1.6,1.6,3.4,1.6,5.3c0,4.6-2.3,8.6-8.8,8.6h-6V681.6z M333.3,694.8
                    h1.9c3.2,0,4.2-2.3,4.2-4.7c0-1-0.2-2.2-0.8-3.2c-0.5-0.8-1.4-1.6-3.3-1.6h-1.9V694.8z"/>
                        <path class="st48" d="M351.3,696.2l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17H358l-0.8-2.5H351.3z M352.5,692.7h3.6l-1.7-5.8h0h0
                    L352.5,692.7z"/>
                        <path class="st48" d="M367,685.5h-3.4v-3.8h11v3.8h-3.3v13.2H367V685.5z"/>
                        <path class="st48" d="M378,681.6h4.3v6.4h5.6v-6.4h4.3v17h-4.3v-6.8h-5.6v6.8H378V681.6z"/>
                        <path class="st48" d="M405.4,681.3c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C398,684.5,400.6,681.3,405.4,681.3z M405.5,695.2c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C400.8,692.7,402.5,695.2,405.5,695.2z"/>
                        <path class="st48" d="M418.5,681.6h5.6l3.4,11.2h0l3.3-11.2h5.6v17h-4l0.1-12.7l0,0l-3.6,12.8h-2.9l-3.6-12.8l0,0l0.1,12.7h-4
                    V681.6z"/>
                        <path class="st48" d="M441.5,681.6h4.3v17h-4.3V681.6z"/>
                        <path class="st48" d="M450.7,681.6h5.4c3,0,4.1,0.4,5.2,1.2c1.4,1.1,2.1,2.9,2.1,4.6c0,2-1,4.8-4.2,5.4l4.6,5.8h-5l-3.9-5.5h0v5.5
                    h-4.2V681.6z M454.9,690.2h1.5c2.6,0,2.9-1.6,2.9-2.4c0-1.5-1.1-2.3-2.8-2.3h-1.6V690.2z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M126.5,491.7l-5.1-10.8h4.7l2.5,6.8l2.6-6.8h4.7l-5,10.8v6.2h-4.3V491.7z"/>
                        <path class="st48" d="M141.7,495.4l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H141.7z M142.9,492h3.6l-1.7-5.8h0h0L142.9,492z
                    "/>
                        <path class="st48" d="M158.3,480.9l3.4,11.9h0l3.4-11.9h4.5l-5.7,17h-4.5l-5.7-17H158.3z"/>
                        <path class="st48" d="M173.1,480.9h4.3v17h-4.3V480.9z"/>
                        <path class="st48" d="M182.4,480.9h3.7l6.6,10.7l0,0l-0.2-10.6h4.2v17H193l-6.5-10.3l0,0l0.1,10.3h-4.2V480.9z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M282.9,375.6h9.3v3.8H287v2.9h4.9v3.8H287v6.5h-4.2V375.6z"/>
                        <path class="st48" d="M296.3,375.6h9.5v3.8h-5.3v2.6h5.1v3.8h-5.1v2.9h5.3v3.8h-9.5V375.6z"/>
                        <path class="st48" d="M310.5,375.6h4.3v13.2h5v3.8h-9.4V375.6z"/>
                        <path class="st48" d="M327.4,375.6v10.3c0,1.1,0.1,3.2,2.2,3.2c2.2,0,2.2-1.9,2.2-3.2v-10.3h4.3v10.3c0,2.9-0.6,4.1-1.7,5.2
                    c-1.1,1.1-2.6,1.8-4.8,1.8c-1.2,0-3.5-0.3-4.9-1.8c-1.4-1.5-1.7-2.7-1.7-5.2v-10.3H327.4z"/>
                        <path class="st48" d="M357.7,386.2c-1,4-4.5,6.7-8.6,6.7c-5.3,0-9-4.3-9-8.9c0-4.3,3.4-8.8,8.9-8.8c5.3,0,8.2,4.1,8.6,6.8h-4.6
                    c-0.5-1.3-1.8-3-4.1-3c-2.9,0-4.6,2.6-4.6,5c0,2.6,1.7,5.1,4.6,5.1c2.7,0,3.8-2.3,4.1-2.9H357.7z"/>
                        <path class="st48" d="M361.6,375.6h4.3v17h-4.3V375.6z"/>
                        <path class="st48" d="M374.8,390.1l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H374.8z M376,386.7h3.6l-1.7-5.8h0h0L376,386.7z
                    "/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M492.4,341.4c-0.1-0.6-0.2-1.7-1.6-1.7c-0.8,0-1.5,0.5-1.5,1.3c0,1,0.5,1.2,3.5,2.6c3.2,1.4,4,2.9,4,4.9
                    c0,2.5-1.4,5.2-5.9,5.2c-4.9,0-6.1-3.2-6.1-5.4v-0.6h4.3c0,2,1.2,2.3,1.8,2.3c1,0,1.7-0.9,1.7-1.6c0-1.1-0.7-1.4-3.3-2.5
                    c-1.2-0.5-4.2-1.7-4.2-4.9s3.1-5,6-5c1.7,0,3.5,0.6,4.6,1.9c1,1.2,1.1,2.4,1.1,3.4H492.4z"/>
                        <path class="st48" d="M504.5,351l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H504.5z M505.7,347.6h3.6l-1.7-5.8h0h0
                    L505.7,347.6z"/>
                        <path class="st48" d="M519.3,336.4h4.3v13.2h5v3.8h-9.4V336.4z"/>
                        <path class="st48" d="M532,336.4h9.5v3.8h-5.3v2.6h5.1v3.8h-5.1v2.9h5.3v3.8H532V336.4z"/>
                        <path class="st48" d="M550.3,336.4v10.3c0,1.1,0.1,3.2,2.2,3.2c2.2,0,2.2-1.9,2.2-3.2v-10.3h4.3v10.3c0,2.9-0.6,4.1-1.7,5.2
                    c-1.1,1.1-2.6,1.8-4.8,1.8c-1.2,0-3.5-0.3-4.9-1.8c-1.4-1.5-1.7-2.7-1.7-5.2v-10.3H550.3z"/>
                        <path class="st48" d="M580.6,347.1c-1,4-4.5,6.7-8.6,6.7c-5.3,0-9-4.3-9-8.9c0-4.3,3.4-8.8,8.9-8.8c5.3,0,8.2,4.1,8.6,6.8h-4.6
                    c-0.5-1.3-1.8-3-4.1-3c-2.9,0-4.6,2.6-4.6,5c0,2.6,1.7,5.1,4.6,5.1c2.7,0,3.8-2.3,4.1-2.9H580.6z"/>
                        <path class="st48" d="M587.9,351l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H587.9z M589.1,347.6h3.6l-1.7-5.8h0h0
                    L589.1,347.6z"/>
                        <path class="st48" d="M602.7,336.4h5.6l3.4,11.2h0l3.3-11.2h5.6v17h-4l0.1-12.7l0,0l-3.6,12.8h-2.9l-3.6-12.8l0,0l0.1,12.7h-4
                    V336.4z"/>
                        <path class="st48" d="M625.7,336.4h4.3v17h-4.3V336.4z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M569.1,167.7h4.3v7.7h0l4.8-7.7h4.6l-5.6,8.5l6,8.5h-5.1l-4.6-7.4h0v7.4h-4.3V167.7z"/>
                        <path class="st48" d="M586.5,167.7h9.5v3.8h-5.3v2.6h5.1v3.8h-5.1v2.9h5.3v3.8h-9.5V167.7z"/>
                        <path class="st48" d="M607.3,172.7c-0.1-0.6-0.2-1.7-1.6-1.7c-0.8,0-1.5,0.5-1.5,1.3c0,1,0.5,1.2,3.5,2.6c3.2,1.4,4,2.9,4,4.9
                    c0,2.5-1.4,5.2-5.9,5.2c-4.9,0-6.1-3.2-6.1-5.4v-0.6h4.3c0,2,1.2,2.3,1.8,2.3c1,0,1.7-0.9,1.7-1.6c0-1.1-0.7-1.4-3.3-2.5
                    c-1.2-0.5-4.2-1.7-4.2-4.9s3.1-5,6-5c1.7,0,3.5,0.6,4.6,1.9c1,1.2,1.1,2.4,1.1,3.4H607.3z"/>
                        <path class="st48" d="M622.7,172.7c-0.1-0.6-0.2-1.7-1.6-1.7c-0.8,0-1.5,0.5-1.5,1.3c0,1,0.5,1.2,3.5,2.6c3.2,1.4,4,2.9,4,4.9
                    c0,2.5-1.4,5.2-5.9,5.2c-4.9,0-6.1-3.2-6.1-5.4v-0.6h4.3c0,2,1.2,2.3,1.8,2.3c1,0,1.7-0.9,1.7-1.6c0-1.1-0.7-1.4-3.3-2.5
                    c-1.2-0.5-4.2-1.7-4.2-4.9s3.1-5,6-5c1.7,0,3.5,0.6,4.6,1.9c1,1.2,1.1,2.4,1.1,3.4H622.7z"/>
                        <path class="st48" d="M631.3,167.7h9.5v3.8h-5.3v2.6h5.1v3.8h-5.1v2.9h5.3v3.8h-9.5V167.7z"/>
                        <path class="st48" d="M645.5,167.7h4.3v13.2h5v3.8h-9.4V167.7z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M154.5,131.8h5.6l3.4,11.2h0l3.3-11.2h5.6v17h-4l0.1-12.7l0,0l-3.6,12.8h-2.9l-3.6-12.8l0,0l0.1,12.7h-4
                    V131.8z"/>
                        <path class="st48" d="M185.6,131.4c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C178.2,134.6,180.8,131.4,185.6,131.4z M185.7,145.3c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C181,142.8,182.7,145.3,185.7,145.3z"/>
                        <path class="st48" d="M198.7,131.8h3.7l6.6,10.7l0,0l-0.2-10.6h4.2v17h-3.8l-6.5-10.3l0,0l0.1,10.3h-4.2V131.8z"/>
                        <path class="st48" d="M243.6,142.4c-1,4-4.5,6.7-8.6,6.7c-5.3,0-9-4.3-9-8.9c0-4.3,3.4-8.8,8.9-8.8c5.3,0,8.2,4.1,8.6,6.8h-4.6
                    c-0.5-1.3-1.8-3-4.1-3c-2.9,0-4.6,2.6-4.6,5c0,2.6,1.7,5.1,4.6,5.1c2.7,0,3.8-2.3,4.1-2.9H243.6z"/>
                        <path class="st48" d="M250.9,146.3l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H250.9z M252.1,142.9h3.6L254,137h0h0
                    L252.1,142.9z"/>
                        <path class="st48" d="M265.8,131.8h4.3V145h5v3.8h-9.4V131.8z"/>
                        <path class="st48" d="M283.4,146.3l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H283.4z M284.6,142.9h3.6l-1.7-5.8h0h0
                    L284.6,142.9z"/>
                        <path class="st48" d="M298.1,131.8h5.6l3.4,11.2h0l3.3-11.2h5.6v17h-4l0.1-12.7l0,0l-3.6,12.8h-2.9l-3.6-12.8l0,0l0.1,12.7h-4
                    V131.8z"/>
                        <path class="st48" d="M325,146.3l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H325z M326.2,142.9h3.6L328,137h0h0L326.2,142.9z"
                        />
                        <path class="st48" d="M339.8,131.8h5.4c3,0,4.1,0.4,5.2,1.2c1.4,1.1,2.1,2.9,2.1,4.6c0,2-1,4.8-4.2,5.4l4.6,5.8h-5l-3.9-5.5h0v5.5
                    h-4.2V131.8z M344,140.3h1.5c2.6,0,2.9-1.6,2.9-2.4c0-1.5-1.1-2.3-2.8-2.3H344V140.3z"/>
                        <path class="st48" d="M356.7,131.8h4.3v17h-4.3V131.8z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M784.4,164.4h3.7l6.6,10.7l0,0l-0.2-10.6h4.2v17H795l-6.5-10.3l0,0l0.1,10.3h-4.2V164.4z"/>
                        <path class="st48" d="M807.7,178.9l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H807.7z M808.8,175.5h3.6l-1.7-5.8h0h0
                    L808.8,175.5z"/>
                        <path class="st48" d="M822.5,164.4h4.3v13.2h5v3.8h-9.4V164.4z"/>
                        <path class="st48" d="M844.1,164.4h4.3v6.4h5.6v-6.4h4.3v17H854v-6.8h-5.6v6.8h-4.3V164.4z"/>
                        <path class="st48" d="M867.6,164.4v10.3c0,1.1,0.1,3.2,2.2,3.2c2.2,0,2.2-1.9,2.2-3.2v-10.3h4.3v10.3c0,2.9-0.6,4.1-1.7,5.2
                    c-1.1,1.1-2.6,1.8-4.8,1.8c-1.2,0-3.5-0.3-4.9-1.8c-1.4-1.5-1.7-2.7-1.7-5.2v-10.3H867.6z"/>
                        <path class="st48" d="M883,168.2h-3.4v-3.8h11v3.8h-3.3v13.2H883V168.2z"/>
                        <path class="st48" d="M896.7,168.2h-3.4v-3.8h11v3.8h-3.3v13.2h-4.3V168.2z"/>
                        <path class="st48" d="M910.9,178.9l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H910.9z M912.1,175.5h3.6l-1.7-5.8h0h0
                    L912.1,175.5z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M728.4,407.1h-3.4v-3.8h11v3.8h-3.3v13.2h-4.3V407.1z"/>
                        <path class="st48" d="M747.5,403c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C740.1,406.2,742.7,403,747.5,403z M747.5,416.8c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C742.9,414.4,744.6,416.8,747.5,416.8z"/>
                        <path class="st48" d="M763.1,414.1l-5.1-10.8h4.7l2.5,6.8l2.6-6.8h4.7l-5,10.8v6.2h-4.3V414.1z"/>
                        <path class="st48" d="M775.7,403.3h5.6c1.9,0,5.3,0,7.5,3.2c1.2,1.6,1.6,3.4,1.6,5.3c0,4.6-2.3,8.6-8.8,8.6h-6V403.3z
                     M780.1,416.5h1.9c3.2,0,4.2-2.3,4.2-4.7c0-1-0.2-2.2-0.8-3.1c-0.5-0.8-1.4-1.6-3.3-1.6h-1.9V416.5z"/>
                        <path class="st48" d="M798,417.8l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H798z M799.2,414.4h3.6l-1.7-5.8h0h0L799.2,414.4z
                    "/>
                        <path class="st48" d="M812.8,403.3h5.4c3,0,4.1,0.4,5.2,1.2c1.4,1.1,2.1,2.9,2.1,4.6c0,2-1,4.8-4.2,5.4l4.6,5.8h-5l-3.9-5.5h0v5.5
                    h-4.2V403.3z M816.9,411.8h1.5c2.6,0,2.9-1.6,2.9-2.4c0-1.5-1.1-2.3-2.8-2.3h-1.6V411.8z"/>
                        <path class="st48" d="M829.6,403.3h4.3v17h-4.3V403.3z"/>
                        <path class="st48" d="M842.8,417.8l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H842.8z M844,414.4h3.6l-1.7-5.8h0h0L844,414.4z
                    "/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M960.5,310.3h5.2c2.9,0,4.2,0.3,5.5,1.7c0.8,0.8,1,1.8,1,2.8c0,1.3-0.6,2.6-2,3.4c2.7,1,2.8,3.2,2.8,4
                    c0,1.4-0.5,2.9-1.6,3.7c-1.6,1.3-2.7,1.5-5.6,1.5h-5.4V310.3z M964.7,316.7h1.5c0.6,0,1.8,0,1.8-1.4c0-1.3-1.2-1.3-1.8-1.3h-1.5
                    V316.7z M964.7,323.5h2c0.6,0,2.2,0,2.2-1.6c0-1.5-1.5-1.5-2.2-1.5h-2V323.5z"/>
                        <path class="st48" d="M985.2,310c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C977.8,313.2,980.5,310,985.2,310z M985.3,323.8c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C980.6,321.4,982.4,323.8,985.3,323.8z"/>
                        <path class="st48" d="M1000,314.1h-3.4v-3.8h11v3.8h-3.3v13.2h-4.3V314.1z"/>
                        <path class="st48" d="M1011,310.3h4.3v6.4h5.6v-6.4h4.3v17h-4.3v-6.8h-5.6v6.8h-4.3V310.3z"/>
                        <path class="st48" d="M1034.1,324.8l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H1034.1z M1035.3,321.4h3.6l-1.7-5.8h0h0
                    L1035.3,321.4z"/>
                        <path class="st48" d="M1051,310.3l2.3,11.1h0l2.5-11.1h3.3l2.5,11.1h0l2.3-11.1h4.4l-4.5,17h-3.8l-2.6-11h0l-2.6,11h-3.9l-4.4-17
                    H1051z"/>
                        <path class="st48" d="M1076.2,310.3v10.3c0,1.1,0.1,3.2,2.2,3.2c2.2,0,2.2-1.9,2.2-3.2v-10.3h4.3v10.3c0,2.9-0.6,4.1-1.7,5.2
                    c-1.1,1.1-2.6,1.8-4.8,1.8c-1.2,0-3.5-0.3-4.9-1.8c-1.4-1.5-1.7-2.7-1.7-5.2v-10.3H1076.2z"/>
                        <path class="st48" d="M1089.8,310.3h4.3v17h-4.3V310.3z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M1046.8,593.9h5.6l3.4,11.2h0l3.3-11.2h5.6v17h-4l0.1-12.7l0,0l-3.6,12.8h-2.9l-3.6-12.8l0,0l0.1,12.7h-4
                    V593.9z"/>
                        <path class="st48" d="M1073.6,608.5l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H1073.6z M1074.8,605.1h3.6l-1.7-5.8h0h0
                    L1074.8,605.1z"/>
                        <path class="st48" d="M1088.5,593.9h4.3v13.2h5v3.8h-9.4V593.9z"/>
                        <path class="st48" d="M1106.1,608.5l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H1106.1z M1107.3,605.1h3.6l-1.7-5.8h0h0
                    L1107.3,605.1z"/>
                        <path class="st48" d="M1127.3,598.9c-0.1-0.6-0.2-1.7-1.6-1.7c-0.8,0-1.5,0.5-1.5,1.3c0,1,0.5,1.2,3.5,2.6c3.2,1.4,4,2.9,4,4.9
                    c0,2.5-1.4,5.2-5.9,5.2c-4.9,0-6.1-3.2-6.1-5.4v-0.6h4.3c0,2,1.2,2.3,1.8,2.3c1,0,1.7-0.9,1.7-1.6c0-1.1-0.7-1.4-3.3-2.5
                    c-1.2-0.5-4.2-1.7-4.2-4.9s3.1-5,6-5c1.7,0,3.5,0.6,4.6,1.9c1,1.2,1.1,2.4,1.1,3.4H1127.3z"/>
                        <path class="st48" d="M1137.8,597.8h-3.4v-3.8h11v3.8h-3.3V611h-4.3V597.8z"/>
                        <path class="st48" d="M1152,608.5l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H1152z M1153.2,605.1h3.6l-1.7-5.8h0h0
                    L1153.2,605.1z"/>
                        <path class="st48" d="M1166.8,593.9h5.4c3,0,4.1,0.4,5.2,1.2c1.4,1.1,2.1,2.9,2.1,4.6c0,2-1,4.8-4.2,5.4l4.6,5.8h-5l-3.9-5.5h0
                    v5.5h-4.2V593.9z M1170.9,602.5h1.5c2.6,0,2.9-1.6,2.9-2.4c0-1.5-1.1-2.3-2.8-2.3h-1.6V602.5z"/>
                        <path class="st48" d="M1183.7,593.9h9.5v3.8h-5.3v2.6h5.1v3.8h-5.1v2.9h5.3v3.8h-9.5V593.9z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M1196.1,342.5h5.4c3,0,4.1,0.4,5.2,1.2c1.4,1.1,2.1,2.9,2.1,4.6c0,2-1,4.8-4.2,5.4l4.6,5.8h-5l-3.9-5.5h0
                    v5.5h-4.2V342.5z M1200.2,351.1h1.5c2.6,0,2.9-1.6,2.9-2.4c0-1.5-1.1-2.3-2.8-2.3h-1.6V351.1z"/>
                        <path class="st48" d="M1220.9,342.2c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C1213.5,345.4,1216.1,342.2,1220.9,342.2z M1221,356c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C1216.3,353.6,1218,356,1221,356z"/>
                        <path class="st48" d="M1233.9,342.5h5.6c1.9,0,5.3,0,7.5,3.2c1.2,1.6,1.6,3.4,1.6,5.3c0,4.6-2.3,8.6-8.8,8.6h-6V342.5z
                     M1238.3,355.7h1.9c3.2,0,4.2-2.3,4.2-4.7c0-1-0.2-2.2-0.8-3.1c-0.5-0.8-1.4-1.6-3.3-1.6h-1.9V355.7z"/>
                        <path class="st48" d="M1253,342.5h4.3v17h-4.3V342.5z"/>
                        <path class="st48" d="M1266.2,357.1l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H1266.2z M1267.3,353.6h3.6l-1.7-5.8h0h0
                    L1267.3,353.6z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M1243.2,121.7h-3.4v-3.8h11v3.8h-3.3v13.2h-4.3V121.7z"/>
                        <path class="st48" d="M1257.4,132.4l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H1257.4z M1258.6,128.9h3.6l-1.7-5.8h0h0
                    L1258.6,128.9z"/>
                        <path class="st48" d="M1273.2,121.7h-3.4v-3.8h11v3.8h-3.3v13.2h-4.3V121.7z"/>
                        <path class="st48" d="M1292.2,117.5c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C1284.8,120.7,1287.4,117.5,1292.2,117.5z M1292.3,131.4c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C1287.6,128.9,1289.3,131.4,1292.3,131.4z"/>
                        <path class="st48" d="M1313.4,117.5c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C1306,120.7,1308.7,117.5,1313.4,117.5z M1313.5,131.4c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C1308.8,128.9,1310.6,131.4,1313.5,131.4z"/>
                        <path class="st48" d="M1326.5,117.8h4.3v17h-4.3V117.8z"/>
                        <path class="st48" d="M1335.8,117.8h3.7l6.6,10.7l0,0l-0.2-10.6h4.2v17h-3.8l-6.5-10.3l0,0l0.1,10.3h-4.2V117.8z"/>
                        <path class="st48" d="M1355.1,117.8h9.5v3.8h-5.3v2.6h5.1v3.8h-5.1v2.9h5.3v3.8h-9.5V117.8z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M1631.6,117.8h5.4c3,0,4.1,0.4,5.2,1.2c1.4,1.1,2.1,2.9,2.1,4.6c0,2-1,4.8-4.2,5.4l4.6,5.8h-5l-3.9-5.5h0
                    v5.5h-4.2V117.8z M1635.8,126.4h1.5c2.6,0,2.9-1.6,2.9-2.4c0-1.5-1.1-2.3-2.8-2.3h-1.6V126.4z"/>
                        <path class="st48" d="M1651.4,128.7l-5.1-10.8h4.7l2.5,6.8l2.6-6.8h4.7l-5,10.8v6.2h-4.3V128.7z"/>
                        <path class="st48" d="M1664.2,117.8h4.3V131h5v3.8h-9.4V117.8z"/>
                        <path class="st48" d="M1684.8,117.5c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C1677.4,120.7,1680.1,117.5,1684.8,117.5z M1684.9,131.4c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C1680.2,128.9,1682,131.4,1684.9,131.4z"/>
                        <path class="st48" d="M1699.6,121.7h-3.4v-3.8h11v3.8h-3.3v13.2h-4.3V121.7z"/>
                        <path class="st48" d="M1710.6,117.8h4.3v6.4h5.6v-6.4h4.3v17h-4.3V128h-5.6v6.8h-4.3V117.8z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M1502.9,276.8c0,0.3,0,0.6,0,0.9c0,5.7-4.4,9.1-9.1,9.1c-5.2,0-9-4-9-8.9c0-5.1,4.1-8.8,9.1-8.8
                    c4.1,0,7.6,2.7,8.5,6h-4.9c-0.7-1.2-1.9-2.2-3.7-2.2c-2.1,0-4.6,1.6-4.6,4.9c0,3.6,2.5,5.1,4.7,5.1c2.2,0,3.6-1.1,4.1-2.7h-5.1
                    v-3.5H1502.9z"/>
                        <path class="st48" d="M1507,269.4h9.5v3.8h-5.3v2.6h5.1v3.8h-5.1v2.9h5.3v3.8h-9.5V269.4z"/>
                        <path class="st48" d="M1529.1,269.1c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C1521.7,272.3,1524.4,269.1,1529.1,269.1z M1529.2,282.9c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C1524.5,280.5,1526.3,282.9,1529.2,282.9z"/>
                        <path class="st48" d="M1542.3,269.4h3.7l6.6,10.7l0,0l-0.2-10.6h4.2v17h-3.8l-6.5-10.3l0,0l0.1,10.3h-4.2V269.4z"/>
                        <path class="st48" d="M1569.7,269.1c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C1562.3,272.3,1565,269.1,1569.7,269.1z M1569.8,282.9c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C1565.1,280.5,1566.9,282.9,1569.8,282.9z"/>
                        <path class="st48" d="M1589.5,274.4c-0.1-0.6-0.2-1.7-1.6-1.7c-0.8,0-1.5,0.5-1.5,1.3c0,1,0.5,1.2,3.5,2.6c3.2,1.4,4,2.9,4,4.9
                    c0,2.5-1.4,5.2-5.9,5.2c-4.9,0-6.1-3.2-6.1-5.4v-0.6h4.3c0,2,1.2,2.3,1.8,2.3c1,0,1.7-0.9,1.7-1.6c0-1.1-0.7-1.4-3.3-2.5
                    c-1.2-0.5-4.2-1.7-4.2-4.9s3.1-5,6-5c1.7,0,3.5,0.6,4.6,1.9c1,1.2,1.1,2.4,1.1,3.4H1589.5z"/>
                        <path class="st48" d="M1598.1,269.4h4.3v17h-4.3V269.4z"/>
                        <path class="st48" d="M1614.2,274.4c-0.1-0.6-0.2-1.7-1.6-1.7c-0.8,0-1.5,0.5-1.5,1.3c0,1,0.5,1.2,3.5,2.6c3.2,1.4,4,2.9,4,4.9
                    c0,2.5-1.4,5.2-5.9,5.2c-4.9,0-6.1-3.2-6.1-5.4v-0.6h4.3c0,2,1.2,2.3,1.8,2.3c1,0,1.7-0.9,1.7-1.6c0-1.1-0.7-1.4-3.3-2.5
                    c-1.2-0.5-4.2-1.7-4.2-4.9s3.1-5,6-5c1.7,0,3.5,0.6,4.6,1.9c1,1.2,1.1,2.4,1.1,3.4H1614.2z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M1355.4,500h3.7l6.6,10.7l0,0l-0.2-10.6h4.2v17h-3.8l-6.5-10.3l0,0l0.1,10.3h-4.2V500z"/>
                        <path class="st48" d="M1378.6,514.5l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H1378.6z M1379.8,511.1h3.6l-1.7-5.8h0h0
                    L1379.8,511.1z"/>
                        <path class="st48" d="M1393.4,500h5.2c2.9,0,4.2,0.3,5.5,1.7c0.8,0.8,1,1.8,1,2.8c0,1.3-0.6,2.6-2,3.4c2.7,1,2.8,3.2,2.8,4
                    c0,1.4-0.5,2.9-1.6,3.7c-1.6,1.3-2.7,1.5-5.6,1.5h-5.4V500z M1397.6,506.4h1.5c0.6,0,1.8,0,1.8-1.4c0-1.3-1.2-1.3-1.8-1.3h-1.5
                    V506.4z M1397.6,513.2h2c0.6,0,2.2,0,2.2-1.6c0-1.5-1.5-1.5-2.2-1.5h-2V513.2z"/>
                        <path class="st48" d="M1418.1,499.7c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C1410.7,502.9,1413.3,499.7,1418.1,499.7z M1418.1,513.5c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C1413.5,511.1,1415.2,513.5,1418.1,513.5z"/>
                        <path class="st48" d="M1439.3,499.7c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C1431.9,502.9,1434.5,499.7,1439.3,499.7z M1439.4,513.5c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C1434.7,511.1,1436.5,513.5,1439.4,513.5z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M1525.6,591.5h5.6c1.9,0,5.3,0,7.5,3.2c1.2,1.6,1.6,3.4,1.6,5.3c0,4.6-2.3,8.6-8.8,8.6h-6V591.5z
                     M1530,604.7h1.9c3.2,0,4.2-2.3,4.2-4.7c0-1-0.2-2.2-0.8-3.2c-0.5-0.8-1.4-1.6-3.3-1.6h-1.9V604.7z"/>
                        <path class="st48" d="M1547.9,606.1l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H1547.9z M1549.1,602.6h3.6l-1.7-5.8h0h0
                    L1549.1,602.6z"/>
                        <path class="st48" d="M1579.3,598.8c0,0.3,0,0.6,0,0.9c0,5.7-4.4,9.1-9.1,9.1c-5.2,0-9-4-9-8.9c0-5.1,4.1-8.8,9.1-8.8
                    c4.1,0,7.6,2.7,8.5,6h-4.9c-0.7-1.2-1.9-2.2-3.7-2.2c-2.1,0-4.6,1.6-4.6,4.9c0,3.6,2.5,5.1,4.7,5.1c2.2,0,3.6-1.1,4.1-2.7h-5.1
                    v-3.5H1579.3z"/>
                        <path class="st48" d="M1591.5,591.2c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C1584.1,594.4,1586.7,591.2,1591.5,591.2z M1591.5,605c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C1586.8,602.6,1588.6,605,1591.5,605z"/>
                        <path class="st48" d="M1604.6,591.5h5.2c2.9,0,4.2,0.3,5.5,1.7c0.8,0.8,1,1.8,1,2.8c0,1.3-0.6,2.6-2,3.4c2.7,1,2.8,3.2,2.8,4
                    c0,1.4-0.5,2.9-1.6,3.7c-1.6,1.3-2.7,1.5-5.6,1.5h-5.4V591.5z M1608.8,598h1.5c0.6,0,1.8,0,1.8-1.4c0-1.3-1.2-1.3-1.8-1.3h-1.5
                    V598z M1608.8,604.7h2c0.6,0,2.2,0,2.2-1.6c0-1.5-1.5-1.5-2.2-1.5h-2V604.7z"/>
                        <path class="st48" d="M1624.9,606.1l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H1624.9z M1626.1,602.6h3.6l-1.7-5.8h0h0
                    L1626.1,602.6z"/>
                        <path class="st48" d="M1639.7,591.5h4.3v6.4h5.6v-6.4h4.3v17h-4.3v-6.8h-5.6v6.8h-4.3V591.5z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M1371.9,766.2c-0.1-0.6-0.2-1.7-1.6-1.7c-0.8,0-1.5,0.5-1.5,1.3c0,1,0.5,1.2,3.5,2.6c3.2,1.4,4,2.9,4,4.9
                    c0,2.5-1.4,5.2-5.9,5.2c-4.9,0-6.1-3.2-6.1-5.4v-0.6h4.3c0,2,1.2,2.3,1.8,2.3c1,0,1.7-0.9,1.7-1.6c0-1.1-0.7-1.4-3.3-2.5
                    c-1.2-0.5-4.2-1.7-4.2-4.9s3.1-5,6-5c1.7,0,3.5,0.6,4.6,1.9c1,1.2,1.1,2.4,1.1,3.4H1371.9z"/>
                        <path class="st48" d="M1384.7,761.2v10.3c0,1.1,0.1,3.2,2.2,3.2c2.2,0,2.2-1.9,2.2-3.2v-10.3h4.3v10.3c0,2.9-0.6,4.1-1.7,5.2
                    c-1.1,1.1-2.6,1.8-4.8,1.8c-1.2,0-3.5-0.3-4.9-1.8c-1.4-1.5-1.7-2.7-1.7-5.2v-10.3H1384.7z"/>
                        <path class="st48" d="M1398.4,761.2h4.3v13.2h5v3.8h-9.4V761.2z"/>
                        <path class="st48" d="M1411.1,761.2h4.3v13.2h5v3.8h-9.4V761.2z"/>
                        <path class="st48" d="M1428,761.2v10.3c0,1.1,0.1,3.2,2.2,3.2c2.2,0,2.2-1.9,2.2-3.2v-10.3h4.3v10.3c0,2.9-0.6,4.1-1.7,5.2
                    c-1.1,1.1-2.6,1.8-4.8,1.8c-1.2,0-3.5-0.3-4.9-1.8c-1.4-1.5-1.7-2.7-1.7-5.2v-10.3H1428z"/>
                        <path class="st48" d="M1448.3,766.2c-0.1-0.6-0.2-1.7-1.6-1.7c-0.8,0-1.5,0.5-1.5,1.3c0,1,0.5,1.2,3.5,2.6c3.2,1.4,4,2.9,4,4.9
                    c0,2.5-1.4,5.2-5.9,5.2c-4.9,0-6.1-3.2-6.1-5.4v-0.6h4.3c0,2,1.2,2.3,1.8,2.3c1,0,1.7-0.9,1.7-1.6c0-1.1-0.7-1.4-3.3-2.5
                    c-1.2-0.5-4.2-1.7-4.2-4.9s3.1-5,6-5c1.7,0,3.5,0.6,4.6,1.9c1,1.2,1.1,2.4,1.1,3.4H1448.3z"/>
                        <path class="st48" d="M1458.8,765h-3.4v-3.8h11v3.8h-3.3v13.2h-4.3V765z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M1620.6,876.9h5.2c2.9,0,4.2,0.3,5.5,1.7c0.8,0.8,1,1.8,1,2.8c0,1.3-0.6,2.6-2,3.4c2.7,1,2.8,3.2,2.8,4
                    c0,1.4-0.5,2.9-1.6,3.7c-1.6,1.3-2.7,1.5-5.6,1.5h-5.4V876.9z M1624.7,883.4h1.5c0.6,0,1.8,0,1.8-1.4c0-1.3-1.2-1.3-1.8-1.3h-1.5
                    V883.4z M1624.7,890.1h2c0.6,0,2.2,0,2.2-1.6c0-1.5-1.5-1.5-2.2-1.5h-2V890.1z"/>
                        <path class="st48" d="M1637.3,876.9h9.5v3.8h-5.3v2.6h5.1v3.8h-5.1v2.9h5.3v3.8h-9.5V876.9z"/>
                        <path class="st48" d="M1658.1,881.9c-0.1-0.6-0.2-1.7-1.6-1.7c-0.8,0-1.5,0.5-1.5,1.3c0,1,0.5,1.2,3.5,2.6c3.2,1.4,4,2.9,4,4.9
                    c0,2.5-1.4,5.2-5.9,5.2c-4.9,0-6.1-3.2-6.1-5.4v-0.6h4.3c0,2,1.2,2.3,1.8,2.3c1,0,1.7-0.9,1.7-1.6c0-1.1-0.7-1.4-3.3-2.5
                    c-1.2-0.5-4.2-1.7-4.2-4.9s3.1-5,6-5c1.7,0,3.5,0.6,4.6,1.9c1,1.2,1.1,2.4,1.1,3.4H1658.1z"/>
                        <path class="st48" d="M1666.7,876.9h5.6c3.2,0,4.3,0.5,5.2,1.2c1.3,1.1,2,2.8,2,4.5s-0.7,3.5-1.8,4.5c-1.2,1-2.3,1.5-5,1.5h-1.9
                    v5.3h-4.2V876.9z M1670.9,884.8h1.8c0.8,0,2.7,0,2.7-2c0-2-1.9-2-2.9-2h-1.6V884.8z"/>
                        <path class="st48" d="M1683.1,876.9h4.3v17h-4.3V876.9z"/>
                        <path class="st48" d="M1692.3,876.9h3.7l6.6,10.7l0,0l-0.2-10.6h4.2v17h-3.8l-6.5-10.3l0,0l0.1,10.3h-4.2V876.9z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M1643.1,1040.9h9.5v3.8h-5.3v2.6h5.1v3.8h-5.1v2.9h5.3v3.8h-9.5V1040.9z"/>
                        <path class="st48" d="M1657.3,1040.9h3.7l6.6,10.7l0,0l-0.2-10.6h4.2v17h-3.8l-6.5-10.3l0,0l0.1,10.3h-4.2V1040.9z"/>
                        <path class="st48" d="M1676.5,1040.9h5.6c1.9,0,5.3,0,7.5,3.2c1.2,1.6,1.6,3.4,1.6,5.3c0,4.6-2.3,8.6-8.8,8.6h-6V1040.9z
                     M1680.8,1054.1h1.9c3.2,0,4.2-2.3,4.2-4.7c0-1-0.2-2.2-0.8-3.2c-0.5-0.8-1.4-1.6-3.3-1.6h-1.9V1054.1z"/>
                        <path class="st48" d="M1703.6,1040.6c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C1696.2,1043.8,1698.8,1040.6,1703.6,1040.6z M1703.7,1054.4c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C1699,1052,1700.7,1054.4,1703.7,1054.4z"/>
                        <path class="st48" d="M1716.7,1040.9h5.4c3,0,4.1,0.4,5.2,1.2c1.4,1.1,2.1,2.9,2.1,4.6c0,2-1,4.8-4.2,5.4l4.6,5.8h-5l-3.9-5.5h0
                    v5.5h-4.2V1040.9z M1720.9,1049.5h1.5c2.6,0,2.9-1.6,2.9-2.4c0-1.5-1.1-2.3-2.8-2.3h-1.6V1049.5z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M1724,656.6h5.6l3.4,11.2h0l3.3-11.2h5.6v17h-4l0.1-12.7l0,0l-3.6,12.8h-2.9l-3.6-12.8l0,0l0.1,12.7h-4
                    V656.6z"/>
                        <path class="st48" d="M1751.2,656.6v10.3c0,1.1,0.1,3.2,2.2,3.2c2.2,0,2.2-1.9,2.2-3.2v-10.3h4.3v10.3c0,2.9-0.6,4.1-1.7,5.2
                    c-1.1,1.1-2.6,1.8-4.8,1.8c-1.2,0-3.5-0.3-4.9-1.8c-1.4-1.5-1.7-2.7-1.7-5.2v-10.3H1751.2z"/>
                        <path class="st48" d="M1771.6,661.6c-0.1-0.6-0.2-1.7-1.6-1.7c-0.8,0-1.5,0.5-1.5,1.3c0,1,0.5,1.2,3.5,2.6c3.2,1.4,4,2.9,4,4.9
                    c0,2.5-1.4,5.2-5.9,5.2c-4.9,0-6.1-3.2-6.1-5.4V668h4.3c0,2,1.2,2.3,1.8,2.3c1,0,1.7-0.9,1.7-1.6c0-1.1-0.7-1.4-3.3-2.5
                    c-1.2-0.5-4.2-1.7-4.2-4.9s3.1-5,6-5c1.7,0,3.5,0.6,4.6,1.9c1,1.2,1.1,2.4,1.1,3.4H1771.6z"/>
                        <path class="st48" d="M1782.1,660.5h-3.4v-3.8h11v3.8h-3.3v13.2h-4.3V660.5z"/>
                        <path class="st48" d="M1796.3,671.2l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H1796.3z M1797.5,667.7h3.6l-1.7-5.8h0h0
                    L1797.5,667.7z"/>
                        <path class="st48" d="M1811.1,656.6h9.3v3.8h-5.1v2.9h4.9v3.8h-4.9v6.5h-4.2V656.6z"/>
                        <path class="st48" d="M1827.6,671.2l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H1827.6z M1828.8,667.7h3.6l-1.7-5.8h0h0
                    L1828.8,667.7z"/>
                        <path class="st48" d="M1842.4,656.6h5.4c3,0,4.1,0.4,5.2,1.2c1.4,1.1,2.1,2.9,2.1,4.6c0,2-1,4.8-4.2,5.4l4.6,5.8h-5l-3.9-5.5h0
                    v5.5h-4.2V656.6z M1846.5,665.2h1.5c2.6,0,2.9-1.6,2.9-2.4c0-1.5-1.1-2.3-2.8-2.3h-1.6V665.2z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M1826.1,825.1h4.3v6.4h5.6v-6.4h4.3v17h-4.3v-6.8h-5.6v6.8h-4.3V825.1z"/>
                        <path class="st48" d="M1853.5,824.8c5.2,0,9,4.1,9,8.8c0,4.7-3.7,8.8-9,8.8c-5.4,0-8.9-4.3-8.9-8.6c0-1.1,0.2-2.4,0.7-3.6
                    C1846.1,828,1848.7,824.8,1853.5,824.8z M1853.6,838.7c3.1,0,4.6-2.8,4.6-5c0-2.2-1.5-5-4.6-5c-3,0-4.6,2.6-4.6,5
                    C1848.9,836.2,1850.6,838.7,1853.6,838.7z"/>
                        <path class="st48" d="M1868.3,829h-3.4v-3.8h11v3.8h-3.3v13.2h-4.3V829z"/>
                        <path class="st48" d="M1879.3,825.1h4.3v6.4h5.6v-6.4h4.3v17h-4.3v-6.8h-5.6v6.8h-4.3V825.1z"/>
                    </g>
                    <g class="st51">
                        <path class="st48" d="M1752.3,403.7V414c0,1.1,0.1,3.2,2.2,3.2c2.2,0,2.2-1.9,2.2-3.2v-10.3h4.3V414c0,2.9-0.6,4.1-1.7,5.2
                    c-1.1,1.1-2.6,1.8-4.8,1.8c-1.2,0-3.5-0.3-4.9-1.8c-1.4-1.5-1.7-2.7-1.7-5.2v-10.3H1752.3z"/>
                        <path class="st48" d="M1767.7,407.5h-3.4v-3.8h11v3.8h-3.3v13.2h-4.3V407.5z"/>
                        <path class="st48" d="M1781.9,418.3l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H1781.9z M1783.1,414.8h3.6l-1.7-5.8h0h0
                    L1783.1,414.8z"/>
                        <path class="st48" d="M1796.7,403.7h5.6c3.2,0,4.3,0.5,5.2,1.2c1.3,1.1,2,2.8,2,4.5s-0.7,3.5-1.8,4.5c-1.2,1-2.3,1.5-5,1.5h-1.9
                    v5.3h-4.2V403.7z M1800.8,411.6h1.8c0.8,0,2.7,0,2.7-2c0-2-1.9-2-2.9-2h-1.6V411.6z"/>
                        <path class="st48" d="M1816,418.3l-0.9,2.5h-4.7l6.8-17h3.4l6.8,17h-4.7l-0.8-2.5H1816z M1817.2,414.8h3.6l-1.7-5.8h0h0
                    L1817.2,414.8z"/>
                        <path class="st48" d="M1834.4,403.7V414c0,1.1,0.1,3.2,2.2,3.2c2.2,0,2.2-1.9,2.2-3.2v-10.3h4.3V414c0,2.9-0.6,4.1-1.7,5.2
                    c-1.1,1.1-2.6,1.8-4.8,1.8c-1.2,0-3.5-0.3-4.9-1.8c-1.4-1.5-1.7-2.7-1.7-5.2v-10.3H1834.4z"/>
                    </g>
                </g>
        </svg>
        </div>
<!--        <div class="top-bot"></div>-->
    </div>
    <div class="left-right"></div>
</div>
</body>
</html>
