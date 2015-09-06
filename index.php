<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"> <title>ChalkPE</title>
        <link rel="stylesheet" type="text/css" href="/src/css/style.css" />
        <style media="screen">
            html, body {
                overflow: auto;
            }

            body {
                margin: 50px;
                text-align: center;
            }

            .title {
                margin-bottom: 50px
            }

            .title a {
                font-size: 80px;
            }

            .sketch-wrapper {
                display: inline-block;
                background: #303030;
            }

            .sketch-title {
                text-align: left;
                font-size: 25px;

                padding: 8px;
                padding-left: 16px;

                background: #383838;
            }

            .sketch-content {
                margin-bottom: 16px;

                padding-left: 32px;
                padding-right: 32px;
            }

            .sketch {
                display: inline-block;
                vertical-align: middle;

                margin-top: 32px;
            }

            .sketch + .sketch {
                margin-left: 32px;
            }

            .sketch img {
                background: #222222;
                width: 165px; height: 165px;
            }
        </style>
    </head>
    <body>
        <div class="title">
            <a href="http://chalk.pe"><?= isset($_GET["name"]) ? "<span style=\"font-family: 'Nanum Pen Script'\">" . $_GET["name"] . "님 안녕!</span>" : "@ChalkPE" ?></a>
        </div>

        <div class="sketch-wrapper">
            <div class="sketch-title">Sketches</div>
            <div class="sketch-content">
                <div class="sketch" name="DiurnalCircles"></div>
                <div class="sketch" name="SpiralBlocks"></div>
                <div class="sketch" name="Present"></div>
                <div class="sketch" name="Triangle"></div>
                <div class="sketch" name="Group" bgcolor="#607D8B"></div>
                <div class="sketch" name="MinecraftTime"></div>
                <div class="sketch" name="Spread"></div>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript">
            $(function(){
                $(".sketch").each(function(){
                    var name = $(this).attr("name");
                    var style = $(this).is("[bgcolor]") ? " style=\"background: " + $(this).attr("bgcolor") + "\"" : "";

                    $(this).append("<a href=\"/src/" + name + ".html\"><img src=\"/assets/sketch-preview/" + name + ".png\" " + style + " /><br />" + name + "</a>");
                });
            });
        </script>
    </body>
</html>
