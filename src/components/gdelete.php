<?php 

    include 'connection.php';


    if(isset($_GET['gdid'])){

        $g_id = $_GET['gdid'];

        $sql = "DELETE FROM `g_bill1` WHERE g_id=$g_id";
        $result = mysqli_query($conn,$sql);

        if($result){

            header('location:gdisplay.php');
        }else{

            die(mysqli_error($conn));
        }
    }


?>