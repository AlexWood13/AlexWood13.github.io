
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!-- my style sheet -->
    <link href="myStylesheets.css" type="text/css" rel="stylesheet"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

    <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="main.js"></script>

          <!--header -->
          <header>

            <!-- navbar -->
            <nav>
              <!-- link to top -->
            <a id="top"> </a>

            <!-- brand logo -->
              <div class="nav-wrapper blue-grey darken-2">
           <a href="index.html" class="brand-logo"><img src="assets/logo3.jpg" width="200" height="64"></a>

           <!-- mobile menu -->
           <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
<ul class="right hide-on-med-and-down">

              <!-- buttons -->
              <ul id="nav-mobile" class="right hide-on-med-and-down">
             <li><a href="index.html" class="waves-effect waves-light btn  blue-grey darken-4">Home</a></li>
             <li><a href="champions.html" class="waves-effect waves-light btn blue-grey darken-4">Champions</a></li>
             <li><a href="Tactics.html"class="waves-effect waves-light btn blue-grey darken-4">Tactics and Strategy</a></li>
             <li><a class="waves-effect waves-light btn blue-grey darken-4">Discussion</a></li>
           </ul>
         </div>
                    <!-- mobile menu -->
                   <ul class="side-nav" id="mobile-demo">
          <li><a href="index.html">Home</a></li>
          <li><a href="champions.html">Champions</a></li>
          <li><a href="Tactics.html">Tactics and Strategy</a></li>
          <li><a href="discussion.html">Discussion</a></li>
          </ul>
          </div>
                 </nav>
                  <!-- end of navar -->


      <!-- header-->
      </header>

<!-- main-->
<main>

  <!-- sign in and sign up buttons-->
  <div class ="row-container center">
   <!-- Sign in -->

   <!-- Modal Trigger -->
   <div class="section blue-grey">
   <a class="waves-effect waves-light btn modal-trigger blue-grey darken-4" href="#modal3">Sign in</a>

    <!-- Modal Structure -->

    <div id="modal3" class="modal">
      <div class="modal-content">
        <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" type="text" class="formtext validate">
              <label for="icon_prefix">Username</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">security</i>
              <input id="icon_prefix" type="text" class="formtext validate">
              <label for="icon_prefix">Password</label>
            </div>
          </div>
       </div>

         <!-- submit button + cancel  -->

            <div class="modal-footer">
              <button class="btn waves-effect waves-light blue-grey darken-4" type="submit" name="action">Submit
            </button>
         <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
       </div>
     </div>
   </div>

           <!-- sign up -->

           <!-- Modal Trigger -->
           <a class="waves-effect waves-light btn modal-trigger blue-grey darken-4" href="#modal2">Sign up</a>

            <!-- Modal Structure -->

            <div id="modal2" class="modal">
              <div class="modal-content">
                <div class="row">
                <form class="col s12">

                  <!-- Email -->
                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">email</i>
                      <input id="icon_prefix" type="text" class="formtext validate">
                      <label for="icon_prefix">Email</label>
                    </div>
                  </div>

                 <!-- Username -->
                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="icon_prefix" type="text" class="formtext validate">
                      <label for="icon_prefix">Username</label>
                    </div>
                  </div>

                  <!-- password -->
                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">security</i>
                      <input id="icon_prefix" type="text" class="formtext validate">
                      <label for="icon_prefix">Password</label>
                    </div>
                  </div>

                  <!-- new row, repeat password -->
                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">security</i>
                      <input id="icon_prefix" type="text" class="formtext validate">
                      <label for="icon_prefix">Repeat Password</label>
                    </div>

                 <!-- submit button + cancel  -->
                    </div>
                    <div class="modal-footer">
                      <button class="btn waves-effect waves-light blue-grey darken-4" type="submit" name="action">Submit
                    </button>
                 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>



  <div class="section blue-grey amber-text text-darken-1">

<div class="container" align="center" >
  <h3> Gangplank </h3>
