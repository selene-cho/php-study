<?php
  include "dbconn.php";

  $name = $_POST["name"];
  $sub1 = $_POST["sub1"];
  $sub2 = $_POST["sub2"];
  $sub3 = $_POST["sub3"];
  $sub4 = $_POST["sub4"];
  $sub5 = $_POST["sub5"];
  $sub6 = $_POST["sub6"];
  $sub7 = $_POST["sub7"];

  // echo $name."<br>";
  // echo $sub1."<br>";
  // echo $sub2."<br>";
  // echo $sub3."<br>";
  // echo $sub4."<br>";
  // echo $sub5."<br>";

  $sum = $sub1 + $sub2 + $sub3 + $sub4 + $sub5 + $sub6 + $sub7;
  $avg = round($sum/7, 2); // 소수점 둘째자리에서 반올림

  $sql = "insert into score (name, sub1, sub2, sub3, sub4, sub5, sub6, sub7, sum, avg) values";
  $sql .= "('$name', $sub1, $sub2, $sub3, $sub4, $sub5, $sub6, $sub7, $sum, $avg)";

  $result = mysqli_query($conn, $sql);

  if ($result)
      echo "레코드 삽입 완료!";
  else
      echo "레코드 삽입 오류!";
      
  mysqli_close($conn);

  echo "
    <script>
      location.href='index-3.php'; 
    </script>
  ";
  // 데이터 DB에 써주고나서 다시 refresh

  // echo $name."<br>";
  // echo $sum."<br>";
  // echo $avg;
?>