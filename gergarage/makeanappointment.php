
<html lang="en-EU">
<head>    
    <meta charset="utf-8"; />
    <title> Ger's Garage </title>
    <meta name="description" content=" Ger's Garage: The best solution for you vehicle."/>


    
    <!-- External style definition -->
    <link rel="stylesheet" type="text/css" href="css/myStyles-makeanappoint.css">
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
        </div>              
    </header>
    <section> 
        <div class= "navpag">
            <h1>APPOINTMENT</h1>          
                            
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
            <div class="row1">
                <div class="calen">
                    <img src= "img/calen.png" alt="" width="150px" height="150px">
                </div>
                    <div class="info1">
                    <p> 
                        We know your time is important, that is why we have an online booking system available to make easier for you.
                        You come at the booked time, we will be ready to help you out straigh away.
                    </p><br>
                    </div>
                    <div class="info2">
                           
                        <p> &#10004; Convenience for our customers;
                        </p><br>
                        <p> &#10004; Flexible schedules within the available scheduling calendar;
                        </p><br>
                        <p> &#10004; Rescheduling without charges.
                        </p><br><br>
                    </div>
            </div>

        <div class="container">                                  
            <h4>Already Registrered?</h4>
            <form action="actionlogin.php" method="post">
                <div>
                    <input name="email" class="form-control" placeholder="Email" required>
                </div> <br>
                <div>
                <input name="password" class="form-control" type="password" placeholder="" required>
                </div><br>
                <input type="submit" value="LOG IN"> <br> <br> <br>
            </form>
        </div>                    
                
            
            <h4 align=center > <strong>Don't have an account yet?</strong> </h4><br>
            <p> <a href="signup.php"  align=center class="form-control">SIGN UP</a> </p> <br>
                            
                         
     
        </div>                         
    </section>
    <?php
        include('footer.php');
    ?>  
    </div>  

</body>
</html>