<?php 
   include 'dbconnection.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // print_r($_POST); exit;
        $name = $_POST["username"];
        $mobile_no = $_POST["mobile_no"];
        $address = $_POST["address"];
        $emali = $_POST["email"];
        $password = $_POST["password"];


    $sql = "INSERT INTO employees (name, mobile_no, address, email, password)
    VALUES ('$name','$mobile_no','$address','$emali',' $password ')";

    if ($connection->query($sql) === True) {
        echo "New Data Uploaded Scucessfuly";
        header("Location: userdata.php");

    }
    else {
    echo "Error: " . $sql . "<br>". $connection->error;
    }
}

    $connection->close(); 

    

?>