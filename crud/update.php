<?php


include 'dbconnection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['id'];
    $newName = $_POST['name'];
    $newMobileNo = $_POST["mobile_no"];
    $newAddress = $_POST["address"];
    $newEmail = $_POST['email'];
    $newPassword = $_POST["password"];

    

    $query = "UPDATE employees SET name = '$newName',address= '$newAddress', email = '$newEmail',password='$newPassword',mobile_no =' $newMobileNo' WHERE id = '$userId'";
    $result = mysqli_query($connection, $query);



    if ($result) {
        echo "User data updated successfully.";
        header("Location: userdata.php"); 
        exit(); 
    } else {
        echo "Error updating user data: " . mysqli_error($connection);
    }
}



?>