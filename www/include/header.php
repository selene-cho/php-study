<?php
    session_start();
    if (isset($_SESSION["userid"])) 
        $userid = $_SESSION["userid"];
    else 
        $userid = "";
    
    if (isset($_SESSION["username"])) 
        $username = $_SESSION["username"];
    else 
        $username = "";
    
    if (isset($_SESSION["userlevel"])) 
        $userlevel = $_SESSION["userlevel"];
    else 
        $userlevel = "";
?>
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header>
    <h3 class="logo">
        <a href="../home/index.php">OZ코딩스쿨</a>
    </h3>
    <ul class="top_menu">
<?php
    if(!$userid) {
        echo "<li><a href='../member/login_form.php'>로그인</a> |
            <a href='../member/form.php'>회원가입</a></li>";
    } else {
        echo "<li>$username(Level: $userlevel) | <a href='../member/logout.php'>로그아웃</a> | 
        <a href='../member/modify_form.php'>정보수정</a></li>";
        if ($userid=="admin")
            echo " | <a href='../admin/admin.php'>회원관리</a>";
    }
?>
    </ul> <!-- top_menu -->
    <ul class="main_menu">
        <li><a href="../blog/index.php">블로그</a></li>
        <li><a href="../mboard/list.php?table=_notice">공지게시판</a></li>
        <li><a href="../mboard/list.php?table=_qna">묻고답하기</a></li>
        <li><a href="../mboard/list.php?table=_youtube">유튜브 동영상</a></li>
    </ul> <!-- main_menu -->
</header>