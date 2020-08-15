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
                <li><a href= "makeanappointment.php">APPOINTMENT </a></li>
                <li><a href= "contactus.php">CONTACT US</a></li>
                <li><a href= "admin.php">ADMIN &#x1f511 </a></li>

            </ul>
        </nav>            
        </div>              
    </header>
    <section> 
        <div class= "navpag">
            <h1> LOGIN</h1>          
                            
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
    
        <div class= "container">
     
            <h3>ADMIN ACCESS &#x1f511</32>  <br><br>  
            <form action="actionadmin.php" method="post">
            <div><br>
            <input type="user" name="user" class="form-control" placeholder="USER" required>
            </div> <br> 
            <input type="password" name="password" class="form-control" placeholder="PASSWORD*" required>
            </div>  <br> <br><br>
            <div>
            <input type="submit" class="form-control" value="ACCESS"> <br><br>
            </div>
            </form>
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
