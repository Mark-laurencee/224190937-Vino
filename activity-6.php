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
        <h1>Activity 6</h1>
        <?php
            $favMovie = array("1. El Camino: A Breaking Bad Movie", "2. Seven Sundays", "3. Prison Break: The Final Break", "4. The Planet of the Apes", "5. Spider-Man: Across the Spider-Verse" );

            foreach ($favMovie as $x) {
                echo "$x <br>";
            }
        ?>
    </div>
    
</body>
</html>