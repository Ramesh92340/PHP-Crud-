<?php

include "dbconnection.php";

if (isset($_GET['editbtn'])) {
    $userId = $_GET['editbtn'];

    $query = "SELECT * FROM employees WHERE id = '$userId'";  // Specify the column name here
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        die("Database query failed: " . mysqli_error($connection));
    }
    //echo "sucussfull";
    // Assuming you want to fetch a single row based on the provided id
    $userData = mysqli_fetch_assoc($result);
   
    
    // Now you can use $userData to display or populate the edit form fields
}

?>

<form action="update.php" method="post">
    

    <h5>ID -<input name = "id" type = "text" placeholder = "Enter ID" value="<?php echo $userId; ?>" /> </h5><br>
    <h5>Name -<input name = "name" type = "text" placeholder = "Enter Name" value="<?php echo $userData['name'];?>"/> </h5><br>
    <h5>Moile No.   -<input name = "mobile_no" type = "numbers" placeholder = "Contact Number" value="<?php echo $userData['mobile_no']; ?>"/>  </h5><br>            
    <h5>Address    -<input name="address" type = "text" placeholder = "Enter address" value="<?php echo $userData['address']; ?>"/>  </h5><br>        
    <h5>Email   -<input name= "email" type = "email" placeholder = "Enter Email"   value="<?php echo $userData['email']; ?>" />  </h5><br>
    <h5>Password    -<input name = "password" type = "Password" placeholder = "Enter Password"    value="<?php echo $userData['password']; ?>"/>  </h5><br> 
    <button>Update </button>
</form>