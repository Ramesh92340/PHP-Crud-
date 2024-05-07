<?php
include 'dbconnection.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    $query = "DELETE FROM employees WHERE id = '$userId'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "User data deleted successfully.";
        header("Location: userdata.php");
        exit();
    } else {
        echo "Error deleting user data: " . mysqli_error($connection);
    }
}



?>