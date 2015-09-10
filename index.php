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
                font-size: 70px;
            }

            .box-wrapper {
                display: inline-block;
                background: #303030;
            }

            .box-title {
                text-align: left;
                font-size: 25px;

                padding: 8px;
                padding-left: 16px;

                background: #383838;
            }

            .box-content {
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
            <?php
                if(isset($_GET["name"]) and strlen($_GET["name"]) > 0){
                    $script = [
                        "%s님 안녕!", "%s님, 안녕하세요!", "%s님, 어서 오세요!",
                        "안녕하십니까, %s님", "환영합니다, %s님!", "딱히 %s님이 좋아서 이러는 건 아니거든요!",
                        "정말로 %s님이신가요?", "%s님은 바보! 바보바보바보!", "%s님은 바보입니다!",
                        ("%s님, 벌써 " . date("h") . "시에요!"), "%s님이다!", "%s님, 전 초크라고 해요!",
                        "이분 최소 %s님", "%s님, 얼마까지 알아보고 오셨어요?", "%s님이 왜 여기 계시죠?",
                        "혹시 %s님…?", "판사님, 이분은 %s님이 아니라 고양이입니다!", "%s님이 이 사이트를 좋아합니다",
                        "%s님 안심하세요 여긴 병원입니다", "%s님~ 제가 보고 싶었던 거죠?", "Hello, %s!",
                        "%s님, 이거 볼 시간에 공부나 하는 게 어때요?", "헤에~ %s님인 건가!", "%s님 ㅠㅠ",
                        "아니 세상에 %s님 이게 얼마만이에요!", "%s님, SNS는 인생의 낭비인 거 아시죠?", "엣, %s님?",
                        "%s님은 나가 주세요!", "%s님은 S에요, M이에요? 제가 보기엔 S 같은데…", "우와, %s님이다!",
                        "%s님 그거 아세요? 이프팀 공채가 진행 중이래요!", "%s님이다! 다들 도망쳐!", "%s님이신가요?",
                        "안녕하시라요, %s 동무!", "%s님은 지금부터 숨 쉬는 걸 의식하게 됩니다", "%s님이야말로 진정한 잉여!"
                    ];

                    echo "<span style=\"font-family: 'Nanum Pen Script'\">" . sprintf($script[array_rand($script)], $_GET["name"]) . "</span>";
                }else{
                    echo "@ChalkPE";
                }
            ?>
        </div>

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
                $(".sketch").each(function(){
                    var name = $(this).attr("name");
                    var style = $(this).is("[bgcolor]") ? " style=\"background: " + $(this).attr("bgcolor") + "\"" : "";

                    $(this).append("<a href=\"src/" + name + ".html\"><img src=\"assets/sketch-preview/" + name + ".png\" " + style + " /><br />" + name + "</a>");
                });
            });
        </script>
    </body>
</html>
