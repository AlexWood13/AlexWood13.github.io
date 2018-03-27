<!-- database -->
<?php
   //including config
   include('config.php');

    //starting the session to log in to the account
   session_start();

   //setting the info variable = to nothing, so I can input data.
   $info = "";


   //send post request to check if form submission was correctly done.
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

	   //user enters username and password
      $myusername = mysqli_real_escape_string($conn,$_POST["txtusername"]);
      $mypassword = mysqli_real_escape_string($conn,$_POST["txtpassword"]);

	   //database compares username and password, if there is a result it adds 1 to the count
      $sql = "SELECT adminID FROM admin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row["active"];


      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, the count will = 1 allowing them to log in as an admin.

      if($count == 1) {
         $_SESSION["login_admin"] = $row["adminID"];

		  //redirect to the admin dashboard once logged in.
         header("location: admindashboard.php");
      }else {
		  //display error message
         $info = "Your Login Name or Password is invalid";
      }
   }
   //close the connection
   mysqli_close($conn);
?>

<!-- html -->
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
           <a href="index.php" class="brand-logo"><img src="assets/logo3.jpg" width="200" height="64"></a>

           <!-- mobile menu -->
           <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
<ul class="right hide-on-med-and-down">

              <!-- buttons -->
              <ul id="nav-mobile" class="right hide-on-med-and-down">
				  <li><a href="SignUp.php" class="waves-effect waves-light btn blue-grey darken-4">Sign Up </a></li>
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
          </div>
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

                <form class="" method="post">

                 <!-- Username -->
                  <div class="row">
                    <div class="input-field">
                      <i class="material-icons prefix">account_circle</i>
                      <input name="txtusername" type="text" class="formtext validate">
                      <label for="icon_prefix">Username</label>
                    </div>
                  </div>

                  <!-- password -->
                  <div class="row">
                    <div class="input-field">
                      <i class="material-icons prefix">security</i>
                      <input name="txtpassword" type="password" class="formtext validate">
                      <label for="icon_prefix">Password</label>
                    </div>
                  </div>

                 <!-- submit button + cancel  -->
                    <div class="modal-footer">
                      <button class="btn waves-effect waves-light blue-grey darken-4" type="submit" name="action">Submit
                    </button>
                 <a href="index.php" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
               </div>
            </form>
            </div
         </div>
       </div>

	<div class ="center">
	<?php
		echo $info;
	?>
		</div>

	<br />
	<br />
	<br />

	 <!--  parallax image -->
  <div class="parallax-container">
    <div class="parallax"><img class="responsive-img" src="assets/parallaxImg.jpg"/></div>
  </div>


	<?php
		include ("footer.php")
	?>
