<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
include 'db.php';

if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['num'];
    $password = $_POST['password'];

    // Prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO crud (Name, Email, mobile, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $mobile, $password);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>
<div class="container my-5">
    <form class="p-5" method="post">
        <div class="form-group mb-3">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
        </div>

        <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" required>
        </div>

        <div class="form-group mb-3">
            <label>Mobile Number</label>
            <input type="text" class="form-control" placeholder="Enter your mobile number" name="num" required>
        </div>

        <div class="form-group mb-3">
            <label>Password</label>
            <input type="text" class="form-control" placeholder="Enter your password" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary" name="create" value="Create User">Submit</button>
        <a href="read.php">
            <button type="button" class="btn btn-secondary">User Data</button>
        </a>
    </form>
</div>
</body>
</html>
