<?php
    $num = $_GET["num"];      

    $con = mysqli_connect("localhost", "user", "12345", "sample");  
    $sql = "delete from freeboard where num=$num"; 
    mysqli_query($con, $sql);     

    mysqli_close($con);          

    echo "<script>
	         location.href = 'list.php';      
	     </script>";
?>