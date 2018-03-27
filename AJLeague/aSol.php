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
>

              <!-- buttons -->
              <ul id="nav-mobile" class="right hide-on-med-and-down">
             <li><a href="index.php" class="waves-effect waves-light btn  blue-grey darken-4">Home</a></li>
             <li><a href="champions.php" class="waves-effect waves-light btn blue-grey darken-4">Champions</a></li>
             <li><a href="Tactics.php"class="waves-effect waves-light btn blue-grey darken-4">Tactics and Strategy</a></li>
             <li><a class="waves-effect waves-light btn blue-grey darken-4">Discussion</a></li>
           </ul>

                    <!-- mobile menu -->
                   <ul class="side-nav" id="mobile-demo">
          <li><a href="index.html">Home</a></li>
          <li><a href="champions.php">Champions</a></li>
          <li><a href="Tactics.php">Tactics and Strategy</a></li>
          <li><a href="discussion.php">Discussion</a></li>
          </ul>
          </div>
                </nav>
                  <!-- end of navar -->

      <!-- header-->
      </header>

<!-- main-->
<main>

	<!-- login system -->
 	  <?php include("log.php")
	?>

    <!-- Modal Structure -->
    <div id="modal3" class="modal">
      <div class="modal-content">
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


         <!-- submit button + cancel  -->

            <div class="modal-footer">
              <button class="btn waves-effect waves-light blue-grey darken-4" type="submit" name="action">Submit
            </button>
         <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
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
  <h3> Aurelion Sol </h3>
</div>
    <!-- video  -->
  <div class="section blue-grey">
  <div class="video container">
    <video class="responsive-video" controls autoplay="true" muted loop>
    <source src="media/aSol.mp4" type="video/mp4">
    <source src="media/aSol.webm" type="video.webm">
    </video>
  </div>
  </div>

  <!-- Aurelion Sol Background image and text-->
  <div class="container">
    <div class> <img class="responsive-img" src="assets/aSolBackground.jpg" align="left"/></div>
    <div class="responsive-text align center"> <p> <u> <h4> Playing Aurelion Sol </h4> </u> I believe Taking Sorcery for your primary path, running phase rush, as this allows Aurelion Sol to boost his movement speed to carry on chasing and optimising his DPS (damage per second) from his passive. I would recommend taking Inspiration for your secondary path to gain biscuits of rejuvenation, this will allow Aurelion Sol to get through his mediocre lane phase. There are a wide variety of alternative runes you can take on Aurelion Sol. I like to prioritize MS (movement speed) because he flourishes in being mobile for roaming and requires the movement speed to position correctly to use his passive to its fullest potential. </p> </div>
  </div>


  <!--carousel -->
  <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="assets/aS1.jpg" height="200px" width="250px"></a>
    <a class="carousel-item" href="#two!"><img src="assets/aS2.jpg" height="200px" width="250px"></a>
    <a class="carousel-item" href="#three!"><img src="assets/aS3.jpg" height="200px" width="250px"></a>
    <a class="carousel-item" href="#four!"><img src="assets/aS4.jpg" height="200px" width="250px"></a>
    <a class="carousel-item" href="#five!"><img src="assets/aS5.jpg" height="200px" width="250px"></a>
  </div>

  <!-- back to top link  -->
    <div class="center">
  <a href="#top" class="waves-effect waves-light btn  blue-grey darken-4">Back to top</a>
   </div>
</div>
<!-- main ending -->
</main>


<!-- footer -->
<?php include ("footer.php")
	?>

  </body>
</html>
