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

<?php include("header.php")

	?>

	  <?php include("log.php")

	?>

  <!-- parallax image -->
  <div class="parallax-container">
    <div class="parallax"> <img class="responsive-img" src="assets/plaxImg.jpg"/></div>
  </div>

  <!-- parallax text  -->
  <div class="section blue-grey">
    <div class="row container">
    <div class="center"> <h2 class="header amber-text text-darken-1">League of Legends</h2>
      <p class="amber-text text-darken-1"> League of Legends is a MOBA (Multiplayer online battle arena)
      where two teams of five fight each other to destroy the opposing Nexus.</p>
    </div>
    </div>
  </div>

  <!--  parallax image -->
  <div class="parallax-container">
    <div class="parallax"><img class="responsive-img" src="assets/parallaxImg.jpg"/></div>
  </div>

  <!-- parallax text -->
<div class="section blue-grey">
    <div class="row container">
    <div class="center">  <p class="amber-text text-darken 1"> There are certain strategies and objectives which give you advantages over the enemy team and allow you to close out the game to win. </br> make sure to check out the Tactics and Strategy page for more info! </p> </div>
    </div>
</div>

  <!-- parallax image -->
  <div class="parallax-container">
    <div class="parallax"><img class="responsive-img" src="assets/plaxImg2.jpg" /></div>
  </div>

  <!-- back to top link  -->
  <div class="section blue-grey">
    <div class="center">
  <a href="#top" class="waves-effect waves-light btn  blue-grey darken-4">Back to top</a>
   </div>
 </div>

<!-- main ending -->
</main>

<?php include("footer.php")
	?>


  </body>
</html>
