<?php
    // $sum = 0;
    
    // for ($i = 1; $i <= 10; $i++) {
    //     // echo "<br>".$sum;
    //     // echo $sum." <= ".$sum-$i.' + '.$i."<br>";
    //     if ($i % 3 == 0) {
    //         $sum += $i; 
    //     }
    // }

    // echo "합계 : ".$sum."<br>";
    
    echo "------------------<br>";
    echo "인치&nbsp;&nbsp;&nbsp;&nbsp;센티미터<br>";
    
    for ($inch = 10; $inch <= 100; $inch+=10) {
        echo $inch."in"." = ".($inch*2.54)."cm"."<br>";
    }
    echo "------------------<br>";

    // 1인치 = 2.54cm
?>