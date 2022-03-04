<?php 

    include 'connection.php';

    if(isset($_POST['submit'])){

        $g_id     =  $_POST['g_id']; 
        $Zone  =  $_POST['Zone']; 
        $Date =  $_POST['Date'];
        $Appliance_Type =  $_POST['Appliance_Type'];
        $Amount     =  $_POST['Amount'];
        $u_id   =  $_POST['u_id']; 
        $pay_info   =  $_POST['pay_info']; 


        $sql = "INSERT INTO `g_bill1` (g_id,Zone,Date,Appliance_Type,Amount,u_id,pay_info) VALUES('$g_id','$Zone','$Date','$Appliance_Type','$Amount','$u_id','$pay_info')";

        $result = mysqli_query($conn,$sql);


        if($result){

         
          header('location:gdisplay.php');
        }

        else{
          
          die(mysqli_error($conn));
        }
      
    }

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Gas Bill</title>
    <style>

      h1{

        text-align: center;
        color: burlywood;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        
      }

      
      body{
          background-color: #2E9598;
      }

      
    </style>


  </head>
  <body>

  <h1 > <marquee width="35%" direction="down" height="120px">
    WELCOME TO Gas Bill
    </marquee></h1>




        <div class="container my-5">


          <form method="post">
            <div class="form-group">
              <label>Gas ID</label>
              <input type="text" class="form-control"  placeholder="Enter Gas ID" name="g_id">
              
            </div>
            <div class="form-group">
              <label >Zone Number</label>
              <input type="text" class="form-control"  placeholder="Enter Zone Number" name="Zone">
            </div>

            <div class="form-group">
              <label >Date</label>
              <input type="text" class="form-control"  placeholder="Enter Date" name="Date">
            </div>

            <div class="form-group">
              <label >Appliance_Type</label>
              <input type="text" class="form-control"  placeholder="Enter Appliance_Type" name="Appliance_Type">
            </div>

            <div class="form-group">
              <label >Amount</label>
              <input type="text" class="form-control"  placeholder="Enter Amount" name="Amount">
            </div>

            <div class="form-group">
              <label >User ID</label>
              <input type="text" class="form-control"  placeholder="Enter User ID" name="u_id">
            </div>

            <div class="form-group">
              <label >Payment Info</label>
              <input type="text" class="form-control"  placeholder="Enter Pay Info" name="pay_info">
            </div>



            <div class="text-center">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
           </div>

           <button class="btn btn-success my-5 ">

        <a href="gdisplay.php" class="text-light"> Back </a>

          </button>
          </form>


        </div>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>