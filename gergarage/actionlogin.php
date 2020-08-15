<?php

#Connect the database 
include "connect.php";
session_start();
$email= $_GET['email'];
$_SESSION['email'] = $email;

$password= $_GET['password'];

#Receive Posted Email
$sql = mysqli_query($conn, "SELECT * FROM register WHERE email = '{$email}' and password='{$password}'") or print mysql_error();

#If the return is greater than zero, it says that one already exists.

if(mysqli_num_rows($sql)>0) {
    echo "successfull";
} else{ 
    echo 'Email or Password is Wrong.'; 
}
$conn->close();
?>

