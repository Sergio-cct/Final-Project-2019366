<?php
session_start();
include "connect.php";

$datebook= $_POST['datebook'];
$costumername= $_POST['customername'];
$email= $_POST['email'];
$book_status= 'Booked';
$phone= $_POST['phone'];
$vehicletype= $_POST['vehicletype'];
$maker= $_POST['maker'];
$licence= $_POST['licence'];
$engine= $_POST['engine'];
$typeofbooking= $_POST['typeofbooking'];
$comment= $_POST['comment'];
$email = $_SESSION['email'] ;

$sql = "INSERT INTO bookingform (date_book, customername, email, book_status, phone, vehicletype, maker, licence, engine, typeofbooking, comment)
        values ('$datebook','$costumername', '$email', '$book_status', '$phone', '$vehicletype', '$maker', '$licence', '$engine', '$typeofbooking', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("Location: bookdone.php");
}

$conn->close();
header("Location: bookdone.php");


?>

