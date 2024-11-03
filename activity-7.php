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
        <h1>Activity 7</h1>
        <?php
            $student = array("Name"=>"Mark", "Age"=>"21", "Grade"=>"A", "City"=>"Baguio City");
            foreach($student as $key => $value) {
                echo "$key: $value<br>";
            }
        ?>
    </div>
</body>
</html>