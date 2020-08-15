<?php

#Connect the database 
include "connect.php";

$username= $_POST['user'];
$password= $_POST['password'];

#Receive Posted Email
$sql = mysqli_query($conn, "SELECT * FROM loginadmin WHERE user = '{$username}'") or print mysql_error();

#If the return is greater than zero, it says that one already exists.

if(mysqli_num_rows($sql)>0) {
    header("Location: adminaccess.php");
} else{ 
    echo json_encode(array('user' => 'Invalid user.' )); 
}
$conn->close();
?>

}
