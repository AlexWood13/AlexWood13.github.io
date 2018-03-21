
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
           <a  href="index.html" class="brand-logo"><img src="assets/logo3.jpg" width="200" height="64"></a>
           <!-- mobile menu -->
           <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
<ul class="right hide-on-med-and-down">

              <!-- buttons -->
              <ul id="nav-mobile" class="right hide-on-med-and-down">
             <li><a href="index.html" class="waves-effect waves-light btn  blue-grey darken-4">Home</a></li>
             <li><a href="Tactics.html" class="waves-effect waves-light btn  blue-grey darken-4">Tactics and Strategy</a></li>
             <li><a href="discussion.html" class="waves-effect waves-light btn  blue-grey darken-4">Discussion</a></li>
           </ul>
         </div>

         <!-- mobile menu navigation -->
         <ul class="side-nav" id="mobile-demo">
<li><a href="index.html">Home</a></li>
<li><a href="Tactics.html">Tactics and Strategy</a></li>
<li><a href="discussion.html">Discussion</a></li>
</ul>


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

 </div>

<!-- section colour -->
  <div class="section blue-grey">
    <div class="row container" >

<div class="amber-text text-darken1" align="left">  <p> Search Champions <input type="text" placeholder="username"> </p>   </div>

  <!-- card 1 Gangplank -->
  <div class="col m3">
    <!-- card colour -->
      <div class="card blue-grey darken-4" align="center">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator responsive-img" src="assets/card1.jpg"/>
        </div>
        <!-- content -->
        <div class="card-content">
          <!-- text colour + icon image -->
          <span class="card-title activator amber-text text-darken-1"> Gp <a href="gp.html" target="_blank"> <img src="assets/gpIcon.jpg" align="right"> </span>
            <!-- link text colour -->
         <div class="linktext">Champion's page</div> </a>
        </div>
        <!-- card revealed colour -->
        <div class="card-reveal blue-grey darken-4">
          <span class="card-title amber-text text-darken-1">Gangplank<i class="material-icons right red-text">close</i></span>
          <!-- change link here!!!! -->
  <a href="gp.html" target="_blank" <p class="linktext">If you would like to know more information about Gangplank, click on any of the white text to go to Gangplank's Champion page. alternatively you can click the orange text or X to close this card. </p>
        </div>
      </div>
  </div>
</a>
<!-- end of card 1 -->

  <!-- card 2 Azir -->
  <div class="col m3">
    <!-- card colour -->
      <div class="card blue-grey darken-4" align="center">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator responsive-img" src="assets/card2.jpg"/>
        </div>
        <!-- content -->
        <div class="card-content">
          <!-- text colour + icon image -->
          <span class="card-title activator amber-text text-darken-1"> Azir <a href="azir.html" target="_blank"> <img src="assets/azirIcon.jpg" align="right"> </span>
            <!-- link text colour -->
         <div class="linktext">Champion's page</div> </a>
        </div>
        <!-- card revealed colour -->
        <div class="card-reveal blue-grey darken-4">
          <span class="card-title amber-text text-darken-1">Azir<i class="material-icons right red-text">close</i></span>
          <!-- change link here!!!! -->
  <a href="azir.html" target="_blank"<p class="linktext">If you would like to know more information about Azir, click on any of the white text to go to Azir's Champion page. alternatively you can click the orange text or X to close this card.</p>
        </div>
      </div>
  </div>
</a>
<!-- end of card 2 -->

  <!-- card 3 Kayn -->
  <div class="col m3">
    <!-- card colour -->
      <div class="card blue-grey darken-4" align="center">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator responsive-img" src="assets/card3.jpg"/>
        </div>
        <!-- content -->
        <div class="card-content">
          <!-- text colour + icon image -->
          <span class="card-title activator amber-text text-darken-1"> Kayn <a href="kayn.html" target="_blank"> <img src="assets/kaynIcon.jpg" align="right"> </span>
            <!-- link text colour -->
         <div class="linktext">Champion's page</div> </a>
        </div>
        <!-- card revealed colour -->
        <div class="card-reveal blue-grey darken-4">
          <span class="card-title amber-text text-darken-1">Kayn<i class="material-icons right red-text">close</i></span>
          <!-- change link here!!!! -->
  <a href="kayn.html" target="_blank" <p class="linktext">If you would like to know more information about Kayn, click on any of the white text to go to Kayn's Champion page. alternatively you can click the orange text or X to close this card.</p>
        </div>
      </div>
  </div>
</a>
<!-- end of card 3 -->

  <!-- card 4 Zed -->
  <div class="col m3">
    <!-- card colour -->
      <div class="card blue-grey darken-4" align="center">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator responsive-img" src="assets/card4.jpg"/>
        </div>
        <!-- content -->
        <div class="card-content">
          <!-- text colour + icon image -->
          <span class="card-title activator amber-text text-darken-1"> Zed <a href="zed.html" target="_blank"> <img src="assets/zedIcon.jpg" align="right"> </span>
            <!-- link text colour -->
         <div class="linktext">Champion's page</div> </a>
        </div>
        <!-- card revealed colour -->
        <div class="card-reveal blue-grey darken-4">
          <span class="card-title amber-text text-darken-1">Zed<i class="material-icons right red-text">close</i></span>
          <!-- change link here!!!! -->
  <a href="zed.html" target="_blank" <p class="linktext">If you would like to know more information about Zed, click on any of the white text to go to Zed's Champion page. alternatively you can click the orange text or X to close this card.</p>
        </div>
      </div>
  </div>
