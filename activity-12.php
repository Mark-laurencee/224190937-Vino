<?php
    $str = "Hello";
    $reversed = "";

    for($index = strlen($str) - 1; $index >= 0; $index--){
        $reversed .= $str[$index];
    }

    echo "Input: " . $str . "<br>";
    echo "Output: " . $reversed;
?>