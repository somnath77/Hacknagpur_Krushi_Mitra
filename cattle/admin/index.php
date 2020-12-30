<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <!-- <script src='main.js'></script> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<?php  include 'header.html' ?>

    <div class="container"> 
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
            $collection = $db->aho;
            $res = $collection->findOne(['email' => $login_session]);
            
            
            $array = iterator_to_array($res);
            //var_dump($array);
            $file="./qrs/noprofile.jfif";
            $text=$array['adhaar'];
              
            // $ecc stores error correction capability('L') 
            // $ecc = 'L'; 
            // $pixel_Size = 10; 
            // $frame_Size = 10; 
              
            // Generates QR Code and Stores it in directory given 
            // QRcode::png($text, $file, $ecc, $pixel_Size, $frame_Size); 
              
            // Displaying the stored QR code from directory 
           
            // echo "<img src='".$file."'>"; 
     
     ?>
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
     <h2>My Profile</h2>
     <div class="row">
  <div class="col l12 m12 s12">
    <div class="row">
      <div class="col s12">
        <div class="card">
          <div class="card-image">
            <img src="http://www.img.lirent.net/2014/10/Android-Lollipop-wallpapers-Download.jpg" alt="" />
          </div>
          <div class="card-content">
            <div class="row">
              <div class="col s4 profile-pic">
               <?php echo "<img class='circle responsive-img' src='".$file."' alt='' />"; ?>
              </div>
              <div class="col s8 profile-pic">
                <p><h5>Livestocks under : <?php echo '3';   ?></h5></p>
                <p><h5>Contact no : <?php echo $array['mobile']  ?></h5></p>
                <p><h5>Locality   : <?php echo $array['region']  ?></h5></p>
                <p><h5>Adhaar     : <?php echo $array['adhaar']  ?></h5></p>
                <p><h5>User        : <?php echo '2'  ?></h5></p>
                
                <p></p>
            </div>
             
            </div>
            <span class="card-title black-text"><?php  echo $array['name'] ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <script>
        $(document).ready(function(){
    $('.sidenav').sidenav();
  });
    </script>
 </body>
</html>