<?php 

    include 'connection.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Bill</title>

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
    WATER BILL INFORMATIONS
    </marquee></h1>

        <div class="container">

            <button class="btn btn-success my-5">

                 <a href="winsert.php" class="text-light"> Add Data </a>
        
        </button>


        <table class="table table-striped table-success">
  <thead>
    <tr>
      <th scope="col">Water_Bill_ID</th>
      <th scope="col">Bill Number</th>
      <th scope="col">Bill Date</th>
      <th scope="col">Connection_Type</th>
      <th scope="col">House_Type</th>
      <th scope="col">u_id</th>
      <th scope="col">Amount</th>
      <th scope="col">Payment Info</th>
      
    </tr>
  </thead>
  <tbody>

    <?php 
    
        $sql = "SELECT * FROM `w_bill`";
        $result = mysqli_query($conn,$sql);

        if($result){

           while($row = mysqli_fetch_assoc($result)){

                $w_id = $row['w_id'];
                $bill_no = $row['bill_no'];
                $bill_date = $row['bill_date'];
                $cp_no = $row['cp_no'];
                $house_type = $row['house_type'];
                $u_id = $row['u_id'];
                $amount = $row['amount'];
                $pay_info = $row['pay_info'];

                echo '

                <tr>
                    <th scope="row">'.$w_id.'</th>
                    <td>'.$bill_no.'</td>
                    <td>'.$bill_date.'</td>
                    <td>'.$cp_no.'</td>
                    <td>'.$house_type.'</td>
                    <td>'.$u_id.'</td>
                    <td>'.$amount.'</td>
                    <td>'.$pay_info.'</td>

                    <td>

                      <button class="btn btn-success"><a href="wupdate.php?wuid='.$w_id.'" class="text-light">Update</a></button>
                      
                      <button  class="btn btn-danger"><a href="wdelete.php?wdid='.$w_id.'" class="text-light">Delete</a></button>
            
                   </td> 
                </tr>
                
                
                ';
           }
            
        }
    
    
    ?>

     
      
    
  </tbody>
</table>


<div class="clearfix"> 

<button class="btn btn-success my-5 float-left">

<a href="Admin_Panel.php" class="text-light"> Back </a>

</button>


<button class="btn btn-success my-5 float-right">

<a href="wph.php" class="text-light"> Payment History </a>

</button>
      

</div>

        </div>


</body>
</html>