<?php

include "connect.php";
$booking_id = $_POST['booking_id'];
$costumername= $_POST['customername_val'];
$date= $_POST['date_val'];
$time= $_POST['time'];
$vehicletype= $_POST['vehicletype_val'];
$maker= $_POST['maker_val'];
$license= $_POST['license_val'];
$engine= $_POST['engine_val'];
$price_of_service= $_POST['price_of_service_val'];
$typeofbooking= $_POST['price_of_service_val_str'];
$extras= $_POST['extras'];
$total= $_POST['total_price_val'];
$comment= $_POST['comment'];

$sql = "INSERT INTO invoice (id_booking, customername, date, time, vehicletype, maker, license, engine, priceservice, extras, total, comment) values 
('$booking_id','$costumername','$date', '$time', '$vehicletype','$maker', '$license', '$engine', '$price_of_service', '$extras','$total', '$comment')";
//echo $sql;
if ($conn->query($sql) === TRUE) {
    
    echo "CUSTOMER:           ".$_POST['customername_val']."<br/><br/>";
    echo "Vehicle:            ".$vehicletype."<br/><br/>";
    echo "Licence:            ".$license."<br/>";
    echo "Annual Service:      €".$price_of_service."<br/><br/>";
    echo "Price Extra :       ".$extras."<br/><br/>";
    echo "<b>TOTAL DUE :      ".$total."<br/><br/>";
    echo "Payment due on collection.</b> ";
    
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    //header("Location: pdffile.php");
}

$conn->close();
//header("Location: pdffile.php");


?>

