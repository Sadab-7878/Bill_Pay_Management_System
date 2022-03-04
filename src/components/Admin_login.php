<?php 

require("connection.php");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LoginSignup</title>
    <link rel="stylesheet" href="style1.css" />

   
  </head>
  <body>
    <div class="hero">
      <div class="form-box">
        
      
        <h1 style="text-align:center"> ADMIN LOGIN </h1>
      
     

        <form method="POST" id="login" class="input-group" >
          <input
            type="text"
            class="input-field"
            placeholder="Admin ID"
            name="AdminID"
            required
          />
          <input
            type="password"
            class="input-field"
            placeholder="Password"
            name="Pass"
            required
          />

          <input type="checkbox" class="check-box" /><span
            >Remember Password</span
          >
          <button type="submit"  class="submit-btn" name="Signin">Login</button>
        </form>

       
      </div>
    </div>


    <?php 
    
        if(isset($_POST['Signin'])){

            $query = "SELECT * FROM `adminlogin` WHERE `aid` = '$_POST[AdminID]' AND `apassword` =  '$_POST[Pass]' ";

          $result =  mysqli_query($conn,$query);

          if(mysqli_num_rows($result)==1){

              session_start();
              $_SESSION['AdminLoginId'] = $_POST['AdminID'];
            
              header("location:Admin_Panel.php");
          }
          else {
              echo "<script> alert('Incorrect Password') </script>";
          }

        }
    
    
    ?>
    
  
  </body>
</html>
