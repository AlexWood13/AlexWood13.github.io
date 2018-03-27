<!-- database -->
<?php
   include('config.php');
	//starting session
   session_start();
	//setting info variable
   $info = "";

	  //send post request to check if form submission was correctly done.
   if($_SERVER["REQUEST_METHOD"] == "POST") {

	   // username and password sent from form, assignned to the two txt boxes on the page.
      $myusername = mysqli_real_escape_string($conn,$_POST["txtUsername"]);
      $mypassword = mysqli_real_escape_string($conn,$_POST["txtPassword"]);

	   //select data rows from user table
      $sql = "SELECT userID FROM user WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row["active"];

	   //if there is a result add 1 to count
      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, count goes up  by 1, allowing user to log in
      if($count == 1) {
         $_SESSION["login_user"] = $row["userID"];

		  //redirect to dashboard once the log in
         header("location: dashboard.php");
      }else {
		  //setting a string to $info
         $info = "Your Login Name or Password is invalid";
      }
   }
	//close connection
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

<?php include("header.php")

	?>

	  <?php include("log.php")

	?>

<!-- main-->
<main>

           <!-- div container for form  -->
            <div class="container" align="center">

            <!-- form structure -->
                <form class="" method="post">

                 <!-- Username -->
                  <div class="row">
                    <div class="input-field">
                      <i class="material-icons prefix">account_circle</i>
                      <input name="txtUsername" type="text" class="formtext validate">
                      <label for="icon_prefix">Username</label>
                    </div>
                  </div>

                  <!-- password -->
                  <div class="row">
                    <div class="input-field">
                      <i class="material-icons prefix">security</i>
                      <input name="txtPassword" type="password" class="formtext validate">
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
	</div>

      -

	 <!--  parallax image -->
  <div class="parallax-container">
    <div class="parallax"><img class="responsive-img" src="assets/parallaxImg.jpg"/></div>
  </div>

		</main>

	  <!-- footer -->
<?php include("footer.php")
	   ?>

  </body>
</html>
