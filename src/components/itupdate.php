<?php 

    include ('connection.php');

   $i_id = $_GET['ituid'];


    
    
    $sql = "SELECT * FROM `iter_bill` WHERE i_id='$i_id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $bill_no = $row['bill_no'];
    $bill_date = $row['bill_date'];
    $cp_no = $row['cp_no'];
    $u_id = $row['u_id'];
    $amount = $row['amount'];
    $p_info = $row['p_info'];
    

    if(isset($_POST['submit'])){

       
        $bill_no = $_POST['bill_no'];
        $bill_date = $_POST['bill_date'];
        $cp_no = $_POST['cp_no'];
        $u_id = $_POST['u_id'];
        $amount = $_POST['amount'];
        $p_info = $_POST['p_info']; 


        $sql = "UPDATE `iter_bill` SET i_id='$i_id', bill_no='$bill_no',bill_date='$bill_date',cp_no='$cp_no',u_id='$u_id',amount ='$amount',p_info='$p_info' WHERE i_id='$i_id'";

        $result = mysqli_query($conn,$sql);


        if($result){

          echo '<script> alert("Data Saved"); </script>';
          header('location:itdisplay.php');
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

   

    <title>Internet Bill</title>
    
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
      UPDATE YOUR Internet BILL
</marquee></h1>
        

        <div class="container">

       
          <form action="" method="POST">
          
            <div class="form-group">
          
              <label>Bill Number</label>
              <input type="text" class="form-control"  placeholder="Enter Bill Number" name="bill_no" value=<?php echo $bill_no; ?>
              >
            </div>

            <div class="form-group">
              <label >Bill Date</label>
              <input type="text" class="form-control"  placeholder="Enter Date" name="bill_date" value=<?php echo $bill_date; ?>>
            </div>

            <div class="form-group">
              <label >Connection_Type</label>
              <input type="text" class="form-control"  placeholder="Enter Connection_Type" name="cp_no" value=<?php echo $cp_no; ?>>
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
              <label >Payment Info</label>
              <input type="text" class="form-control"  placeholder="Enter Pay Info" name="p_info" value=<?php echo $p_info; ?>>
            </div>



            <div class="text-center"><button type="submit" class="btn btn-primary" name="submit">Update</button></div>

            <button class="btn btn-success my-5 ">

        <a href="itdisplay.php" class="text-light"> Back </a>

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