</a>
<!-- end of card 4 -->

  <!-- card 5 Yasuo -->
  <div class="col m3">
    <!-- card colour -->
      <div class="card blue-grey darken-4" align="center">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator responsive-img" src="assets/card5.jpg"/>
        </div>
        <!-- content -->
        <div class="card-content">
          <!-- text colour + icon image -->
          <span class="card-title activator amber-text text-darken-1"> Yasuo <a href="yasuo.html" target="_blank"> <img src="assets/yasuoIcon.jpg" align="right"> </span>
            <!-- link text colour -->
         <div class="linktext">Champion's page</div> </a>
        </div>
        <!-- card revealed colour -->
        <div class="card-reveal blue-grey darken-4">
          <span class="card-title amber-text text-darken-1">Yasuo<i class="material-icons right red-text">close</i></span>
          <!-- change link here!!!! -->
  <a href="yasuo.html" target="_blank" <p class="linktext">If you would like to know more information about Yasuo, click on any of the white text to go to Yasuo's Champion page. alternatively you can click the orange text or X to close this card.</p>
        </div>
      </div>
  </div>
</a>
<!-- end of card 5 -->

  <!-- card 6 Jhin -->
  <div class="col m3">
    <!-- card colour -->
      <div class="card blue-grey darken-4" align="center">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator responsive-img" src="assets/card6.jpg"/>
        </div>
        <!-- content -->
        <div class="card-content">
          <!-- text colour + icon image -->
          <span class="card-title activator amber-text text-darken-1"> Jhin <a href="jhin.html" target="_blank"> <img src="assets/jhinIcon.jpg" align="right"> </span>
            <!-- link text colour -->
         <div class="linktext">Champion's page</div> </a>
        </div>
        <!-- card revealed colour -->
        <div class="card-reveal blue-grey darken-4">
          <span class="card-title amber-text text-darken-1">Jhin<i class="material-icons right red-text">close</i></span>
          <!-- change link here!!!! -->
  <a href="jhin.html" target="_blank" <p class="linktext">If you would like to know more information about Jhin, click on any of the white text to go to Jhin's Champion page. alternatively you can click the orange text or X to close this card.</p>
        </div>
      </div>
  </div>
</a>
<!-- end of card 6 -->

  <!-- card 7 Aurelion Sol -->
  <div class="col m3">
    <!-- card colour -->
      <div class="card blue-grey darken-4" align="center">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator responsive-img" src="assets/card7.jpg"/>
        </div>
        <!-- content -->
        <div class="card-content">
          <!-- text colour + icon image -->
          <span class="card-title activator amber-text text-darken-1"> A'Sol <a href="aSol.html" target="_blank"> <img src="assets/asolIcon.jpg" align="right"> </span>
            <!-- link text colour -->
         <div class="linktext">Champion's page</div> </a>
        </div>
        <!-- card revealed colour -->
        <div class="card-reveal blue-grey darken-4">
          <span class="card-title amber-text text-darken-1">Aurelion Sol<i class="material-icons right red-text">close</i></span>
          <!-- change link here!!!! -->
  <a href="aSol.html" target="_blank" <p class="linktext">If you would like to know more information about Aurelion Sol, click on any of the white text to go to Aurelion Sol's Champion page. alternatively you can click the orange text or X to close this card.</p>
        </div>
      </div>
  </div>
</a>
<!--  end of card 7 -->

  <!-- card 8 Camille -->
  <div class="col m3">
    <!-- card colour -->
      <div class="card blue-grey darken-4" align="center">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator responsive-img" src="assets/card8.jpg"/>
        </div>
        <!-- content -->
        <div class="card-content">
          <!-- text colour + icon image -->
          <span class="card-title activator amber-text text-darken-1"> Camille <a href="camille.html" target="_blank"> <img src="assets/camilleIcon.jpg" align="right"> </span>
            <!-- link text colour -->
         <div class="linktext">Champion's page</div> </a>
        </div>
        <!-- card revealed colour -->
        <div class="card-reveal blue-grey darken-4">
          <span class="card-title amber-text text-darken-1">Camille<i class="material-icons right red-text">close</i></span>
          <!-- change link here!!!! -->
  <a href="camille.html" target="_blank" <p class="linktext">If you would like to know more information about Camille, click on any of the white text to go to Camille's Champion page. alternatively you can click the orange text or X to close this card.</p>
        </div>
      </div>
  </div>
</a>
<!-- end of card 8 -->

<!-- row container ending tag -->
</div>

<!-- back to top link  -->
  <div class="center">
<a href="#top" class="waves-effect waves-light btn  blue-grey darken-4">Back to top</a>
 </div>

<!--section ending tag -->
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