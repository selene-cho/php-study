<?php
  include "dbconn.php";
  
  $num = $_POST["num"];
  $level = $_POST["level"];
  $point = $_POST["point"];

  $con = mysqli_connect("localhost", "user", "12345", "sample");
  $sql = "update member set level=$level, point=$point where num=$num";
  mysqli_query($conn, $sql);

  mysqli_close($conn);     

  echo "<script>
        location.href='admin.php';
        </script>
      ";
?>