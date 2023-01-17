<?php
  include "dbconn.php";  // DB 접속

  $num = $_POST["num"];
  $age = $_POST["age"];
  $mileage = $_POST["mileage"];

  $sql = "update customer set age=$age, mileage=$mileage where num=$num";
  // echo $sql;  
  // exit;
  
  $result = mysqli_query($conn, $sql);

  if ($result)
    echo "레코드 수정 완료!";
  else 
    echo "레코드 수정 오류!";

  mysqli_close($conn);

  echo "
    <script>
        location.href='index.php'
    </script>  
  ";
?>