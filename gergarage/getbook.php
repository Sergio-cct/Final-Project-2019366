<!DOCTYPE html>
<html>
    <head>
      <style>
        table {
         width: 98%;
         border-collapse: collapse;
        }

       table, td, th {
        border: 1px solid black;
        padding: 5px;
       }

       th {text-align: left;}
     </style>
   </head>
   <body>

     <?php
       $q = $_GET['q'];

       include "connect.php";

       mysqli_select_db($conn,"gers_garage");

       $sql = "SELECT * FROM bookingform WHERE date_book = '{$q}'";
       $result = mysqli_query($conn,$sql);

       echo "<table>
             <tr>

                        <th>Book</th> 
                        <th>Name</th> 
                        <th>E-mail</th> 
                        <th>Maker</th>
                        <th>Vehicle</th> 
                        <th>Type of booking</th> 
                        <th>Status</th> 
                        <th>Staff</th>
                        
                        
                        
              </tr>";
              
             
       while($row = mysqli_fetch_array($result)) {

      ?>



      <tr>
        <td id="booking_id"><?php echo $row['id-book']; ?></td>
        <td><?php echo $row['customername']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['maker']; ?></td>
        <td><?php echo $row['vehicletype']; ?></td>
        <td><?php echo $row['typeofbooking']; ?></td>

        
        <td>
        
              <select  name="<?php echo $row['id-book']; ?>"  id="status" class="form-controler" onchange="
              console.log(this);
              document.getElementById('status'+this.name).value = this.value;
            ">
       <option  value="Booked" <?php if ($row['book_status']== "Booked"){ ?>selected<?php } ?>>Booked</option>
       <option  value="In Service" <?php if ($row['book_status']== "In Service"){ ?>selected<?php } ?>>In Service</option>
       <option  value="Fixed / Completed" <?php if ($row['book_status']== "Fixed / Completed"){ ?>selected<?php } ?>> Fixed/Completed </option>
       <option  value="Collected" <?php if ($row['book_status']== "Collected"){ ?>selected<?php } ?> >Collected</option>
                <option  value="Unrepairable / Scrapped" <?php if ($row['book_status']== "Unrepairable / Scrapped"){ ?>selected<?php } ?> >Unrepairable/Scrapped</option>
              </select>
        </td>
        <td>
        <!-- <form action='savebook.php' method="post"  > -->
              <select id="staff"  name= "<?php echo $row['id-book']; ?>" class="form-controler" onchange="
              
                document.getElementById('staff'+this.name).value = this.value;
              " >
                <option value="Select">Select</option>
                <option value="Ger" <?php if ($row['staff']== "Ger"){ ?>selected<?php } ?>> Ger</option>
                <option value="John" <?php if ($row['staff']== "John"){ ?>selected<?php } ?>> John</option>
                <option value="Ken" <?php if ($row['staff']== "Ken"){ ?>selected<?php } ?>> Ken</option>
                <option value="Amilcar" <?php if ($row['staff']== "Amilcar"){ ?>selected<?php } ?>>Amilcar</option>
              </select>
              <input type='hidden' id="status<?php echo $row['id-book']; ?>" value="<?php echo $row['book_status']; ?>">
              <input type='hidden' id="staff<?php echo $row['id-book']; ?>" value="<?php echo $row['staff']; ?>">

              <button id='<?php echo $row['id-book']; ?>' class=" <?php echo $row['id-book']; ?>" onclick="var xmlhttp = new XMLHttpRequest();
              
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              alert(this.responseText);
            }
            };
            // var status_val = document.getElementById('status');
            // var strstatus = status_val.options[status_val.selectedIndex].value;

            // var staff = document.getElementById('staff');
            // var strstaff = staff.options[staff.selectedIndex].value;
            // var booking_id = this.id;
            var status = document.getElementById('status'+this.id);
            var staff = document.getElementById('staff'+this.id);
            console.log(status.value);
            xmlhttp.open('GET','savebook.php?booking_id='+this.id+'&status='+status.value+'&staff='+staff.value,true);
            xmlhttp.send();" value="Save"  />Save</button> 
        <!-- </form>  -->
        </td>
        
         
      
       
      </tr>

      
      <?php
      }
       echo "</table>";
       mysqli_close($conn);
     ?>
    <script>

function submit_data() {
            
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              alert("hi");
                //document.getElementById("txtHint").innerHTML = this.responseText;
            }
            };
            xmlhttp.open("GET","savebook.php?status=1",true);
            xmlhttp.send();
            
        }

    </script>
  </body>
  
</html>