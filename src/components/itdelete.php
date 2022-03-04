<?php 

    include 'connection.php';


    if(isset($_GET['itdid'])){

        $i_id = $_GET['itdid'];

        $sql = "DELETE FROM `iter_bill` WHERE i_id=$i_id";
        $result = mysqli_query($conn,$sql);

        if($result){

            header('location:itdisplay.php');
        }else{

            die(mysqli_error($conn));
        }
    }


?>