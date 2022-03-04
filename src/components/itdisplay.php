<?php 

    include 'connection.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internet Bill</title>

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
    INTERNET BILL INFORMATIONS
    </marquee></h1>

        <div class="container">

            <button class="btn btn-success my-5">

                 <a href="itinsert.php" class="text-light"> Add Data </a>
        
        </button>


        <table class="table table-striped table-success">
  <thead>
    <tr>
      <th scope="col">Internet_Bill_ID</th>
      <th scope="col">Bill Number</th>
      <th scope="col">Date</th>
      <th scope="col">Connection_Type</th>
      <th scope="col">u_id</th>
      <th scope="col">Amount</th>
      <th scope="col">Payment Info</th>
      
    </tr>
  </thead>
  <tbody>

    <?php 
    
        $sql = "SELECT * FROM `iter_bill`";
        $result = mysqli_query($conn,$sql);

        if($result){

           while($row = mysqli_fetch_assoc($result)){

                $i_id  = $row['i_id'];
                $bill_no = $row['bill_no'];
                $bill_date = $row['bill_date'];
                $cp_no = $row['cp_no'];
                $u_id = $row['u_id'];
                $amount = $row['amount'];
                $p_info = $row['p_info'];

                echo '

                <tr>
                    <th scope="row">'.$i_id.'</th>
                    <td>'.$bill_no.'</td>
                    <td>'.$bill_date.'</td>
                    <td>'.$cp_no.'</td>
                    <td>'.$u_id.'</td>
                    <td>'.$amount.'</td>
                    <td>'.$p_info.'</td>

                    <td>

                      <button class="btn btn-success"><a href="itupdate.php?ituid='.$i_id.'" class="text-light">Update</a></button>
                      
                      <button  class="btn btn-danger"><a href="itdelete.php?itdid='.$i_id.'" class="text-light">Delete</a></button>
            
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

<a href="itph.php" class="text-light"> Payment History </a>

</button>
      

</div>

        </div>


</body>
</html>