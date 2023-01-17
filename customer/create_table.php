<?php
$myfile = fopen("customer_table.sql", "r") or die("파일 읽기 오류!");

$data = "";
while(!feof($myfile)) {
    $data .= fgets($myfile); // 데이터 반복 붙여넣기
}
echo $data;  // while문 끝나고 데이터 모두 잘 들어왔는지 확인
exit; //

fclose($myfile);

$servername = "localhost";          // 서버명
$username = "user";                 // 사용자명
$password = "12345";                // 비밀번호
$dbname = "sample";                 // DB명

// MySQL 연결하기
$conn = mysqli_connect($servername, $username, $password, $dbname); // MySQL DB 접속
$result = mysqli_query($conn, $data); // data 생성

if ($result)  // 메세지 출력
    echo "DB 테이블 생성 완료!";
else
    echo "DB 테이블 생성 오류!";

mysqli_close($conn);
?>