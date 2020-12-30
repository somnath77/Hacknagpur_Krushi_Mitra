<?php
    
    session_start();
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
       // username and password sent from form 
       require './../vendor/autoload.php';
       $con = new MongoDB\Client("mongodb://localhost:27017"); 
       $db = $con->livestock;
       $myusername = $_POST['email'];
       $mypassword = $_POST['password']; 
       $collection = $db->aho;
      //  echo "<script><alert> ".$myusername."</alert></script>";
      //  $sql = "SELECT email FROM applications WHERE email = '$myusername' and password = '$mypassword'";
      //  $result = mysqli_query($db,$sql);
      //  $row = mysqli_fetch_array($result);
      $res = $collection->find(['email' => $myusername,'password' => $mypassword]);
      function function_alert($message) { 
      
         // Display the alert box  
         echo "<script>alert('$message');</script>"; 
     } 
       
       
   //   // Function call 
   //   function_alert($res); 
     //   $active = $row['active'];
       
      // $cnt = $collection->count($res);
       // If result matched $myusername and $mypassword, table row must be 1 row
       $found = 0;
       foreach ($res as $document) {
         if($document['email'] == $myusername )
         {
            $found = 1;
         break;
         }
     }
       if($found == 1) {
          //session_register("$myusername");
          $_SESSION['login_user'] = $myusername;
          header("location: index.php");
       }else {
          function_alert("Your Login Name or Password is invalid");
       }
    }
?>