</div>
    <!-- video  -->
  <div class="section blue-grey">
  <div class="video container">
    <video class="responsive-video" controls autoplay="true" muted loop>
    <source src="media/gp.mp4" type="video/mp4">
    <source src="media/gp.webm" type="video.webm">
    </video>
  </div>
  </div>

  <!-- GP Background image and text-->
  <div class="container">
    <div class> <img class="responsive-img" src="assets/gpBackground.jpg"  align="left"/></div>
    <div class="responsive-text align center"> <p> <u> <h4> Playing Gangplank </h4> </u> I usually play Gangplank toplane. In this lane you will be spamming your Q (parrrley) on the enemy champion to proc your kleptomancy rune, which will give you free potions and elixirs to help you through the lane phase. This will also allow you to wittle down your opponent, till you can execute them with a barrel combo. Gangplank's lane phase starts off as one of the weakest, however once you reach level 7 your lane becomes a lot easier because of the barrel tick speed. You'll probably have Sheen by then too so your lane shoving should be better. When you hit 6, make sure you're looking at the map and allies because those kills and/or assists will help you get back all the CS you missed under tower when being shoved in. </p> </div>
  </div>


  <!--carousel -->
  <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="assets/gS1.jpg" height="200px" width="250px"></a>
    <a class="carousel-item" href="#two!"><img src="assets/gS2.jpg" height="200px" width="250px"></a>
    <a class="carousel-item" href="#three!"><img src="assets/gS3.jpg" height="200px" width="250px"></a>
    <a class="carousel-item" href="#four!"><img src="assets/gS4.jpg" height="200px" width="250px"></a>
    <a class="carousel-item" href="#five!"><img src="assets/gS5.jpg" height="200px" width="250px"></a>
  </div>





  <!-- back to top link  -->
    <div class="center">
  <a href="#top" class="waves-effect waves-light btn  blue-grey darken-4">Back to top</a>
   </div>




</div>
<!-- main ending -->
</main>


<!-- footer -->
<footer>
<div class="section blue-grey darken-4">
      <footer class="page-footer blue-grey">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Created by: Alex Wood</h5>
              <p class="grey-text text-lighten-4">Find the game here: <a href="https://euw.leagueoflegends.com/en/game-info/" target="_blank"> League of Legends</p> </a>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">External Links</h5>

              <!-- External link Icons -->
              <a href="https://www.youtube.com/channel/UCvFnfTKhoV8CUyyQxaHK6uw/featured?view_as=subscriber" target="_blank"><img src="assets/youtube.jpg"></a>
              <a class="grey-text text-lighten-3" href="https://twitter.com/AjW1837284" target="_blank"><img src="assets/twitter.jpg"></a>
              <a class="grey-text text-lighten-3" href="https://www.twitch.tv/farquaadishere" target="_blank"><img src="assets/twitch.jpg"></a>
              <a class="grey-text text-lighten-3" href="https://plays.tv/u/FarquaadOgreLoad" target="_blank"><img src="assets/playsTv.png"></a>

            </div>
          </div>
        </div>

        <!-- footer copyright -->
        <div class="footer-copyright">
          <div class="container">



<!-- modal -->
<div class="right">

          <!-- Modal Trigger -->
<a class="waves-effect waves-light btn modal-trigger blue-grey darken-4" href="#modal1">Contact Us</a>

<!-- Modal Structure -->

<div id="modal1" class="modal">
  <div class="modal-content">
    <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="formtext validate">
          <label for="icon_prefix">Username</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input id="icon_prefix" type="text" class="formtext validate">
          <label for="icon_prefix">email</label>
        </div>
      </div>
      <!-- text area -->
      <div class="row">
       <form class="col s12">
         <div class="row">
           <div class="input-field col s12">
               <i class="material-icons prefix">edit</i>
               <input id="icon_prefix" type="text" class="formtext validate">
             <label for="textarea1">Issue</label>
           </div>
         </div>
       </form>
     </div>
     <!-- submit button + cancel  -->
        </div>
        <div class="modal-footer">
          <button class="btn waves-effect waves-light blue-grey darken-4" type="submit" name="action">Submit
          <i class="material-icons right">send</i>
        </button>
     <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
   </div>
 </div>
      </footer>
<!-- end of footer -->

  </body>
</html>
