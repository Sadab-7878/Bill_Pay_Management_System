<?php 

    include 'connection.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Payment History</title>

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
    ELECTRICITY BILL Payment History
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
      <th scope="col">Electricity_ID</th>
      <th scope="col">Bill Number</th>
      <th scope="col">Meter Number</th>
      <th scope="col">Con Unit</th>
      
      <th scope="col">Amount</th>
      
    </tr>
  </thead>
  <tbody>

    <?php 
    
        $sql = "SELECT e.e_id,e.Bill_No,e.Meter_NO,e.con_unit,e.u_id,e.amount,e.Date,e.pay_info FROM ebill1 AS e LEFT JOIN (SELECT a.u_id,a.firstName,a.lastName,a.password,a.email FROM auth AS a) ON ebill1.'u_id' = auth.'u_id' ;
        $result = mysqli_query($conn,$sql);

        if($result){

           while($row = mysqli_fetch_assoc($result)){
            $u_id = $row['u_id'];
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $password = $row['password'];
            $email = $row['email'];
                $e_id = $row['e_id'];
                $Bill_No = $row['Bill_No'];
                $Meter_NO = $row['Meter_NO'];
                $con_unit = $row['con_unit'];
                
                $amount = $row['amount'];
               

                echo '

                <tr>
                <td>'.$u_id.'</td>
                <td>'.$firstName.'</td>
                <td>'.$lastName.'</td>
                <td>'.$password.'</td>
                <td>'.$email.'</td>

                    <th scope="row">'.$e_id.'</th>
                    <td>'.$Bill_No.'</td>
                    <td>'.$Meter_NO.'</td>
                    <td>'.$con_unit.'</td>
                    
                    <td>'.$amount.'</td>
                    
                    
                </tr>
                
                
                ';
           }
            
        }
    
    
    ?>

     
      
    
  </tbody>
</table>

<div> 

<button class="btn btn-success my-5 ">

<a href="eldisplay.php" class="text-light"> Back </a>

</button>

</div>

        </div>


</body>
</html>