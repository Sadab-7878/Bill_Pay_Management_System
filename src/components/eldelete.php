<?php 

    include 'connection.php';


    if(isset($_GET['deleteid'])){

        $e_id = $_GET['deleteid'];

        $sql = "DELETE FROM `ebill1` WHERE e_id=$e_id";
        $result = mysqli_query($conn,$sql);

        if($result){

            header('location:eldisplay.php');
        }else{

            die(mysqli_error($conn));
        }
    }


?>