<?php
	session_start();
	if (isset($_SESSION["userid"]))
			$userid=$_SESSION["userid"];
	else $userid="";

  if(isset($_GET["mode"])) $mode = $_GET["mode"];
  else $mode = "";

  if(isset($_POST["select"])) $select = $_POST["select"]; // 검색일때 search
  else $select = ""; // 아닐때 null

  if(isset($_POST["keyword"])) $keyword = $_POST["keyword"];
  else $keyword = "";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link href="../blog.css" rel="stylesheet" type="text/css" media="all">
  <style>
    .number { width: 50px; }
    .id { width: 100px; }
    .name input { width: 100px; }
    .email input { width: 150px; }
    .regist_day { width: 150px; }
    .level input { width: 50px; }
    .point input { width: 50px; }
</style>
</head>
<body>
  <div id="wrap">
    <header>
        <div id="logo"><a href="../index.php"><img src="../img/logo.png"></a></div>
        <div id="top">
    <?php
          if(!$userid) {
    ?>
          <a href="../memeber/login_form.php">로그인</a> | <a href="../member/form.php">회원가입</a>
    <?php
          } else {
    ?>
          <a href="../memeber/logout.php">로그아웃</a> | <a href="../member/modify_form.php">정보수정</a>
    <?php
          if ($userid=="admin")
              echo " | <a href='admin.php'>회원관리</a>";
          }
    ?>
          <br>
          <b><?=$userid?></b>블로그에 오신 것을 환영합니다~
        </div>
    </header>    <!-- end of header -->
    <section>
      <br>
      <h3 style="margin-top: 20px;">회원관리</h3>  
      <br>
      <form action="admin.php?mode=search" method="post">
        <select name="select">
          <option value="id">아이디</option>
          <option value="name">이름</option>
          <option value="level">가입일</option>
          <option value="level">레벨</option>
          <option value="point">포인트</option>
        </select>
        <input type="text" name="keyword" size="80">
        <button type="submit">찾기</button><br><br>
      </form>
      <table border="1">
        <tr>
          <th>번호</th>
          <th>아이디</th>
          <th>이름</th>
          <th>비밀번호</th>
          <th>이메일</th>
          <th>가입일</th>
          <th>레벨</th>   
          <th>포인트</th>
          <th>수정</th>
          <th>삭제</th>
        </tr>  
<?php
        include "../dbconn.php";

        $sql = "select * from member";

        if ($mode == "search") {
          $sql = "select * from member where $select='$keyword'";
        }

        $result = mysqli_query($conn, $sql);
        $number = 1;

        while ($row = mysqli_fetch_assoc($result)) {
          $num = $row["num"];
          $id = $row["id"];
          $name = $row["name"];
          $pass = $row["pass"];
          $email = $row["email"];
          $regist_day = $row["regist_day"];
          $level = $row["level"];
          $point = $row["point"];
?>
        <tr>
          <!-- form문 사용자가 입력하는 부분만 포함시키면 됨 -->
          <form action="admin_modify.php?num<?=$num?>" method="post">
            <input type="hidden" name="num" value="<?=$num?>">    
            <td><?=$number?></td>
            <td><?=$id?></td>
            <td><?=$name?></td>
            <td><?=$pass?></td>
            <td><?=$email?></td>
            <td><?=$regist_day?></td>
            <td><input type="text" size="5" name="level" value="<?=$level?>"></td>
            <td><input type="text" size="5" name="point" value="<?=$point?>"></td>
            <td>
                <button type="submit">수정</button>
            </td>
          </form>
          <td>
            <button onClick="location.href='admin_delete.php?num=<?=$num?>'">삭제</button>
          </td>
        </tr>
<?php
        $number++;
        } // while문 끝

        mysqli_close($conn);
?>
      </table>
    </section>
  </div> <!-- end of wrap -->
</body>
</html>

<!-- 블로그 상단에 관리자 메뉴
관리자 페이지 admin.php에 회원목록 보기,수정 / 삭제 가능하도록 -->

