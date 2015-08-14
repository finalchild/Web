<?php
    $imageName = "ic_error_outline_white_48dp_2x.png";
    try{
        if(isset($_GET["clubid"]) and is_numeric($_GET["clubid"]) and isset($_GET["articleid"]) and is_numeric($_GET["articleid"])){
            $html = iconv("EUC-KR", "UTF-8", file_get_contents("http://cafe.naver.com/ArticleRead.nhn?clubid=" . $_GET["clubid"] . "&articleid=" . $_GET["articleid"]));
            if(strpos($html, "var msg = '삭제되었거나 존재하지 않는 게시물입니다.';") !== false){
                $imageName = "ic_done_white_48dp_2x.png";
            }else{
                $imageName = "ic_more_white_48dp_2x.png";
            }
        }
    }catch(Exception $e){}

    header('Content-Type: image/png');
    @readfile("../assets/material-design-icons/" . $imageName);
?>
