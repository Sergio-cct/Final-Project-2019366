<?php

include "connect.php";
$username= $_POST['customername'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$password= $_POST['password'];

$sql = mysqli_query($conn, "SELECT * FROM register WHERE email = '{$email}'") or print mysql_error();

#If the return is greater than zero, it says that one already exists.

if(mysqli_num_rows($sql)<=0) {

   $sql = "INSERT INTO register (customername, phone, email, password) values 
          ('$username','$phone','$email','$password')";

   if ($conn->query($sql) === TRUE) {
     echo "New email created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            // header("Location: formbooking.php");
            header("Location: makeanappointment.php");
    }

    //echo json_encode(array('email' => 'Email already registered !! .' )); 
}else {
    echo json_encode(array('email' => 'Email registered !! .' )); 
    echo "Email ja existe";
    header("Location: makeanappointment.php");
  //  $sql = "INSERT INTO register (customername, phone, email, password) values 
  //         ('$customername','$phone','$email','$password')";

  //  if ($conn->query($sql) === TRUE) {
  //     echo "New email created successfully";
        
   // } else {
  //      echo "Error: " . $sql . "<br>" . $conn->error;
   //     header("Location: formbooking.php");
  //  }
   }
$conn->close();
//header("Location: formbooking.php");


?>

