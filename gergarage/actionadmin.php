<?php

#Connect the database 
include "connect.php";

$username= $_GET['user'];
$password= $_GET['password'];

#Receive Posted Email
$sql = mysqli_query($conn, "SELECT * FROM loginadmin WHERE user = '{$username}' and password = '{$password}'") or print mysql_error();

#If the return is greater than zero, it says that one already exists.

if(mysqli_num_rows($sql)>0) {
              
    echo "successfull";
} else{ 
    echo "Username or password is wrong"; 
}
$conn->close();
?>

