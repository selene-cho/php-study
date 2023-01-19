<?php
  $id = $_POST["id"];
  $name = $_POST["name"];
  $content = $_POST["content"]; 
  $cat = $_POST["cat"]; 
  $regist_day = date("Y-m-d (H:i)"); // 현재의 '년-월-일-시-분'을 저장

  if(!$id) {
    echo"<script>
      window.alert('로그인 후 이용하세요.')
      history.go(-1)
    </script>
    ";
    exit;
  }

  if(!$cat) {
    echo"<script>
      window.alert('카테고리를 선택하세요.')
      history.go(-1)
    </script>
    ";
    exit;
  }

  if(!$content) {
    echo "<script>
          window.alert('내용을 입력하세요.')
          history.go(-1)
          </script>
    ";
    exit;
  }

  include "dbconn.php"; // DB 파일 불러옴

  $conn = mysqli_connect("localhost", "user", "12345", "sample"); // DB접속


  $sql = "insert into blog (id, nick_name, content, cat, regist_day)";
  $sql .= "values('$id', '$name', '$content', '$cat', '$regist_day')";

  // echo $sql;
  // exit;

  mysqli_query($conn, $sql); // $sql에 저장된 명령 실행
  mysqli_close($conn); // DB 연결 끊기

  echo "
      <script>
        location.href = 'index.php'
      </script>
  ";
?>