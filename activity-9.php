<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <h1>Activity 9</h1>
        <?php
            for($x = 1; $x <= 50; $x++) {
                if($x % 3 == 0 && $x % 5 == 0){
                    echo "FizzBuzz";
                } elseif($x % 3 == 0){
                    echo "Fizz";
                } elseif($x % 5 == 0){
                    echo "Buzz";
                } else {
                    echo "$x ";
                }
            }
        ?>
    </div>
    
</body>
</html>