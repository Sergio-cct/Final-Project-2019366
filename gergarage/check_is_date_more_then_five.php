<?php 
include "connect.php";
$calendario = $_GET['calendario'];
$sql = "SELECT * FROM `bookingform` WHERE `date_book` ='".$calendario."'";
$result = mysqli_query($conn,$sql);
//echo $result;
$num = mysqli_num_rows($result);
if($num > 5)
{
    
    echo 'No';
}
else
{
    echo 'Yes';
}
?>