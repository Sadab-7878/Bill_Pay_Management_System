<?php 

    include 'connection.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill</title>

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
    ELECTRICITY BILL INFORMATIONS
    </marquee></h1>
        <div class="container">

            <button class="btn btn-success my-5">

                 <a href="elinsert.php" class="text-light"> Add Data </a>
        
        </button>


        <table class="table table-striped table-success">
  <thead>
    <tr>
      <th scope="col">Electricity_ID</th>
      <th scope="col">Bill Number</th>
      <th scope="col">Meter Number</th>
      <th scope="col">Con Unit</th>
      <th scope="col">User ID</th>
      <th scope="col">Amount</th>
      <th scope="col">Date</th>
      <th scope="col">Pay Info</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    
        $sql = "SELECT * FROM `ebill1`";
        $result = mysqli_query($conn,$sql);

        if($result){

           while($row = mysqli_fetch_assoc($result)){

                $e_id = $row['e_id'];
                $Bill_No = $row['Bill_No'];
                $Meter_NO = $row['Meter_NO'];
                $con_unit = $row['con_unit'];
                $u_id = $row['u_id'];
                $amount = $row['amount'];
                $Date = $row['Date'];
                $pay_info = $row['pay_info'];

                echo '

                <tr>
                    <th scope="row">'.$e_id.'</th>
                    <td>'.$Bill_No.'</td>
                    <td>'.$Meter_NO.'</td>
                    <td>'.$con_unit.'</td>
                    <td>'.$u_id.'</td>
                    <td>'.$amount.'</td>
                    <td>'.$Date.'</td>
                    <td>'.$pay_info.'</td>

                    <td>

                      <button class="btn btn-success"><a href="elupdate.php?updateid='.$e_id.'" class="text-light">Update</a></button>
                      
                      <button  class="btn btn-danger"><a href="eldelete.php?deleteid='.$e_id.'" class="text-light">Delete</a></button>
            
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

<a href="elph.php" class="text-light"> Payment History </a>

</button>
      

</div>

        </div>


</body>
</html>