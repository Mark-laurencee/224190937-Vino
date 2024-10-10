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
        <h1>Activity 8</h1>
        <?php
            $n = 5;
            $x = 1;

            for($i = 1; $i <= $n - 1; $i++) {
                $x *= ($i + 1); 
            }
            echo "The factorial of  $n = $x"."\n";
        ?>
    </div>
    
</body>
</html>