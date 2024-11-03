<?php
    $x = 0;
    $y = 1;
    $num = 0;
    echo $x . " " . $y;

    while($num < 8){
        $int = $x + $y;
        echo " " . $int;
        $x = $y;
        $y = $int;
        $num++;
    }
    
?>