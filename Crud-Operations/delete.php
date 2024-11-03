<?php
include 'db.php';

if (isset($_GET['id'])) {
    $mobile = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM crud WHERE mobile = ?");
    $stmt->bind_param("i", $mobile);

    if ($stmt->execute()) {
        echo "Record deleted successfully";
        header("Location: read.php");
        exit();
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
}
?>
