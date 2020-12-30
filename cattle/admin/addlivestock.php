<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Add Livestock</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <!-- <script src='main.js'></script> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
   <?php  include 'header.html' ?>

<div class="container"> 
     <?php  
            $collection = $db->user;
            
     ?>
     
     <h2>Add New Livestock</h2>
       
      
     <div class = "row">
         <form class = "col s12" action="./addlivestock.php" method="post">
            
            
            <div class = "row">
               <label>Browser default Select</label>
               <select class = "browser-default" name='livestock'>
                  <option value = "" disabled selected>Select Livestock</option>
                  <option value = "Cow">Cow</option>
                  <option value = "Buffalo">Buffalo</option>
                  <option value = "Sheep">Sheep</option>
                  <option value = "Goat">Goat</option>
               </select>
            </div>
            <div class = "row">
               <label>Breed</label>
               <select class = "browser-default" name="breed">
                  <option value = "" disabled selected>Select Breed</option>
                  <option value = "Exotic">Exotic</option>
                  <option value = "indigenous">indigenous</option>
                
               </select>
            </div>
            
            <div class = "row">
               <label>Use</label>
               <select class = "browser-default" name="use">
                  <option value = "" disabled selected>Select Use</option>
                  <option value = "Milk">Milk</option>
                  <option value = "Luggage">Luggage</option>
               </select>
            </div>
              
            <div class = "row">
               <label>Gender</label>
               <select class = "browser-default" name="gender">
                  <option value = "" disabled selected>Select Gender</option>
                  <option value = "Male">Male</option>
                  <option value = "Female">Female</option>
                 
               </select>
            </div>
            <div class = "row">
               <label>Is Alive?</label>
               <select class = "browser-default" name="alive">
                  <option value = "" disabled selected>Select Status</option>
                  <option value = "Yes">Yes</option>
                  <option value = "No">No</option>
                 
               </select>
            </div>
            <div class = "row">
               <label>User Id</label>
               <input type = "text"  name = "user_id" /> 
            </div>
            <div class = "row">
               <label>Date of Birth</label>
               <input type = "date" class = "datepicker" name = "DOB" /> 
            </div>
            <div class = "row">
            <button  class="btn light-green " type="submit" name="action">Register</a>
            </div>
            		
         </form>       
      </div>

</div>


   <?php
      if(isset($_POST['action'])){
        extract($_POST);
        require './../vendor/autoload.php';
        $con = new MongoDB\Client("mongodb://localhost:27017"); 
        $db = $con->livestock;
        $animals = $db->animals;
        $admin = $db->aho;
        $admin_res = $admin->findOne(['email' => $login_session]);
        // $orig_date = new DateTime($DOB);
       // var_dump($DOB);
        $admin_data = iterator_to_array($admin_res);
        $animals->insertOne( [ 'user_id'=>(string)$_POST['user_id'],'livestock' =>$livestock,'breed'=>$breed,'use'=>$use,'gender'=>$gender,'DOB'=>new \MongoDB\BSON\UTCDateTime(strtotime($DOB) * 1000),'isAlive' => $alive,'approved' => (string)$admin_data['_id']] );  
        



      }



    ?>
   
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <script>
        $(document).ready(function(){
    $('.sidenav').sidenav();
  });
    </script>
 </body>
</html>