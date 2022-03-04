<?php 

    include 'connection.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gas Bill Payment History</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="eldisplaystyle.css">

    <style>

      body{
        background-color: #383d52;
      }
      h1{
        margin:20px;
        text-align: center;
        color: burlywood;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        
      }
    </style>
</head>
<body>

  <h1 > <marquee width="60%" direction="left" height="120px">
    GAS BILL Payment History
    </marquee></h1>
        <div class="container">

            

        <table class="table table-striped table-success">
  <thead>
    <tr>
    <th scope="col">User ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">Gas_ID</th>
      <th scope="col">Zone</th>
      <th scope="col">Date</th>
      <th scope="col">Appliance_Type</th>
      
      <th scope="col">Amount</th>
      <th scope="col">Payment_Info</th>
      
    </tr>
  </thead>
  <tbody>

    <?php 
    
        $sql = "SELECT * FROM g_bill1 JOIN auth WHERE g_bill1.u_id = auth.u_id ";
        $result = mysqli_query($conn,$sql);

        if($result){

           while($row = mysqli_fetch_assoc($result)){
            $u_id = $row['u_id'];
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $password = $row['password'];
            $email = $row['email'];
            $g_id = $row['g_id'];
            $Zone = $row['Zone'];
            $Date = $row['Date'];
            $Appliance_Type = $row['Appliance_Type'];
                
            $Amount = $row['Amount'];
            $pay_info = $row['pay_info'];
               

                echo '

                <tr>
                <td>'.$u_id.'</td>
                <td>'.$firstName.'</td>
                <td>'.$lastName.'</td>
                <td>'.$password.'</td>
                <td>'.$email.'</td>

                    <th scope="row">'.$g_id.'</th>
                    <td>'.$Zone.'</td>
                    <td>'.$Date.'</td>
                    <td>'.$Appliance_Type.'</td>
                    
                    <td>'.$Amount.'</td>
                    <td>'.$pay_info.'</td>
                    
                    
                </tr>
                
                
                ';
           }
            
        }
    
    
    ?>

     
      
    
  </tbody>
</table>

<div> 

<button class="btn btn-success my-5 ">

<a href="gdisplay.php" class="text-light"> Back </a>

</button>

</div>

        </div>


</body>
</html>