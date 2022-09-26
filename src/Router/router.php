<?php 

    if(isset($_GET['q'])){
        header('location: ../View/' . $_GET['q'] . '.php');
    }else{
        header('location: ../View/login.php');
    }
?>