<?php
include 'db.php';

if (isset($_GET['id'])) {
    $mobile = $_GET['id'];
    $sql = "SELECT * FROM crud WHERE mobile = $mobile";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $mobile = $_POST['num'];  // This remains the unique identifier
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL Update query
    $stmt = $conn->prepare("UPDATE crud SET Name = ?, Email = ?, password = ? WHERE mobile = ?");
    $stmt->bind_param("sssi", $name, $email, $password, $mobile);

    if ($stmt->execute()) {
        echo "Record updated successfully";
        header("Location: read.php");
        exit();
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container my-5">
    <form class="p-5" method="post">
        <div class="form-group mb-3">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="name" value="<?php echo $row['Name']; ?>" required>
        </div>

        <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" value="<?php echo $row['Email']; ?>" required>
        </div>

        <div class="form-group mb-3">
            <label>Mobile Number</label>
            <input type="text" class="form-control" placeholder="Enter your mobile number" name="num" value="<?php echo $row['mobile']; ?>" readonly>
        </div>

        <div class="form-group mb-3">
            <label>Password</label>
            <input type="text" class="form-control" placeholder="Enter your password" name="password" value="<?php echo $row['password']; ?>" required>
        </div>

        <button type="submit" class="btn btn-primary" name="update" value="Update User">Update</button>
        <a href="read.php">
            <button type="button" class="btn btn-secondary">User Data</button>
        </a>
    </form>
</div>
</body>
</html>
