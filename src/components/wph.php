<?php 

    include 'connection.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internet Bill Payment History</title>

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
    WATER BILL Payment History
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
      <th scope="col">Water_ID</th>
      <th scope="col">Bill Number</th>
      <th scope="col">Bill Date</th>
      <th scope="col">Connection_Type</th>
      <th scope="col">House_Type</th>
      
      <th scope="col">Amount</th>
      <th scope="col">Payment Info</th>
      
    </tr>
  </thead>
  <tbody>

    <?php 
    
        $sql = "SELECT * FROM w_bill JOIN auth WHERE w_bill.u_id = auth.u_id ";
        $result = mysqli_query($conn,$sql);

        if($result){

           while($row = mysqli_fetch_assoc($result)){
            $u_id = $row['u_id'];
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $password = $row['password'];
            $email = $row['email'];
                $w_id = $row['w_id'];
                $bill_no = $row['bill_no'];
                $bill_date = $row['bill_date'];
                $cp_no = $row['cp_no'];
                $house_type = $row['house_type'];
                
                $amount = $row['amount'];

                $pay_info = $row['pay_info'];
               

                echo '

                <tr>
                <td>'.$u_id.'</td>
                <td>'.$firstName.'</td>
                <td>'.$lastName.'</td>
                <td>'.$password.'</td>
                <td>'.$email.'</td>

                    <th scope="row">'.$w_id.'</th>
                    <td>'.$bill_no.'</td>
                    <td>'.$bill_date.'</td>
                    <td>'.$cp_no.'</td>
                    <td>'.$house_type.'</td>
                    
                    <td>'.$amount.'</td>

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

<a href="itdisplay.php" class="text-light"> Back </a>

</button>

</div>

        </div>


</body>
</html>