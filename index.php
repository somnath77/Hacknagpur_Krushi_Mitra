
<html>
  <head>
    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="./css/cards.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        header div i {
            padding-top:20%;
            font-size: 56px;
        }
        .demo-card-square.mdl-card {
          width: 80%;
          height: 80%;
        }
        .demo-card-square > .mdl-card__title {
          color: #fff;
          background:
            url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
        }
        body{
          background:
            url('./images/background.jpg')  ;
            background-repeat: no-repeat;
    background-size: 100% 70%;
        }
    </style>
  </head>
  <body >
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title" >Farm App</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
          <nav class="mdl-navigation ">
            <a class="mdl-navigation__link" href=""></a>
          </nav>
        </div>
        
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Farm App</span>
        <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="./shop/index.html">My Shop</a>
          <a class="mdl-navigation__link" href="">Crop Doctor</a>
          <a class="mdl-navigation__link" href="">Soil Jotishi</a>
          <a class="mdl-navigation__link" href="./agriUpdates/agriUpdates.html">Agri Updates</a>
          <a class="mdl-navigation__link" href="./ferry/index.html">Ferry Sharing</a>
          <a class="mdl-navigation__link" href="marketNearMe.html">Markets Near Me</a>
          <a class="mdl-navigation__link" href="./weather/index.html">Weather Updates</a>
          <a class="mdl-navigation__link" href="https://pmkisan.gov.in">Kisan Seva</a>
          <a class="mdl-navigation__link" href="connectWithNgo.html">Connect with NGO</a>
          <a class="mdl-navigation__link" href="./cattle/User/index.php">Cattle Management</a>
        </nav>
      </div>
      <main class="mdl-layout__content">
        <div class="page-content">
          <div class="demo-grid-ruler mdl-grid" style="padding-left: 10%;">
            <div class="mdl-cell mdl-cell--4-col">
              <div class="demo-card-square mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title mdl-card--expand" style="background:url('./images/store.png');background-size: 80% 80%;background-repeat: no-repeat;background-position: center;"  >
                <!-- <h2 class="mdl-card__title-text">Update</h2> -->
              </div>
              
              <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="./shop/index.html">
                  My Shop
                </a>
              </div>
            </div>
          </div>
            <div class="mdl-cell mdl-cell--4-col">
              <div class="demo-card-square mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand" style="background:url('./images/first-aid-kit.png');background-size: 80% 80%;background-repeat: no-repeat;background-position: center;">
                  <!-- <h2 class="mdl-card__title-text">Update</h2> -->
                </div>
               
                <div class="mdl-card__actions mdl-card--border">
                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                    Crop Doctor
                  </a>
                </div>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--4-col">
              <div class="demo-card-square mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand" style="background:url('./images/soil.png');background-size: 80% 80%;background-repeat: no-repeat;background-position: center;">
                  <!-- <h2 class="mdl-card__title-text">Update</h2> -->
                </div>
                
                <div class="mdl-card__actions mdl-card--border">
                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                    Soil Jyotishi
                  </a>
                </div>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--4-col">
              <div class="demo-card-square mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand" style="background:url('./images/article.png');background-size: 80% 80%;background-repeat: no-repeat;background-position: center;">
                  <!-- <h2 class="mdl-card__title-text">Update</h2> -->
                </div>
                
                <div class="mdl-card__actions mdl-card--border">
                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="./agriUpdates/agriUpdates.html">
                   Agri Updates
                  </a>
                </div>
              </div>
            </div> <div class="mdl-cell mdl-cell--4-col">
              <div class="demo-card-square mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand" style="background:url('./images/car-sharing.png');background-size: 80% 80%;background-repeat: no-repeat;background-position: center;">
                  <!-- <h2 class="mdl-card__title-text">Update</h2> -->
                </div>
                
                <div class="mdl-card__actions mdl-card--border">
                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="./ferry/index.html" >
                    ferry Sharing
                  </a>
                </div>
              </div>
            </div> <div class="mdl-cell mdl-cell--4-col">
              <div class="demo-card-square mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand" style="background:url('./images/market.png');background-size: 80% 80%;background-repeat: no-repeat;background-position: center;">
                  <!-- <h2 class="mdl-card__title-text">Update</h2> -->
                </div>
                
                <div class="mdl-card__actions mdl-card--border">
                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="marketNearMe.html">
                    Markets Near Me
                  </a>
                </div>
              </div>
            </div> <div class="mdl-cell mdl-cell--4-col">
              <div class="demo-card-square mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand" style="background:url('./images/cloudy.png');background-size: 80% 80%;background-repeat: no-repeat;background-position: center;"> 
                  <!-- <h2 class="mdl-card__title-text">Update</h2> -->
                </div>
                
                <div class="mdl-card__actions mdl-card--border">
                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="./weather/index.html">
                   Weather Updates
                  </a>
                </div>
              </div>
            </div> <div class="mdl-cell mdl-cell--4-col">
              <div class="demo-card-square mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand" style="background:url('./images/headphones.png');background-size: 80% 80%;background-repeat: no-repeat;background-position: center;">
                  <!-- <h2 class="mdl-card__title-text">Update</h2> -->
                </div>
                
                <div class="mdl-card__actions mdl-card--border" >
                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="https://pmkisan.gov.in" >
                    Kisan Seva
                  </a>
                </div>
              </div>
            </div> <div class="mdl-cell mdl-cell--4-col">
              <div class="demo-card-square mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand" style="background:url('./images/building.png');background-size: 80% 80%;background-repeat: no-repeat;background-position: center;">
                  <!-- <h2 class="mdl-card__title-text">Update</h2> -->
                </div>
                
                <div class="mdl-card__actions mdl-card--border">
                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="connectWithNgo.html">
                    Connect with NGOs
                  </a>
                </div>
              </div>
            </div> <div class="mdl-cell mdl-cell--4-col">
              <div class="demo-card-square mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand" style="background:url('./images/lamb.png');background-size: 80% 80%;background-repeat: no-repeat;background-position: center;">
                  <!-- <h2 class="mdl-card__title-text">Update</h2> -->
                </div>
                
                <div class="mdl-card__actions mdl-card--border">
                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="./cattle/User/index.php">
                    Cattle Management
                  </a>
                </div>
              </div>
          </div>

          <!-- Square card -->
  
  



        </div>
      </main>
    </div>
    <script type="text/javascript">
      (function(d, m){
          var kommunicateSettings = 
              {"appId":"34cf0754cd59fd93cc6ff7f0a8fd04101","popupWidget":true,"automaticChatOpenOnNavigation":true};
          var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
          s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
          var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
          window.kommunicate = m; m._globals = kommunicateSettings;
      })(document, window.kommunicate || {});
  /* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
  </script>
  </body>
</html>