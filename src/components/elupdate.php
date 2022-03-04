<?php 

    include 'connection.php';

    $e_id     =  $_GET['updateid'];
    $sql = "SELECT * FROM `ebill1` WHERE e_id=$e_id";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $Bill_No  =  $row['Bill_No']; 
    $Meter_NO =  $row['Meter_NO'];
    $con_unit =  $row['con_unit'];
    $u_id     =  $row['u_id'];
    $amount   =  $row['amount']; 
    $Date   =  $row['Date']; 
    $pay_info   =  $row['pay_info']; 
    

    if(isset($_POST['submit'])){

       
        $Bill_No  =  $_POST['Bill_No']; 
        $Meter_NO =  $_POST['Meter_NO'];
        $con_unit =  $_POST['con_unit'];
        $u_id     =  $_POST['u_id'];
        $amount   =  $_POST['amount']; 
        $Date   =  $_POST['Date']; 
        $pay_info   =  $_POST['pay_info']; 


        $sql = "UPDATE `ebill1` SET e_id='$e_id', Bill_No='$Bill_No',Meter_NO='$Meter_NO',con_unit='$con_unit',u_id='$u_id',amount='$amount',Date='$Date',pay_info='$pay_info' WHERE e_id='$e_id'";

        $result = mysqli_query($conn,$sql);


        if($result){

        
          header('location:eldisplay.php');
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

   

    <title>Electricity Bill</title>
    
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
  
  

   

  <h1 > <marquee width="30%" direction="down" height="120px">
      UPDATE YOUR ELECTRICITY BILL
</marquee></h1>
        

        <div class="container">

       
          <form method="post">
          
            <div class="form-group">
          
              <label >Bill Number</label>
              <input type="text" class="form-control"  placeholder="Enter Bill Number" name="Bill_No"
              value=<?php echo $Bill_No; ?>>
            </div>

            <div class="form-group">
              <label >Meter Number</label>
              <input type="text" class="form-control"  placeholder="Enter Meter Number" name="Meter_NO" value=<?php echo $Meter_NO; ?>>
            </div>

            <div class="form-group">
              <label >Con Unit</label>
              <input type="text" class="form-control"  placeholder="Enter Con Unit" name="con_unit" value=<?php echo $con_unit; ?>>
            </div>

            <div class="form-group">
              <label >User ID</label>
              <input type="text" class="form-control"  placeholder="Enter User ID" name="u_id" value=<?php echo $u_id; ?>>
            </div>

            <div class="form-group">
              <label >Amount</label>
              <input type="text" class="form-control"  placeholder="Enter Amount" name="amount" value=<?php echo $amount; ?>>
            </div>

            <div class="form-group">
              <label >Date</label>
              <input type="text" class="form-control"  placeholder="Enter Date" name="Date" value=<?php echo $Date; ?>>
            </div>

            <div class="form-group">
              <label >Payment Info</label>
              <input type="text" class="form-control"  placeholder="Enter Payment Info" name="pay_info" value=<?php echo $pay_info; ?>>
            </div>



            <div class="text-center"><button type="submit" class="btn btn-primary" name="submit">Update</button></div>

            <button class="btn btn-success my-5 ">

        <a href="eldisplay.php" class="text-light"> Back </a>

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