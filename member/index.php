<?php
    session_start(); // 모든 페이지 상단에 session 사용할 때 항상 넣어줘야 함.
    if (isset($_SESSION["userid"]))
        $userid = $_SESSION["userid"];
    else $userid = "";
?>

<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
    <h3 class="logo">
    <a href="index.php">OZ코딩스쿨</a>
    </h3>
    <div class="top">
<?php
    if(!$userid) {
?>
    <span><a href="login_form.php">로그인</a> </span>
    <span> | </span>
    <span><a href="form.php">회원가입</a></span>
<?php 
    } 
    else { 
?>
    <span><a href="modify.php"><?=$_SESSION["userid"]?> 정보수정</a></span>
    <span> | </span>
    <span><a href="logout.php">로그아웃</a> </span>
<?php 
    }
?>
    </div> <!-- top -->
    </div> <!-- header -->
</body>
</html>

