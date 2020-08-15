<?php

#Connect the database 
include "connect.php";
session_start();
$email= $_POST['email'];
$_SESSION['email'] = $email;

$password= $_POST['password'];

#Receive Posted Email
$sql = mysqli_query($conn, "SELECT * FROM register WHERE email = '{$email}'") or print mysql_error();

#If the return is greater than zero, it says that one already exists.

if(mysqli_num_rows($sql)>0) {
    header("Location: formbook.php");
} else{ 
    echo json_encode(array('email' => 'Invalid email.' )); 
}
$conn->close();
?>

}

