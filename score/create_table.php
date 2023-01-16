<?php
    include "dbconn.php"; // db 접속하는 부분

    $sql = "create table score ( ";
    $sql .= "num int not null auto_increment, ";
    $sql .= "name char(12), ";
    $sql .= "sub1 int, ";
    $sql .= "sub2 int, ";
    $sql .= "sub3 int, ";
    $sql .= "sub4 int, ";
    $sql .= "sub5 int, ";
    $sql .= "sub6 int, ";
    $sql .= "sub7 int, ";
    $sql .= "sum int, ";
    $sql .= "avg float, ";   
    $sql .= "primary key(num) )";

    $result = mysqli_query($conn, $sql); // $conn: dbconn.php에 있는 MySQL 연결하는 것!, $spl : 실행 할 명령

    if ($result)
        echo "DB 테이블 생성 완료!";
    else
        echo "DB 테이블 생성 오류!";
    
    mysqli_close($conn);
?>