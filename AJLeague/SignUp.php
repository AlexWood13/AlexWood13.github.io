<?php
include("config.php");
$info = "";
//when they press submit
if($_SERVER["REQUEST_METHOD"] == "POST") {
// storing variables
$mypassword = mysqli_real_escape_string($conn,$_POST["txtPassword"]);
$mypasswordConfirm = mysqli_real_escape_string($conn,$_POST["txtPasswordConfirm"]);
$myemail = mysqli_real_escape_string($conn,$_POST["txtEmail"]);
$myusername = mysqli_real_escape_string($conn,$_POST["txtUsername"]);

//checking password
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
  <!-- head -->
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
	<!-- end of head -->

  <!-- body start -->
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

      <!-- end of header header-->
      </header>

	<!-- start of main-->
	<main>

				<!-- div container for form  -->
            <div class="container" align="center">

           		 <!-- form structure -->
                <form class="" method="post">

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

                 <!-- submit button + cancel and echo info  -->
                		<?php echo $info; ?>
					<br>
                      <button class="btn waves-effect waves-light blue-grey darken-4" type="submit" name="Submit">Submit</button>
					<a href="index.php" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>

				<!-- end of form  -->
				</form>
	</div>
	  </main>

	 <!--  parallax image -->
  <div class="parallax-container">
    <div class="parallax"><img class="responsive-img" src="assets/parallaxImg.jpg"/></div>
  </div>

	  <?php
			include ("footer.php")
		?>

    </body>
</html>
