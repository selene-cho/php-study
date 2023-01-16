<?php
  include "dbconn.php";  // DB 접속

  $num = $_POST["num"];
  $name = $_POST["name"];
  $sub1 = $_POST["sub1"];
  $sub2 = $_POST["sub2"];
  $sub3 = $_POST["sub3"];
  $sub4 = $_POST["sub4"];
  $sub5 = $_POST["sub5"];
  $sub6 = $_POST["sub6"];
  $sub7 = $_POST["sub7"];
  $sum = $sub1 + $sub2 + $sub3 + $sub4 + $sub5 + $sub6 + $sub7;  // 수정한거 새로 계산해야 되니까 
  $avg = round($sum/7, 2);  // 소수점 둘째자리에서 반올림

  // echo $num; // 디버깅 
  // exit;

  $sql = "update score set name='$name', sub1=$sub1, sub2=$sub2, sub3=$sub3, sub4=$sub4, sub5=$sub5, sub6=$sub6, sub7=$sub7, sum=$sum, avg=$avg where num=$num";
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
        location.href='index-3.php';
    </script>  
  "
?>