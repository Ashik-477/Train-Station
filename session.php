<?php 
 	 
     session_start();
   	 if($_SESSION['email'] == ""){
   	 
     header("location:login.php");
    }
?>