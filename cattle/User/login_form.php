<!DOCTYPE html>
<html>
  <head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href='css/style.css' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">    
    <title>Account</title>        
    <style>
        .tabs .indicator{
            background-color: indigo;
        }
        body{
           
            align-items: center;
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
        }
      </style>
  </head>    
    <body>      
                     
        
            <div class="row container padtop80" style="min-height:100vh">
            <div class="col m6 offset-m3 s12">
                <div class="row">
                     <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1" class="active indigo-text ">Login</a></li>
        <li class="tab col s3"><a href="#test2" class="indigo-text">Register</a></li>        
      </ul>
    </div>
                </div>
            </div>
                <form method='post' action='./login.php'>  
                <div id="test1" class="col s12 padtop40">                    
                    <div class="col m6 offset-m3 s12 z-depth-1 padtop10 " >
                        <div class="lid">
                <div class="input-field col s12 remx">
                  <input placeholder="Placeholder" id="email" name="email" type="text" class="validate">
                  <label for="first_name">User Name/ Email</label>
                </div>
                <div class="input-field col s12 remx">
                  <input placeholder="Placeholder" id="password" name="password" type="password" class="validate">
                  <label for="password1">Password</label>
                </div>
                <!-- <p class="padleft10 remx">
                  <input type="checkbox" id="test5" name = "isAdmin"/>
                  <label for="test5">Admin</label>
                </p> -->
                <p class="padleft10 remx" >
                <button  class="btn indigo " type="submit" name="action">login</button>
                    </p>
                    <a href="#" class="indigo-text " id="hider">Forgot my password?</a>
               
                        </div>
                        <div class="hid">
                            <div class="input-field col s12 ">
                              <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                              <label for="first_name">Enter Email</label>
                            </div>
                            <div class="padleft10">
                                <a href="#" class="indigo  btn">Submit</a>
                                <a href="#" class="grey btn" id="cancll">Cancel</a>
                            </div>
                        </div>
                        <div class="center">
                        <!-- <div class="preloader-wrapper active center">                
                            <div class="spinner-layer spinner-red-only">
                              <div class="circle-clipper left">
                                <div class="circle"></div>
                              </div><div class="gap-patch">
                                <div class="circle"></div>
                              </div><div class="circle-clipper right">
                                <div class="circle"></div>
                              </div>
                            </div>
                        </div> -->
                        </div>
            </div>
      
                </div>
                </form> 
                <form method='post' action='./login_form.php'>  
                  <div id="test2" class="col s12 padtop40">
                <div class="col m6 offset-m3 s12 z-depth-1 padtop10">
                <div class="input-field col s12 ">
                  <input placeholder="Placeholder" id="first_name" type="text" class="validate" name='email'>
                  <label for="first_name">Email ID* </label>
                </div>
                <div class="input-field col s12 ">
                  <input placeholder="Placeholder" id="first_name" type="text" class="validate" name='name'>
                  <label for="first_name"> Name* </label>
                </div>          
                <div class="input-field col s12 ">
                  <input placeholder="Placeholder" id="first_name" type="text" class="validate" name='mobile'>
                  <label for="first_name">Mobile* </label>
                </div>      
                <div class="input-field col s12 ">
                  <input placeholder="Placeholder" id="password1" type="password" class="validate" name='password'>
                  <label for="password1">Password*</label>
                </div>
                <div class="input-field col s12 ">
                  <input placeholder="Placeholder" id="password1" type="password" class="validate">
                  <label for="password1">Confirm Password*</label>
                </div>
                <div class="input-field col s12 ">
                  <input placeholder="Placeholder" id="adhaar" type="text" name='adhaar'>
                  <label for="first_name">Adhaar No* </label>
                </div> 
                <div class="input-field col s12 ">
                  <!-- <input placeholder="Placeholder" id="password1" type="password" class="validate"> -->
                  <!-- <label for="password1">Region</label> -->
                  <select id="locality-dropdown" name="locality">
                  <option value="" disabled selected>Choose your option</option>
                  <option value="0101-Kalmeshwar" >Kalmeshwar</option>
                        <option value="0102-Hingana">Hingana</option>
                        <option value="0201-Ramtek">Ramtek</option>
                        <option value="0202-Umred">Urmed</option>
                        
                 </select>
    <label>Region*</label>
 
                </div>
                
                 
                <!-- <p class="padleft10">
                  <input type="checkbox" id="test6" />
                    <label for="test6">I agree to the <a href-="#" class="light-green-text ">'EULA'</a> and <a href-="#" class="blue-text text-darken-4">'Privacy Policy'</a>.</label>
                </p> -->
                <p class="padleft10">
                    <button  class="btn indigo " type="submit" name="action">Register</a>                 
                </p>
                <div class="row">
    <!-- <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">cloud</i>
    </button> -->
</div>
            </div>
                
                </div>    
  </div>      
      </form>
        
        
         
      
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js">
        </script>
        <!-- <script>
          let dropdown = $('#locality-dropdown');

dropdown.empty();

dropdown.append('<option selected="true" disabled>Choose Region</option>');
dropdown.prop('selectedIndex', 0);

const url = 'area.json';

//Populate dropdown with list of provinces
$.getJSON(url, function (data) {
  $.each(data, function (key, entry) {
    dropdown.append($('<option></option>').attr('value', entry.abbreviation).text(entry.name));
  })
});
// $.getJSON( "area.json", function( data ) {
//   var options = $("#locality-dropdown");
//   $.each( data, function(key, val) {
//     options.append(new Option(key, val));
//   });
// });

            </script> -->
        <?php 
        if(isset($_POST['action'])){
          require './../vendor/autoload.php';
          $con = new MongoDB\Client("mongodb://localhost:27017"); 
          $db = $con->livestock;
         extract($_POST);
         $collection = $db->user;  
         $locality = $_POST['locality'];
        //  var_dump(get_defined_vars());
         $collection->insertOne( [ 'email'=>$email,'name' =>$name,'mobile'=>$mobile,'password'=>$password,'adhaar'=>$adhaar,'region'=>$locality,'requests'=>array()] );  




        }
        ?>
        <script>
    	   $( document ).ready(function(){
    	       $(".button-collapse").sideNav();
               $(".dropdown-button").dropdown();
    	       $('select').material_select(); 
               $('.slider').slider({full_width: true});
                   $(".button-collapse").sideNav();
           })
        </script>
        <script>
            $(document).ready(function(){
                $(".hid").hide();
                $("#hider").click(function(){
                    $(".remx").hide();
                    $(".hid").show();
                }); 
                $("#cancll").click(function(){
                    $(".remx").show();
                    $(".hid").hide();
                })
            });
        </script>
            </body>
    

</html>