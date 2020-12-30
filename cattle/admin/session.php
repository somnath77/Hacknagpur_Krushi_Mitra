<?php
   require './../vendor/autoload.php';
   $con = new MongoDB\Client("mongodb://localhost:27017"); 
   $db = $con->livestock;
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   // $ses_sql = mysqli_query($db,"select email from applications where email = '$user_check' ");
   
   // $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $_SESSION['login_user'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:../index.html");
      die();
   }
?>