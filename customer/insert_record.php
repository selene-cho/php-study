<?php
$myfile = fopen("customer_data.sql", "r") or die("파일 읽기 오류!");

$data = "";
while(!feof($myfile)) {
    $data .= fgets($myfile);
}
// echo $data;
fclose($myfile);

include "dbconn.php";
$result = mysqli_multi_query($conn, $data); // 여러 명령 동시 실행하는 함수

if ($result)
    echo "레코드 삽입 완료!";
else
    echo "레코드 삽입 오류!";

mysqli_close($conn);
?>