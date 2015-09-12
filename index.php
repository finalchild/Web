<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" /> <title>ChalkPE</title>
        <meta name="viewport" content="maximum-scale=1.0, user-scalable=no" />

        <meta name="theme-color" content="#222222">

        <meta property="og:title" content="ChalkPE" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="assets/profile.png" />
        <meta property="og:description" content="The useless website" />

        <link rel="icon" type="image/png" href="assets/favicon.png" />
        <link rel="stylesheet" type="text/css" href="src/css/style.css" />

        <style media="screen">
            html, body {
                overflow: auto;
            }

            body {
                margin: 50px;
                text-align: center;
            }

            .title {
                margin-bottom: 50px;
                font-size: 64px;
            }

            .title-pen {
                font-family: 'Nanum Pen Script', sans-serif;
            }

            .title-code {
                font-family: 'Inconsolata', 'Nanum Gothic Coding', monospace;
                font-size: 50px;
            }

            .box-wrapper {
                display: inline-block;
                background: #303030;
            }

            .box-title {
                text-align: left;
                font-size: 25px;

                padding: 8px;
                padding-left: 0px;

                background: #383838;
            }

            .box-content {
                padding: 16px;
            }

            .sketch {
                display: inline-block;
                vertical-align: middle;

                margin: 16px;
                margin-bottom: 8px;
            }

            .sketch img {
                background: #222222;
                width: 165px; height: 165px;
            }
        </style>
    </head>
    <body>
        <div class="title"><?php require("src/php/Title.php"); ?></div>

        <div class="box-wrapper">
            <div class="box-title">Sketches</div>
            <div class="box-content">
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
                $(".box-title").each(function(){
                    $(this).html("&nbsp;&nbsp;" + $(this).html());
                });

                $(".sketch").each(function(){
                    var name = $(this).attr("name");
                    var style = $(this).is("[bgcolor]") ? " style=\"background: " + $(this).attr("bgcolor") + "\"" : "";

                    $(this).append("<a href=\"src/" + name + ".html\"><img src=\"assets/sketch-preview/" + name + ".png\" " + style + " /><br />" + name + "</a>");
                });
            });
        </script>
    </body>
</html>
