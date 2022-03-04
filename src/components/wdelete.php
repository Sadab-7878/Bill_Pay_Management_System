<?php 

    include 'connection.php';


    if(isset($_GET['wdid'])){

        $w_id = $_GET['wdid'];

        $sql = "DELETE FROM `w_bill` WHERE w_id=$w_id";
        $result = mysqli_query($conn,$sql);

        if($result){

            header('location:wdisplay.php');
        }else{

            die(mysqli_error($conn));
        }
    }


?>