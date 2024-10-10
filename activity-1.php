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
        <h1>Activity 1</h1>
            <?php
                $x = 1;
                $y = 20;
                
                echo "Even numberes between $x and $y are: ";
                $even = 2;
                while ($even <= 20) {
                    echo $even . " ";
                    $even += 2;
                }
            ?>
        </div>
</body>
</html>
