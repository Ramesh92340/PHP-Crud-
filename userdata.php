<?php

include "dbconnection.php";

$query = "SELECT * FROM employees";
$result = mysqli_query($connection, $query);

if (!$result) {
    // die("Database query failed: " . mysqli_error($connection));
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    
<div class="container table-responsive py-5"> 
    <h2>User Details</h2>
    <a class="text-right btn btn-success" href="index.php">Add</a>
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">name</th>
      <th scope="col">mobile_no</th>
      <th scope="col">address</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; foreach( $result as $rows){
       
    ?>
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
   
      <td><?php echo $rows["name"];  ?></td>
      <td><?php echo $rows["mobile_no"];  ?></td>
      <td><?php echo $rows["address"];  ?></td>
      <td><?php echo $rows["email"]; ?></td>
  
      <td><a class="btn btn-primary" href="edit.php?editbtn=<?php echo $rows['id']; ?>">Edit</a>
          <a class="btn btn-danger" href="delete.php?id=<?php echo $rows['id']; ?>">Delete</a></td>
      
    </tr>
    <?php  } ?>   
   
  </tbody>
</table>
</div>

</body>
</html>


