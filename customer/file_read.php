<?php
// $myfile = fopen("customer_data.sql", "r") or die("파일 읽기 오류!"); 
$myfile = fopen("customer_data.sql", "r") or die("파일 읽기 오류!"); // fopen = file open
while(!feof($myfile)) { // file 객체/ !feof = end of file / 
  echo fgets($myfile) . "<br>"; // file의 내용 한줄씩 읽어오는데 끝날때까지
}
fclose($myfile);
?>