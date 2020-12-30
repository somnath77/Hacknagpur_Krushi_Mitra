<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Info</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <!-- <script src='main.js'></script> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
<body>
   <?php  include 'header.html' ?>

   <div class="container"> 
   <h2>Livestock Info</h2>
     <?php  include '../phpqrcode/qrlib.php'; 
             
  
            // $path variable store the location where to  
            // store image and $file creates directory name 
            // of the QR code file by using 'uniqid' 
            // uniqid creates unique id based on microtime 
            $path = 'qrs/'; 

           // var_dump($res);
            // foreach ($res as $doc) {
            // $text = (string)$doc['adhaar'];
            // $file = $path.$doc['adhaar'].".png"; 
            // }
            $animalrecordId = $_GET['id'];
            $animalcol = $db->animals;
            $anres = $animalcol->findOne(['_id' => new MongoDB\BSON\ObjectId("$animalrecordId")]);
            $animalarray = iterator_to_array($anres);
            $userrecordId = (string)$animalarray['user_id'];
            // var_dump($animalarray);
            $usercol = $db->user;
            $usres = $usercol->findOne(['_id' => new MongoDB\BSON\ObjectId("$userrecordId")]);
             
            
            $userarray = iterator_to_array($usres);
           // $array['_id'];
            $file=$path.$userarray['adhaar'].".png";
            $text=$userarray['adhaar'];
           
            // $ecc stores error correction capability('L') 
            $ecc = 'L'; 
            $pixel_Size = 10; 
            $frame_Size = 10; 
              
            // Generates QR Code and Stores it in directory given 
            QRcode::png($text, $file, $ecc, $pixel_Size, $frame_Size);
            
        //    foreach($user_data as $ud ){
        //   echo"inside";
        //   var_dump($Ls);
        //    echo "break";
        $id = $userarray['adhaar'];
        // foreach($Ls['_id'] as $ls) {
            // echo"inner<br>";
            // var_dump($ls);
            $file=$path.$id.".png";
            $text=(string)$id;
              
            $ecc = 'L'; 
            $pixel_Size = 10; 
            $frame_Size = 10; 
              
            QRcode::png($text, $file, $ecc, $pixel_Size, $frame_Size); 
             
           ?> <div class=row>
            <div class='col l12 m12 s12'>
              <div class='row'>
                <div class='col s12'>
                  <div class='card'>
                    <div class='card-image'>
                      <img src=''  />
                    </div>
                    <div class='card-content'>
                      <div class='row'>
                        <div class='col s4 profile-pic'>
                        <?php echo "    <img class='circle responsive-img' src='".$file."' alt='' />
                        </div>
                        <div class='col s8 profile-pic'>
                          <p><h5>Owner Name : ".$userarray['name']."</h5></p>
                          <p ><h5 hidden id='user_id'>Owner Id : ".$userarray['_id']."</h5></p>
                          <p><h5>Mobile : ".$userarray['mobile']."</h5></p>
                          <p><h5>Region   : ".$userarray['region']." </h5></p>
                          <p><h5>Category : ".$animalarray['livestock']."</h5></p>
                          <p><h5>Breed   : ".$animalarray['breed']." </h5></p>";

                          ?>
                         <p> <button  class='btn light-green' type='submit' id = 'request' name='request' <?php echo "value=".$userarray['_id']."" ?>> Send Buy Request</button>
                         <p hidden id="owner_id"><?php echo $userarray['_id']; ?></p>
                         <p hidden id="animal_id"><?php echo $animalarray['_id']; ?></p>
                        </div>
                       
                      </div>
                      <span class='card-title black-text'></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          



        <!-- // }
    
        //   }
              
     
     ?>
    
      -->
    





</div>



   
   
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <script>
        $(document).ready(function(){
    $('.sidenav').sidenav();
  });
    </script>
    <script>
$(document).ready(function(){
  $("#request").click(function(){
    // alert()
    $.get("requestSender.php",
    {
      id: $("#owner_id").text(),
     animal_id : $("#animal_id").text()
    },
    function(data,status){
      alert("request sent successfully to "+$("#owner_id").text());
    });
  });
});
</script>
   
 </body>
</html>