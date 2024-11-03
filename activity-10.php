<?php
$x = 17;
$isPrime = true;

if ($x < 2) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($x); $i++) {
        if ($x % $i == 0) {
            $isPrime = false; 
            break; 
        }
    }
}
if ($isPrime) {
    echo "$x is a prime number.";
} else {
    echo "$x is not a prime number.";
}
?>
