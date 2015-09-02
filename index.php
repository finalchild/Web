<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"> <title>ChalkPE</title>
        <link rel="stylesheet" type="text/css" href="/src/css/style.css" />
        <style media="screen">
            html, body {
                overflow: auto;
            }

            .preview {
                display: inline-block;
                vertical-align: middle;
                margin-right: 32px;
                margin-bottom: 32px;
            }
        </style>
    </head>
    <body>
        <div style='margin-top: 50px; text-align: center'>
            <div style="margin-bottom: 48px">
                <a class="title" href="http://chalk.pe">
                    <?php
                        if(isset($_GET["name"])) echo "<span style=\"font-family: 'Nanum Pen Script'\">" . $_GET["name"] . "님 안녕!</span>";
                        else echo "@ChalkPE";
                    ?>
                </a>
            </div>

            <div class="preview"> <a href="/src/DiurnalCircles.html">
                <img src="/assets/sketch-preview/DiurnalCircles.png" width="165px" height="165px" /> <br />
                Diurnal circles
            </a> </div> <div class="preview"> <a href="/src/SpiralBlocks.html">
                <img src="/assets/sketch-preview/SpiralBlocks.png" width="165px" height="165px" /> <br />
                Spiral blocks
            </a> </div> <div class="preview"> <a href="/src/Present.html">
                <img src="/assets/sketch-preview/Present.png" width="165px" height="165px" /> <br />
                Present
            </a> </div> <div class="preview"> <a href="/src/Triangle.html">
                <img src="/assets/sketch-preview/Triangle.png" width="165px" height="165px" /> <br />
                Triangle
            </a> </div> <div class="preview"> <a href="/src/Group.html">
                <img style="background: #607D8B" src="/assets/sketch-preview/Group.png" width="165px" height="165px" /> <br />
                Group
            </a> </div>
        </div>
    </body>
</html>
