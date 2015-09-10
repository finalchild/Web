<?php
    if(isset($_GET["name"]) and strlen($_GET["name"]) > 0 and strip_tags($_GET["name"]) === $_GET["name"]){
        $name = htmlentities($_GET["name"], ENT_QUOTES | ENT_HTML5, "UTF-8");

        $scripts = [
            "%s님 안녕!", "%s님, 안녕하세요!", "%s님, 어서 오세요!",
            "반가워요, %s님!", "환영합니다, %s님!", "딱히 %s님이 좋아서 이러는 건 아니거든요!",
            "정말로 %s님이신가요?", "%s님은 바보! 바보바보바보!", "%s님, SNS는 인생의 낭비인 거 아시죠?",
            ("%s님, 벌써 " . date("g") . "시에요!"), "%s님이다!", "> [%s@CHALKPE] $ echo '@ChalkPE'",
            "> Welcome, %s!", "> [ACCESS DENIED]", "%s님은 지금부터 숨 쉬는 걸 의식하게 됩니다",
            "혹시 %s님…?", "판사님, 저는 %s님이 누군지 모릅니다.", "%s님이 이 사이트를 좋아합니다",
            "%s님 안심하세요 여긴 병원입니다", "%s님~ 제가 보고 싶었던 거죠?", "%s님이야말로 진정한 잉여!",
            "%s님, 이거 볼 시간에 공부나 하는 게 어때요?", "헤에~ %s님인 건가!", "이분 최소 %s님",
            "아니 세상에 %s님 이게 얼마만이에요!", "%s님이 왜 여기 계시죠?", "%s님, 전 초크라고 해요!",
            "%s님은 나가 주세요!", "%s님은 S에요, M이에요? 제가 보기엔 S 같은데…", "우와, %s님이다!",
            "%s님 그거 아세요? 이프팀 공채가 진행 중이래요!", "%s님은 바보입니다!", "%s님이신가요?",
            "안녕하신가! 힘세고 강한 아침, 만일 내게 물어보면 당신은 %s님.", "엣, %s님?", "> [데이터 말소]",
            "%s님, 새로고침을 좀 더 대국적으로 하십시오!", "%s님, 얼마까지 알아보고 오셨어요?", "%s님 ㅠㅠ"
        ];


        $script = $scripts[array_rand($scripts)];

        echo "<span class=\"" . ((strpos($script, "> ") === 0) ? "title-code" : "title-pen") . "\">" . sprintf((strpos($script, "> ") === 0) ? substr($script, 2) : $script, $name) . "</span>";
    }else{
        echo "@ChalkPE";
    }
?>
