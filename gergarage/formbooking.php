<!DOCTYPE html> 
<!-- 

-->

 
<html lang="en-EU">

<?php
  session_start();
  $email = $_SESSION['email'] ;
?>

<head>    
    <meta charset="utf-8"; />
    <title> Ger's Garage </title>
    <meta name="description" content=" Ger's Garage: The best solution for you vehicle."/>


    
    <!-- External style definition -->
    <link rel="stylesheet" type="text/css" href="css/myStyles-contactus.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
	<link href="css/bootstrap-datepicker.css" rel="stylesheet"/>
	<script src="js/bootstrap-datepicker.min.js"></script> 
    <script src="js/bootstrap-datepicker.en-IE.min.js" charset="UTF-8"></script>
    
    
</head>    
<body>
<div id="wrap">         
    <header>
        <div class="header">
            <nav>
                <ul class="topnav"> 
                    <li><a class ="active" href= "index.php">HOME</a></li>   
                    <li><a href= "services.php">SERVICES</a></li>
                    <li><a href= "makeanappointment.php">APPOINTMENT </a></li>
                    <li><a href= "contactus.php">CONTACT US</a></li>
                    <li><a href= "admin.php">ADMIN &#x1f511 </a></li>

                </ul>                
            </nav>            
        </div>              
    </header>
    <section> 
        <div class= "navpag">
            <h1> MAKE AN APPOINTMENT</h1>          
                            
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

        <head>
        <meta charset="utf-8" />
        <title>Calendário jQuery</title>   

        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
        <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
        <script src="javascript.js"></script>
        <script src="ajax.js"></script>

        <script>
            $(function() {
                $("#calendario").datepicker({
                    minDate: new Date(),
                    beforeShowDay: $.datepicker.noWeekends,
                    dateFormat: 'dd/mm/yy',
                    dayNames: ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                    dayNamesMin: ['S','M','T','W','T','F','S','S'],
                    dayNamesShort: ['Sun','Mon','Tue','Wed','Thu','Fri','Sat','Sun'],
                    monthNames: ['January','February','March','April','May','June','July','August','September','October','November','December'],
                    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
                });
            });
        </script>

        </head>

        <div class="container">
        <form action="actionform.php" method="post">
                <br><br>
                <h2>BOOK A SERVICE OR REPAIR</h2><br><br>

            <br>
           
                <div class="booking" >

                    <form action="actionform.php" method="post">
        
                
                </div>

                <div class="form-group">
                  <label for="">Date:</label>
                  <input type="text" class="form-control" name="datebook" id="calendario" placeholder=" " required>
                </div>
                <br>

                <script>
                    $("#calendario").change(function(){
                        var calendario = $("#calendario").val();
                        //alert(calendario);
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            console.log(this.responseText);
                            console.log(this.responseText.trim().localeCompare('Yes') == 0);
                         if(this.responseText.trim().localeCompare('Yes') == 0)
                         {
                            $('#hide_inform').show();
                            $("#errror_msg").html("");
                         }
                         else{
                            $('#hide_inform').hide();
                             //alert(this.responseText);
                             $("#errror_msg").html("For "+ calendario+" We don't have space. Please change the date.");
                         }
                            //document.getElementById("txtHint").innerHTML = this.responseText;
                        }
                        };
                        xmlhttp.open("GET","check_is_date_more_then_five.php?calendario="+calendario,true);
                        xmlhttp.send();
                    });
                </script>
                <h4 id="errror_msg"></h4>
                <div id="hide_inform" style="display:none;">
                <div class="form-group">
                <label for="col-sm-2 control-label">Customer Name:</label>
                <input name="customername" class="form-control" placeholder="" required>
                </div>
                <br>

                <div class="form-group">
                <label for="">Phone Number:</label>
                <input name="phone" class="form-control" placeholder="(Ex: 00 000 0000)*"  required>
                </div>
                <br>
                
                <div class="form-group">
                <label for="">Vehicle type:</label>
                <select  class="form-control" name="vehicletype" required>
                <option value="Select">Select</option>
                <option value="Motorbike">Motorbike</option>
                <option value="Car">Car</option>
                <option value="Small van">Small van</option>
                <option value="Small bus">Small bus</option>
                </select>
                </div>
                <br>

                <div class="form-group">
                <label for="">Vehicle make:</label>
                <select class="form-control" name="maker" required>
                <option value="Select">Select</option>
                <option value="Ford">Ford</option>
                <option value="Ferrari">Ferrari</option>
                <option value="Audi">Audi</option>
                <option value="Mercedess-Benz">Mercedess-Benz</option>
                <option value="BMW">BMW</option>
                <option value="Fiat">Fiat</option>
                <option value="Toyota">Toyota</option>
                <option value="Lamborghini">Lamborghini</option>
                <option value="Nissan">Nissan</option>
                <option value="Peugeot">Peugeot</option>
                <option value="Citroen">Citroen</option>
                <option value="Renault">Renault</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Alfa Romeo">Alfa Romeo</option>
                <option value="Audi">Audi</option>
                <option value="Kia">Kia</option>
                <option value="Volvo">Volvo</option>
                <option value="Chevrolet">Chevrolet</option>
                <option value="Bugatti">Bugatti</option>
                <option value="Jeep">Jeep</option>
                <option value="Ford">Ford</option>
                <option value="Daewoo">Daewoo</option>
                <option value="Aston Martin">Aston Martin</option>
                <option value="Mitsubishi">Mitsubishi</option>
                <option value="Lancia">Lancia</option>
                <option value="Karmann">Karmann</option>
                <option value="Koenigsegg">Koenigsegg</option>
                <option value="Dacia">Dacia</option>
                <option value="Mazda">Mazda</option>
                <option value="other">Other</option>                   
                </select>
                </div>
                <br>

                <div class="form-group">
                <label for="">Vehicle Licence:</label>
                <input name="licence" class="form-control" placeholder=" 9 digits" pattern="[0-9]{9}" required >
                </div>
                <br>
                
                <div class="form-group">
                <label for= "">Engine type:</label>
                <select class="form-control" name="engine" required>
                    <option value="Select">Select</option>
                    <option value="diesel">Diesel</option>
                    <option value="petrol">Petrol</option>
                    <option value="hybrid">Hybrid</option>
                    <option value="eletric">Eletric</option>
                    <option value="other">Other</option>
                </select>
                </div>
                <br>
                
                <div class="form-group">
                <label for="">Type of booking:</label>
                <select class="form-control" name="typeofbooking" required>
                    <option value="Select">Select</option>
                    <option value="Annual Service">Annual Service 150€</option>
                    <option value="Major Service">Major Service 100€</option>
                    <option value="Repair">Repair 70€</option>
                    <option value="Major Repair">Major Repair 120€</option>
                </select>
                </div>
                <br>   

                            
                <div class="form-group">
                    <label for="">Description of problem:</label><br>
                    <textarea name="comment" rows="6" cols="100"></textarea>
                      
                <input class="btn btn-primary" type="submit" value="SUBMIT">
        </form>
        </div>       
        </div>
    </section>

<?php
    include('footer.php');
?>  

</div>  
    

</body>
<script>$('#date').datepicker({ dateFormat: 'dd-mm-yy' }).val();</script>
</html>