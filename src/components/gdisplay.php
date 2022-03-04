<?php 

    include 'connection.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gas Bill</title>

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
    Gas BILL INFORMATIONS
    </marquee></h1>
        <div class="container">

            <button class="btn btn-success my-5">

                 <a href="ginsert.php" class="text-light"> Add Data </a>
        
        </button>


        <table class="table table-striped table-success">
  <thead>
    <tr>
      <th scope="col">Gas_Bill_ID</th>
      <th scope="col">Zone</th>
      <th scope="col">Date</th>
      <th scope="col">Appliance_Type</th>
      <th scope="col">Amount</th>
      <th scope="col">u_id</th>
      <th scope="col">Payment_Info</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    
        $sql = "SELECT * FROM `g_bill1`";
        $result = mysqli_query($conn,$sql);

        if($result){

           while($row = mysqli_fetch_assoc($result)){

                $g_id = $row['g_id'];
                $Zone = $row['Zone'];
                $Date = $row['Date'];
                $Appliance_Type = $row['Appliance_Type'];
                $Amount = $row['Amount'];
                $u_id = $row['u_id'];
                $pay_info = $row['pay_info'];

                echo '

                <tr>
                    <th scope="row">'.$g_id.'</th>
                    <td>'.$Zone.'</td>
                    <td>'.$Date.'</td>
                    <td>'.$Appliance_Type.'</td>
                    <td>'.$Amount.'</td>
                    <td>'.$u_id.'</td>
                    <td>'.$pay_info.'</td>

                    <td>

                      <button class="btn btn-success"><a href="gupdate.php?guid='.$g_id.'" class="text-light">Update</a></button>
                      
                      <button  class="btn btn-danger"><a href="gdelete.php?gdid='.$g_id.'" class="text-light">Delete</a></button>
            
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

<a href="gph.php" class="text-light"> Payment History </a>

</button>
      

</div>

        </div>


</body>
</html>