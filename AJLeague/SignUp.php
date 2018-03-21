<?php
include("config.php");
$info = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
// username and password sent from form
$mypassword = mysqli_real_escape_string($conn,$_POST["txtPassword"]);
$mypasswordConfirm = mysqli_real_escape_string($conn,$_POST["txtPasswordConfirm"]);
$myemail = mysqli_real_escape_string($conn,$_POST["txtEmail"]);
$myusername = mysqli_real_escape_string($conn,$_POST["txtUsername"]);

if ($mypassword == $mypasswordConfirm)
{
$sql = "INSERT INTO user (Email, Username, Password)
VALUES ('$myemail', '$myusername', '$mypassword')";
if (mysqli_query($conn, $sql)) {
$info = "User Created Successfully!";
} else {
$info ="Unable to Add User!";
}
}
else {
$info ="Passwords do not match!";
}
}
?>



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
  <title>Login Page</title>

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
				  <ul class="right hide-on-med-and-down"> </ul>

              <!-- buttons -->
              <ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="SignIn.php" class="waves-effect waves-light btn blue-grey darken-4">Sign In</a></li>
             <li><a href="index.php" class="waves-effect waves-light btn blue-grey darken-4">Home</a></li>
             <li><a href="champions.php"class="waves-effect waves-light btn blue-grey darken-4">Champions</a></li>
             <li><a href="Tactics.php"class="waves-effect waves-light btn blue-grey darken-4">Tactics and Strategy</a></li>
           </ul>
         </div>
                    <!-- mobile menu -->
                   <ul class="side-nav" id="mobile-demo">
          <li><a href="index.html">Home</a></li>
          <li><a href="champions.html">Champions</a></li>
          <li><a href="Tactics.html">Tactics and Strategy</a></li>
          </ul>

                 </nav>
                  <!-- end of navar -->


      <!-- header-->
      </header>

<!-- main-->
<main>
           <!-- sign up -->

           <!-- Modal Trigger -->
            <div class="container" align="center">

            <!-- Modal Structure -->

                <form class="col s12" method="POST">

                  <!-- Email -->
                  <div class="row">
                    <div class="input-field">
                      <i class="material-icons prefix">email</i>
                      <input name="txtEmail" type="email" class="formtext validate"required>
                      <label for="icon_prefix">Email</label>
                    </div>
                  </div>

                 <!-- Username -->
                  <div class="row">
                    <div class="input-field">
                      <i class="material-icons prefix">account_circle</i>
                      <input name="txtUsername" type="text" class="formtext validate" required>
                      <label for="icon_prefix">Username</label>
                    </div>
                  </div>

                  <!-- password -->
                  <div class="row">
                    <div class="input-field">
                      <i class="material-icons prefix">security</i>
                      <input name="txtPassword" type="password" class="formtext validate" required>
                      <label for="icon_prefix">Password</label>
                    </div>
                  </div>

                  <!-- new row, repeat password -->
                  <div class="row">
                    <div class="input-field">
                      <i class="material-icons prefix">security</i>
                      <input name="txtPasswordConfirm" type="password" class="formtext validate" required>
                      <label for="icon_prefix">Repeat Password</label>
                    </div>
					</div>

                 <!-- submit button + cancel  -->
                		<?php echo $info; ?>
					<br>
                      <button class="btn waves-effect waves-light blue-grey darken-4" type="submit" name="Submit">Submit</button>
					<a href="index.php" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
					</div>
				</form>
	  </main>

	 <!--  parallax image -->
  <div class="parallax-container">
    <div class="parallax"><img class="responsive-img" src="assets/parallaxImg.jpg"/></div>
  </div>
    </body>

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
