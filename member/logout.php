<?php
session_start();
unset($_SESSION["userid"]);

echo ("
      <script>
      location.href='index.php';
      </script>
    "); // 소괄호 써도 되고 안써도 됨
?>