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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
      $(document).ready(function(){
  $("button").click(function(){
     //alert("kel")
    if($(this).attr('name') == "accept"){
     $.get("acceptRequest.php",
    {
      id: $(this).attr('key'),
      animal_id : $(this).attr('animal')
    },
    function(data,status){
      location.reload();
      alert("request accepted successfully");
      
    });
    }
    else
    {
      $.get("deleteRequest.php",
    {
      id: $(this).attr('key')
    },
    function(data,status){
      location.reload();
      alert("request deleted successfully");
    });

    }
  



  });
});
</script>
    <style>
      .card {
  overflow: visible;
}
.profile-pic {
  margin-top: 0em;
  z-index: 1;
  position: relative;
}

.profile-pic > img {
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}

.controls {
  cursor: pointer;
}


     </style>
</head>
<body>
   <?php  include 'header.html' ?>

   <div class="container"> 
   <h2>My Buy Requests</h2>
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
            $collection = $db->user;
            $res = $collection->findOne(['email' => $login_session]);
            $array = iterator_to_array($res);
          //  var_dump($array['requests']);
           
          
            
           foreach($array['requests'] as $request ){
        //   echo"inside";
        //   var_dump($Ls);
        //    echo "break";
        $id = $request['for'];
        // foreach($Ls['_id'] as $ls) {
            // echo"inner<br>";
            // var_dump($ls);
            // $file=$path.$id.".png";
            // $text=(string)$id;
              
            // $ecc = 'L'; 
            // $pixel_Size = 10; 
            // $frame_Size = 10; 
              
            // QRcode::png($text, $file, $ecc, $pixel_Size, $frame_Size); 
             
           echo " <div class=row>
            <div class='col l12 m12 s12'>
              <div class='row'>
                <div class='col s12'>
                  <div class='card'>
                    <div class='card-image'>
                      <img src=''  />
                    </div>
                    <div class='card-content'>
                      <div class='row'>";
                        // <div class='col s4 profile-pic'>
                        //   <img class='circle responsive-img' src='".$file."' alt='' />
                        // </div>
                       echo" <div class='col s8 profile-pic'>
                          <p><h5>Livestock Id : ".$id."</h5></p>
                          <p><h5>Requester : ".$request['requester_id']."</h5></p>
                          <p> <button  class='btn light-green' type='submit' name = 'accept' key='".$request['requester_id']." animal='".$id."' >Accept</button>&nbsp;
                          <button  class='btn red' type='submit' name = 'reject' key='".$request['requester_id']."' >Reject</button></p>
                    
                          <p></p>
                      </div>
                       
                      </div>
                      <span class='card-title black-text'></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>";
          



        // }
    
          }
           exit;   
     
     ?>
    
     
    





</div>


   <?php
    //   if(isset($_POST['action'])){
    //     extract($_POST);
    //     require './../vendor/autoload.php';
    //     $con = new MongoDB\Client("mongodb://localhost:27017"); 
    //     $db = $con->livestock;
    //     $animals = $db->animals;
    //     $user = $db->user;
    //     $user_res = $user->findOne(['email' => $login_session]);

    //     // $orig_date = new DateTime($DOB);
    //     var_dump($DOB);
    //     $user_data = iterator_to_array($user_res);
    //     $animals->insertOne( [ 'user_id'=>$user_data['_id'],'livestock' =>$livestock,'breed'=>$breed,'use'=>$use,'gender'=>$gender,'DOB'=>new \MongoDB\BSON\UTCDateTime(strtotime($DOB) * 1000),'isAlive' => $alive] );  
        



    //   }



    ?>
   
    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <script>
        $(document).ready(function(){
    $('.sidenav').sidenav();
  });
    </script>

<script>
// $(document).ready(function(){
//   $("button").click(function(){
//                   if ($(this).attr('name') == "reject"){
//                   // alert()
//                   $.get("rejectRequest.php",
//                   {
//                     id: $("this").attr('key'),
                  
//                   },
//                   function(data,status){
//                     alert($(this).attr('key')+"request rejected successfully ");
//                   });
//                   }
//   });
// });












</script>




 </body>
</html>