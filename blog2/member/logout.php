<?php
session_start();
unset($_SESSION["userid"]);

echo ("
      <script>
      location.href='../index.php';
      </script>
    "); 
?>
<!-- 소괄호 써도 되고 안써도 됨
../ logout 후 상위 폴더 blog2/index.php로 가기 위함  -->