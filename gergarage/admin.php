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
    <!-- The Modal -->
    <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content" style = "margin-top:556px !important;">
        <span class="close">&times;</span>
        <p id="error_msg"></p>
    </div>

    </div>


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
            <div><br>
            <input type="user" name="user" id="user" class="form-control" placeholder="USER" required>
            </div> <br> 
            <input type="password" name="password" id="password" class="form-control" placeholder="PASSWORD*" required>
            </div>  <br> 
            <div>
                <center>
            <button onclick="check_login()" style= "padding: 3px;height: 29px;"> ACCESS </buttton> <br><br>
</center>
            </div>
            </form>
            <script>
        function check_login(){
            var user = $('#user').val();
            var password = $('#password').val();
            if(user=='')
            {
                $('#user').focus();
                $("#user").attr("placeholder", "Username is Required.");
                return;
            } 
            if(password=='')
            {
                $('#password').focus();
                $("#password").attr("placeholder", "password is Required.");
                return;
            } 
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              var modal = document.getElementById('myModal');
              console.log(this.responseText.localeCompare("successfull"));
              if ( this.responseText.trim().localeCompare("successfull") == 0 ){
                  window.location.href = 'adminaccess.php';
                  return;
              }
              document.getElementById("error_msg").innerHTML = this.responseText;
              modal.style.display = 'block';
              setTimeout(function(){ 
                modal.style.display = 'none';
                }, 2000);
            }
            };
            xmlhttp.open('GET','actionadmin.php?user='+user+'&password='+password,true);
            xmlhttp.send();
        }
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on the button, open the modal
            btn.onclick = function() {
            modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
            modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            }
        </script> 
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
