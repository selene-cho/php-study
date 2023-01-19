<?php
  include "dbconn.php";  // DB 접속

  $num = $_GET["num"];

  // echo $num; // 디버깅 
  // exit;

  $sql = "delete from blog where num=$num";

  // echo $sql;
  // exit;

  $result = mysqli_query($conn, $sql);

  if ($result)
    echo "레코드 삭제 완료!";
  else 
    echo "레코드 삭제 오류!";

  mysqli_close($conn);

  echo "
    <script>
        location.href='index.php'
    </script>  
  ";