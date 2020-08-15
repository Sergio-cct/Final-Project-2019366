<!DOCTYPE html> 
<!-- 

-->

 
<html lang="en-EU">
<head>    
    <meta charset="utf-8"; />
    <title> Ger's Garage </title>
    <meta name="description" content=" Ger's Garage: The best solution for you vehicle."/>


    
    <!-- External style definition -->
    <link rel="stylesheet" type="text/css" href="css/myStyles-admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		


</head>    
<body>
<div id="wrap">         
    <header>
        <div class="header">
            <nav>
                <ul class="topnav"> 
                    <li><a class ="active" href= "index.php">HOME</a></li>   
                    <li><a href= "services.php">SERVICES</a></li>
                    <li><a href= "makeanappointment.php">MAKE APPOINTMENT </a></li>
                    <li><a href= "contactus.php">CONTACT US</a></li>
                    <li><a href= "admin.php">ADMIN &#x1f511 </a></li>

                </ul>                
            </nav>            
        </div>              
    </header>
    <section> 
        <div class= "navpag">
            <h1> INVOICE</h1>          
                            
            </div>
        <div class="buttoncont">
            <a href="https://www.facebook.com/sergiosilva" target="_blank" title="Follow me on Facebook">
                <img src="img/facebook.png" alt="linkedin" width="60px" height="60px">
            </a>
            <a href="https://www.instagram.com/sergiosilva/" target="_blank" title="Follow me on Instagram">
                <img src="img/instagram.png" alt="linkedin" width="60px" height="60px">
            </a>
              <a href="https://www.linkedin.com/in/sergiosilva/" target="_blank" title="Follow me on Linkedln">
                <img src="img/linkedln.png" alt="linkedin" width="60px" height="60px">
            </a>       
        </div>   


        <div class="container">
        <div>
            <a class="col-sm-2 control-label"  href="./adminaccess.php">Return</a>
        </div><br><br><br><br>
		
    
        <div class="form-group">
            <label for=""> Booking Id</label>

            <select class="form-control"  id="booking_id"required>
                <?php 

                 include "connect.php";
                 if(isset($_GET['booking_id']))
                 {

                 }
                $sql_bookingform = "SELECT `id-book` FROM bookingform WHERE book_status = 'Fixed / Completed'";

                $result_bookingform = mysqli_query($conn,$sql_bookingform);

                $sql_invoice = "SELECT `id_booking` FROM `invoice`";

                $result_invoice = mysqli_query($conn,$sql_invoice);

                while($row = mysqli_fetch_array($result_bookingform)) {
                    $is_invoice_present = 0;

                $result_invoice = mysqli_query($conn,$sql_invoice);
                    while($row_invoice = mysqli_fetch_array($result_invoice))
                    {
                        if ($row['id-book']==$row_invoice['id_booking'])
                        {
                            $is_invoice_present = 1;
                        break;
                        }
                    }
                    if($is_invoice_present == 0)
                    {

                ?>
                <option value="<?php echo $row['id-book']; ?>"><?php echo $row['id-book']; ?></option> 

                    <?php }} ?>

            </select>
            <br/>
			<button id='Invoice'>Invoice</button>
        </div>
            <script>
                $( "#Invoice" ).click(function() {
                    var booking_id = $('#booking_id option:selected').val();
                    if(booking_id == null){
                        alert('Not Found any invoice.');
                    }
                    else
                    {
                        window.location.href = 'invoice.php?booking_id='+booking_id;
                    }  
                    
                });
            </script>

		<div>
        <form action="actioninvoice.php" method="post" >
            <?php if(isset($_GET['booking_id'])){

                    $sql_invoice = "SELECT `id_booking` FROM `invoice` where `id_booking` = ".$_GET['booking_id'];
                    $result = mysqli_query($conn,$sql_invoice);
                    $rows_num = mysqli_num_rows($result);
                    echo $rows_num;
                    if($rows_num != 0)
                    {
                        header("Location:adminaccess.php");
                        return;
                    }
                    $sql = "SELECT * FROM bookingform WHERE `id-book` = ".$_GET['booking_id'];
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($result);

                    $typeofbooking = $row['typeofbooking'];
                    if ($typeofbooking =="Annual Service")
                    {
                        $typeofbooking_price = 150;
                    }
                    elseif($typeofbooking =="Major Service")
                    {
                        $typeofbooking_price = 100;
                    }
                    elseif($typeofbooking =="Repair")
                    {
                        $typeofbooking_price = 70;
                    }
                    elseif($typeofbooking =="Major Repair")
                    {
                        $typeofbooking_price = 120;
                    }
             ?>
             
             <input type="hidden" value="<?php echo $_GET['booking_id']; ?>" name="booking_id">
            <label for=""> Customer Name</label>
			<input type="text" class="form-control" name="customername" value="<?php if($row){echo $row['customername'];} ?>" disabled>
			<input type="hidden" id="customername_val" name="customername_val" value="<?php if($row){echo $row['customername'];} ?>">
        </div>		    
		<div class="form-group">
            <label for="">Date of Repair</label>          
			<input type="text" class="form-control" name="date" value="<?php if($row){echo $row['date_book'];} ?>" disabled>
            <input type="hidden" id="date_val" name="date_val" value="<?php if($row){echo $row['date_book'];} ?>">
		</div>
        <div class="form-group">
            <label for="">Time</label>
            <select class="form-control" name="time" required>
            <option value="" disabled selected>Choose</option>
			<option value="time 1">08:00AM-10:00AM</option> 				
            <option value="time 2">11:00AM-13:00AM</option> 							
            <option value="time 3">15:00AM-17:00AM</option> 							
            <option value="time 4">18:00AM-19:00AM</option> 				
        </select>
		</div>
		<div class="form-group">
            <label for="">Vehicle Type</label>
			<input type="text" class="form-control" name="vehicletype" value="<?php if($row){echo $row['vehicletype'];} ?>" disabled>
            <input type="hidden" id="vehicletype_val" name="vehicletype_val" value="<?php if($row){echo $row['vehicletype'];} ?>">
        </div>
		<div class="form-group">
            <label for="">Maker</label>
			<input type="text" class="form-control" name="maker" value="<?php if($row){echo $row['maker'];} ?>" disabled>
            <input type="hidden" id="maker_val" name="maker_val" value="<?php if($row){echo $row['maker'];} ?>">
        </div>
        <div class="form-group">
            <label for="">Vehicle License</label>
			<input type="text" class="form-control" name="license" value="<?php if($row){echo $row['licence'];} ?>" disabled>
            <input type="hidden" id="license_val" name="license_val" value="<?php if($row){echo $row['licence'];} ?>">
        </div>			
        <div class="form-group">
            <label for="">Vehicle Engine Type</label>
			<input type="text" class="form-control" name="engine" value="<?php if($row){echo $row['engine'];} ?>" disabled>
            <input type="hidden" id="engine_val" name="engine_val" value="<?php if($row){echo $row['engine'];} ?>">
        </div>
        
        <div class="form-group">
            <label for="">Price of Service</label> 
            <input type="text" name="price_of_service" id="price_of_service" value="<?php if(isset($typeofbooking_price)){ echo $typeofbooking_price; } ?>" disabled>
            <input type="hidden" id="price_of_service_val" name="price_of_service_val" value="<?php if(isset($typeofbooking_price)){ echo $typeofbooking_price; } ?>">
            <input type="hidden" id="price_of_service_val_str" name="price_of_service_val_str" value="<?php if($row){ echo $row['typeofbooking']; } ?>" >
        </div>
        <div>
            <label for="">Extras</label>
			<input type="number" class="form-control" value="0" id="extras" name="extras" placeholder = "Not required">
		</div>
    
		<div class="form-group">
            <label for="">Total Service</label>
			<input type="text" class="form-control" name="total" id="total_price" value="<?php if(isset($typeofbooking_price)){ echo $typeofbooking_price; } ?>" placeholder = "TOTAL ( Ex: 200 Euro)" disabled>
            <input type="hidden" id="total_price_val" name="total_price_val" value="<?php if(isset($typeofbooking_price)){ echo $typeofbooking_price; } ?>">
        </div>
        <div class="form-group">
            <label for="">Comments</label><br>
			<textarea name="comment" class="form-control" cols="75" rows="5"><?php if($row){echo $row['comment'];} ?></textarea></p>
		</div>
		<div class="form-group">
		    <input class="btn bg-info btn-block" type="submit" name="submit" value="Create Invoice"></div>
		
        </form>

        <script>
            $("#extras").keyup(function(){ 
                if(isNaN(parseFloat($("#extras").val())))
                {
                    var extras = 0;
                }
                else
                {
                    var extras = parseFloat($("#extras").val());
                    
                }
                
                var price_of_service = parseFloat($("#price_of_service").val());
                var final_sum = extras+ price_of_service;
                console.log(final_sum);
                $("#total_price").val(final_sum);
                $("#total_price_val").val(final_sum);
            });

        </script>
		</div>
</div>
        <?php } ?>

    </section>

<?php
    include('footer.php');
?>  

</div>  
    

</body>
</html>