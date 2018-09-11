<!DOCTYPE html>
<html lang="en" dir="ltr">
        <head>
                <meta charset="utf-8">
                 <link rel="stylesheet" type="text/css" href="css/styles.css">
                 <link href="https://fonts.googleapis.com/css?family=Catamaran:400,700" rel="stylesheet">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <meta name="Robots" content="Noindex,nofollow">

                  <!-- cam specific stuff -->
                  <meta http-equiv="x-ua-compatible" content="ie=edge">

                  <!-- Name of your awesome camera app -->
                <title>Camera App</title>

                <title></title>
        </head>
        <body Id="cambody">
                <!-- Camera -->
            <main id="camera">
                    <div class="topbar">
                            <a href="arkiv.php"><!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In  -->
                                    <svg version="1.1"
                                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                             x="0px" y="0px" width="305.3px" height="308.9px" viewBox="0 0 305.3 308.9" style="enable-background:new 0 0 305.3 308.9;"
                                             xml:space="preserve">
                                            <defs>
                                            </defs>
                                            <g>
                                                    <path d="M142.6,142.6H0V0h142.6V142.6z M23,119.6h96.6V23H23V119.6z"/>
                                                    <path d="M142.6,308.9H0V166.2h142.6V308.9z M23,285.9h96.6v-96.6H23V285.9z"/>
                                                    <path d="M305.3,142.6H162.6V0h142.6V142.6z M185.6,119.6h96.6V23h-96.6V119.6z"/>
                                                    <path d="M305.3,308.9H162.6V166.2h142.6V308.9z M185.6,285.9h96.6v-96.6h-96.6V285.9z"/>
                                            </g>
                                    </svg>
                             </a>
                            <a href="forside.php" class="right">
                                    <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In  -->
                                    <svg version="1.1"
                                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                             x="0px" y="0px" width="155.8px" height="155.8px" viewBox="0 0 155.8 155.8" style="enable-background:new 0 0 155.8 155.8;"
                                             xml:space="preserve">
                                    <defs>
                                    </defs>
                                    <path d="M94.2,77.9l58.3-58.3c4.5-4.5,4.5-11.8,0-16.3c-4.5-4.5-11.8-4.5-16.3,0L77.9,61.6L19.6,3.4c-4.5-4.5-11.8-4.5-16.3,0
                                            c-4.5,4.5-4.5,11.8,0,16.3l58.3,58.3L3.4,136.2c-4.5,4.5-4.5,11.8,0,16.3c2.2,2.2,5.2,3.4,8.1,3.4c2.9,0,5.9-1.1,8.1-3.4l58.3-58.3
                                            l58.3,58.3c2.2,2.2,5.2,3.4,8.1,3.4c2.9,0,5.9-1.1,8.1-3.4c4.5-4.5,4.5-11.8,0-16.3L94.2,77.9z"/>
                                    </svg>
                            </a>


                    </div>
                        <!-- Camera sensor -->
                        <canvas id="camera--sensor"></canvas>
                        <!-- Camera view -->
                        <video id="camera--view" autoplay playsinline></video>
                        <!-- Camera output -->
                        <img src="//:0" alt="" id="camera--output">
                        <!-- Camera trigger -->
                        <div class="triggercontainer">
                                <div class="botleft">
                                        <a href="#">?
                                         </a>
                                </div>
                                <div class="botmid">
                                        <a id="camera--trigger"><!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In  -->
                                                <svg version="1.1"
                                                	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                                	 x="0px" y="0px" width="384.5px" height="307.4px" viewBox="0 0 384.5 307.4" style="enable-background:new 0 0 384.5 307.4;"
                                                	 xml:space="preserve">
                                                <defs>
                                                </defs>
                                                <g>
                                                	<path d="M346.5,307.4H38c-21,0-38-17.1-38-38V95.9c0-21,17.1-38,38-38h46.3c6.6,0,13.6-5.1,15.7-11.3l12-35.9
                                                		C113.9,4.8,120.5,0,126.7,0h131.1c6.2,0,12.8,4.8,14.7,10.6l12,35.9c2.1,6.3,9.1,11.3,15.7,11.3h46.3c21,0,38,17.1,38,38v173.5
                                                		C384.5,290.3,367.4,307.4,346.5,307.4z M38,80.8c-8.3,0-15,6.7-15,15v173.5c0,8.3,6.7,15,15,15h308.4c8.3,0,15-6.7,15-15V95.9
                                                		c0-8.3-6.7-15-15-15h-46.3c-16.5,0-32.3-11.4-37.5-27.1L252.4,23H132.1l-10.3,30.8c-5.2,15.7-21,27.1-37.5,27.1H38z"/>
                                                	<g>
                                                		<path d="M196,72.2c-54,0-98,43.9-98,98c0,54,43.9,98,98,98c54,0,98-43.9,98-98C293.9,116.1,250,72.2,196,72.2L196,72.2z
                                                			 M196,244.1c-40.8,0-73.9-33.2-73.9-73.9c0-40.8,33.2-73.9,73.9-73.9c40.8,0,73.9,33.2,73.9,73.9
                                                			C269.9,210.9,236.7,244.1,196,244.1L196,244.1z M196,244.1"/>
                                                		<path d="M196,117.6c-29,0-52.6,23.6-52.6,52.6c0,29,23.6,52.6,52.6,52.6c29,0,52.6-23.6,52.6-52.6
                                                			C248.5,141.2,225,117.6,196,117.6L196,117.6z M196,198.7c-15.7,0-28.5-12.8-28.5-28.5c0-15.7,12.8-28.5,28.5-28.5
                                                			c15.7,0,28.5,12.8,28.5,28.5C224.5,185.9,211.7,198.7,196,198.7L196,198.7z M196,198.7"/>
                                                	</g>
                                                	<path d="M339.3,108.3c-0.1-0.4-0.2-0.8-0.3-1.1c-0.1-0.4-0.2-0.7-0.4-1.1c-0.2-0.4-0.3-0.7-0.5-1.1c-0.2-0.3-0.4-0.7-0.6-1
                                                		c-0.2-0.3-0.5-0.7-0.7-1c-0.3-0.3-0.5-0.6-0.8-0.9c-0.3-0.3-0.6-0.5-0.9-0.8c-0.3-0.2-0.6-0.5-0.9-0.7c-0.3-0.2-0.7-0.4-1-0.6
                                                		c-0.3-0.2-0.7-0.4-1.1-0.5c-0.4-0.2-0.7-0.3-1.1-0.4c-0.4-0.1-0.8-0.2-1.1-0.3c-0.4-0.1-0.8-0.1-1.2-0.2c-0.8-0.1-1.6-0.1-2.4,0
                                                		c-0.4,0-0.8,0.1-1.2,0.2c-0.4,0.1-0.8,0.2-1.1,0.3c-0.4,0.1-0.7,0.2-1.1,0.4c-0.4,0.2-0.7,0.3-1.1,0.5c-0.3,0.2-0.7,0.4-1,0.6
                                                		c-0.3,0.2-0.7,0.5-0.9,0.7c-0.3,0.3-0.6,0.5-0.9,0.8c-0.3,0.3-0.5,0.6-0.8,0.9c-0.2,0.3-0.5,0.6-0.7,1c-0.2,0.3-0.4,0.7-0.6,1
                                                		c-0.2,0.3-0.4,0.7-0.5,1.1c-0.2,0.4-0.3,0.7-0.4,1.1c-0.1,0.4-0.2,0.8-0.3,1.1c-0.1,0.4-0.1,0.8-0.2,1.2c0,0.4-0.1,0.8-0.1,1.2
                                                		c0,3.2,1.3,6.3,3.5,8.5c0.3,0.3,0.6,0.5,0.9,0.8c0.3,0.2,0.6,0.5,0.9,0.7c0.3,0.2,0.7,0.4,1,0.6c0.3,0.2,0.7,0.4,1.1,0.5
                                                		c0.4,0.2,0.7,0.3,1.1,0.4c0.4,0.1,0.8,0.2,1.1,0.3c0.4,0.1,0.8,0.1,1.2,0.2c0.4,0,0.8,0.1,1.2,0.1c0.4,0,0.8,0,1.2-0.1
                                                		c0.4,0,0.8-0.1,1.2-0.2c0.4-0.1,0.8-0.2,1.1-0.3c0.4-0.1,0.7-0.2,1.1-0.4c0.4-0.1,0.7-0.3,1.1-0.5c0.3-0.2,0.7-0.4,1-0.6
                                                		c0.3-0.2,0.6-0.4,0.9-0.7c0.3-0.2,0.6-0.5,0.9-0.8c2.2-2.2,3.5-5.3,3.5-8.5c0-0.4,0-0.8-0.1-1.2
                                                		C339.4,109.1,339.4,108.7,339.3,108.3L339.3,108.3z M339.3,108.3"/>
                                                	<path d="M339.3,142c-0.1-0.4-0.2-0.8-0.3-1.1c-0.1-0.4-0.2-0.7-0.4-1.1c-0.2-0.4-0.3-0.7-0.5-1.1c-0.2-0.3-0.4-0.7-0.6-1
                                                		c-0.2-0.3-0.5-0.6-0.7-1c-0.2-0.3-0.5-0.6-0.8-0.9c-2.5-2.5-6.1-3.8-9.7-3.5c-0.4,0-0.8,0.1-1.2,0.2c-0.4,0.1-0.8,0.2-1.1,0.3
                                                		c-0.4,0.1-0.7,0.2-1.1,0.4c-0.4,0.2-0.7,0.3-1.1,0.5c-0.3,0.2-0.7,0.4-1,0.6c-0.3,0.2-0.7,0.5-0.9,0.7c-0.3,0.2-0.6,0.5-0.9,0.8
                                                		c-2.2,2.2-3.5,5.3-3.5,8.5c0,0.4,0,0.8,0.1,1.2c0,0.4,0.1,0.8,0.2,1.2c0.1,0.4,0.2,0.8,0.3,1.1c0.1,0.4,0.2,0.7,0.4,1.1
                                                		c0.1,0.4,0.3,0.7,0.5,1.1c0.2,0.3,0.4,0.7,0.6,1c0.2,0.3,0.4,0.6,0.7,0.9c0.2,0.3,0.5,0.6,0.8,0.9c0.3,0.3,0.6,0.5,0.9,0.8
                                                		c0.3,0.2,0.6,0.5,0.9,0.7c0.3,0.2,0.7,0.4,1,0.6c0.3,0.2,0.7,0.4,1.1,0.5c0.4,0.2,0.7,0.3,1.1,0.4c0.4,0.1,0.8,0.2,1.1,0.3
                                                		c0.4,0.1,0.8,0.1,1.2,0.2c0.4,0,0.8,0.1,1.2,0.1c0.4,0,0.8,0,1.2-0.1c0.4,0,0.8-0.1,1.2-0.2c0.4-0.1,0.8-0.2,1.1-0.3
                                                		c0.4-0.1,0.7-0.2,1.1-0.4c0.4-0.1,0.7-0.3,1.1-0.5c0.3-0.2,0.7-0.4,1-0.6c0.3-0.2,0.6-0.5,1-0.7c0.3-0.2,0.6-0.5,0.9-0.8
                                                		c0.3-0.3,0.5-0.6,0.8-0.9c0.2-0.3,0.5-0.6,0.7-0.9c0.2-0.3,0.4-0.7,0.6-1c0.2-0.3,0.4-0.7,0.5-1.1c0.1-0.4,0.3-0.7,0.4-1.1
                                                		c0.1-0.4,0.2-0.8,0.3-1.1c0.1-0.4,0.1-0.8,0.2-1.2c0-0.4,0.1-0.8,0.1-1.2c0-0.4,0-0.8-0.1-1.2C339.4,142.8,339.4,142.4,339.3,142
                                                		L339.3,142z M339.3,142"/>
                                                </g>
                                                </svg>
                                         </a>
                                </div>
                                <div class="botright">
                                        <a href="lb3.html" class="botright"><!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In  -->
                                                <svg version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                                         x="0px" y="0px" width="183.7px" height="147.4px" viewBox="0 0 183.7 147.4" style="enable-background:new 0 0 183.7 147.4;"
                                                         xml:space="preserve">
                                                <defs>
                                                </defs>
                                                <path d="M181.4,80.5c0.1-0.2,0.2-0.3,0.4-0.5c0.1-0.2,0.2-0.3,0.3-0.5c0.1-0.1,0.2-0.3,0.3-0.5c0.1-0.2,0.2-0.4,0.3-0.5
                                                        c0.1-0.2,0.2-0.3,0.2-0.5c0.1-0.2,0.1-0.4,0.2-0.5c0.1-0.2,0.1-0.4,0.2-0.5c0.1-0.2,0.1-0.4,0.1-0.5c0-0.2,0.1-0.4,0.1-0.5
                                                        c0-0.2,0.1-0.4,0.1-0.6c0-0.2,0.1-0.3,0.1-0.5c0-0.4,0.1-0.8,0.1-1.1c0-0.4,0-0.8-0.1-1.1c0-0.2,0-0.3-0.1-0.5
                                                        c0-0.2-0.1-0.4-0.1-0.7c0-0.2-0.1-0.4-0.1-0.5c0-0.2-0.1-0.4-0.1-0.6c-0.1-0.2-0.1-0.3-0.2-0.5c-0.1-0.2-0.1-0.4-0.2-0.5
                                                        c-0.1-0.2-0.1-0.3-0.2-0.5c-0.1-0.2-0.2-0.4-0.3-0.6c-0.1-0.1-0.2-0.3-0.3-0.4c-0.1-0.2-0.2-0.4-0.3-0.5c-0.1-0.2-0.2-0.3-0.3-0.4
                                                        c-0.1-0.2-0.2-0.3-0.3-0.5c-0.2-0.2-0.4-0.5-0.6-0.7c0,0-0.1-0.1-0.1-0.1c0,0,0,0,0,0L118.1,3.4c-4.5-4.5-11.8-4.5-16.3,0
                                                        c-4.5,4.5-4.5,11.8,0,16.3l42.5,42.5H11.5C5.1,62.2,0,67.3,0,73.7C0,80,5.1,85.2,11.5,85.2h132.9l-42.5,42.5
                                                        c-4.5,4.5-4.5,11.8,0,16.3c2.2,2.2,5.2,3.4,8.1,3.4s5.9-1.1,8.1-3.4l62.2-62.2c0,0,0,0,0,0c0,0,0,0,0,0c0.3-0.3,0.5-0.5,0.7-0.8
                                                        C181.2,80.8,181.3,80.7,181.4,80.5z"/>
                                                </svg>
                                         </a>
                                </div>



                        </div>


            </main>

                <!-- Reference to your JavaScript file -->
                <script src="js/script.js"></script>
        </body>
</html>
