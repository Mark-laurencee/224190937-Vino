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
        <h1>Activity 4</h1>
        <?php
            for ($i = 1; $i <= 10; $i++) {
                if ($i == 5) {
                    continue; 
                }
                if ($i == 9) {
                    break; 
                }
                echo $i . " ";
            }
        ?>
    </div>
</body>
</html>