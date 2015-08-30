<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"> <title>ChalkPE</title>
        <link rel="stylesheet" type="text/css" href="/src/css/style.css" />
    </head>
    <body>
        <div style='margin-top: 50px; text-align: center'>
            <div style="margin-bottom: 20px">
                <a class="title" href="http://chalk.pe">
                    <?php
                        if(isset($_GET["name"])) echo "<span style=\"font-family: 'Nanum Pen Script'\">" . $_GET["name"] . "님 안녕!</span>";
                        else echo "@ChalkPE";
                    ?>
                </a>
            </div>

            <div style='display: inline-block; vertical-align: middle; margin-right: 16px'>
                <a href="/src/DiurnalCircles.html">
                    <img src="/assets/sketch-preview/DiurnalCircles.png" width="165px" height="165px" />
                    <br />
                    Diurnal circles
                </a>
            </div>
            <div style='display: inline-block; vertical-align: middle; margin-left: 16px'>
                <a href="/src/SpiralBlocks.html">
                    <img src="/assets/sketch-preview/SpiralBlocks.png" width="165px" height="165px" />
                    <br />
                    Spiral blocks</a>
            </div>
            <div style='display: inline-block; vertical-align: middle; margin-left: 16px'>
                <a href="/src/Present.html">
                    <img src="/assets/sketch-preview/Present.png" width="165px" height="165px" />
                    <br />
                    Present</a>
            </div>
            <div style='display: inline-block; vertical-align: middle; margin-left: 16px'>
                <a href="/src/Triangle.html">
                    <img src="/assets/sketch-preview/Triangle.png" width="165px" height="165px" />
                    <br />
                    Triangle</a>
            </div>
        </div>
    </body>
</html>
