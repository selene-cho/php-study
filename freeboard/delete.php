<?php
    $num = $_GET["num"];

    $con = mysqli_connect("localhost", "user", "12345", "sample"); // DB 연결
    $sql = "delete from freeboard where num=$num";
    mysqli_query($con, $sql);
    mysqli_close($con);

    // 목록보기 이동
    echo "
        <script>
        location.href = 'list.php';      
        </script>
    ";
?>