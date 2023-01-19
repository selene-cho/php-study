<?php
  $id = $_POST["id"];
  $pass = $_POST["pass"];
  $name = $_POST["name"];
  $email = $_POST["email"]; 
  $regist_day = date("Y-m-d (H:i)"); // UTC 현재 '년-월-일 (시:분)'

  $con = mysqli_connect("localhost", "user", "12345", "sample"); // DB접속

  $sql = "insert into member (id, pass, name, email, regist_day, level, point)"; // 데이터 삽입 명령
  $sql .= "values('$id', '$pass', '$name', '$email', '$regist_day', 9, 0)";

  $result = mysqli_query($con, $sql); // SQL 명령 실행
  mysqli_close($con);

  echo "
    <script>
      location.href = '../index.php';
    </script>
  ";
?>