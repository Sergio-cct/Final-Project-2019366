
<!DOCTYPE html> 
<!-- 
    My HTML website
-->

 
<html lang="en-EU">
<head>    
    <meta charset="utf-8"; />
    <title> Ger's Garage </title>
    <meta name="description" content=" Ger's Garage: The best solution for you vehicle."/>



    <!-- External style definition -->
    <link rel="stylesheet" type="text/css" href="css/myStyles-index.css">
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
                <li><a href= "makeanappointment.php">APPOINTMENT </a></li>
                <li><a href= "contactus.php">CONTACT US</a></li>
                <li><a href= "admin.php">ADMIN &#x1f511 </a></li>

            </ul>
        </nav>
            <img src="img/logo1.png" alt="logo" style="width:300px">
            <h1>GER'S GARAGE</h1>
            <p>THE BEST SOLUTION FOR YOU VEHICLE</p>        
        </div>              
    </header>
    <section>  
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
        
        <div class= "container">       
            <div class="space">
                <div class= "row">
                    <div class= "column">
               	    <h2>ABOUT US </h2>
                        <p><strong>Gers’s Garage</strong>, 
                        Established in 2008, we are leading tyre and automotive repair experts. <br>
                        Over 12 years of experience in Ireland.<br>
                        We provide professional services including new tyres,
                        brakes, batteries, air conditioning, wheel alignment,
                        exhausts and much more. <br>
                        We offer the best service your vehicle needs.
                        </p><br>
                                             
                        <p> &#10004; Review services in 30 minutes;
                        </p>
                        <p> &#10004; Phone and website scheduling options;
                        </p>
                        <p> &#10004; Status of services on the website.
                        </p><br><br>
                    </div>
                             
                    <div class= "column">
			            <img src="img/carsaboutus.png" alt="caraboutus" width="600px" height="500px">
                    </div>
                    <div class= "openinghour">
        <table>
            <tr>
                <th>OPENING HOURS</th>   
            </tr>
            <tr>
                <td>Monday</td>
                <td>08:00	-	19:00</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>08:00	-	19:00</td>
            </tr>
                <tr>
                <td>Wednesday</td>
                <td>08:00	-	19:00</td>
                <tr>
            <tr>
                <td>Thursday</td>
                <td>08:00	-	19:00</td>
            </tr>
                <tr>
                <td>Friday</td>
                <td>08:00	-	19:00</td>
            </tr>
                <tr>
                <td>Saturday</td>
                <td>08:00	-	19:00</td>
            </tr>
                <tr>
                <td>Sunday</td>
                <td><b>CLOSED</b></td>
            </tr>
        </table>    
        </div>
                </div>               
            </div>
        </div>

        
    </section>  
    <?php
        include('footer.php');
    ?>   
</div>
</body> 
</html>