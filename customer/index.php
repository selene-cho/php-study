<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
    <h3>고객 목록</h3>  
    <form action="index.php?mode=search" method="post">
        <!-- index.php 파일에서 검색버튼 누르면 SQL명령 적용되서 목록 바뀌어야함.
        모드 구분하기위해서 변수 mode 만들어서 search로 넘김 -->
        <input type="text" name="command" size="80">
        <button type="submit">검색(SQL 명령)</button><br><br>
        <!-- type = submit / reset  -->
    </form>
    <table border="1">
    <tr>
        <th>번호</th>
        <th>이름</th>
        <th>전화번호</th>
        <th>주소</th>
        <th>성별</th>
        <th>나이</th>   
        <th>마일리지</th>
        <th>수정</th>
        <th>삭제</th>
    </tr>    
<?php
    // isset 함수 : set 되어있는지 아닌지 (값 있는지 없는지 확인 할때 주로 사용)
    if(isset($_GET["mode"])) $mode = $_GET["mode"]; // 검색일때 search
    else $mode = ""; // 아닐때 null

    if(isset($_POST["command"])) $command = $_POST["command"];
    else $command = "";

    /* $mode = $_GET["mode"]; // mode=search 검색 모드인 경우 / 일반 모드인경우에는 값이 없기 때문에 오류 생기니까 값 유무 확인필요!
    $command = $_POST["command"] */

    include "dbconn.php"; // MySQL 접속

    $sql = "select * from customer"; // 모든 custmoer 가져와 

    if ($mode === "search" && $command!="")
        $sql = $_POST["command"];
        
    $result = mysqli_query($conn, $sql);
    $number = 1;

    while ($row = mysqli_fetch_assoc($result)) {
        $num = $row["num"];
        $name = $row["name"];
        $tel = $row["tel"];
        $address = $row["address"];
        $gender = $row["gender"];
        $age = $row["age"];
        $mileage = $row["mileage"];
?>
    <tr>
        <form action="modify.php" method="post">
            <input type="hidden" name="num" value="<?=$num?>">    
            <td><?=$number?></td>
            <td><?=$name?></td>
            <td><?=$tel?></td>
            <td><?=$address?></td>
            <td><?=$gender?></td>
            <td><input type="text" size="5" name="age" value="<?=$age?>"></td>
            <td><input type="text" size="5" name="mileage" value="<?=$mileage?>"></td>
            <td>
                <button type="submit">수정</button>
            </td>
        </form>
        <td>
            <button onClick="location.href='delete.php?num=<?=$num?>'">삭제</button>
        </td>
    </tr>
<?php
    $number++;
    } // while문 끝

    mysqli_close($conn);
?>
</table>