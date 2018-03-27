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
		<?php include ("header.php")
	   ?>
			  <?php include ("log.php")
	   ?>

      <!-- header-->
      </header>

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
                      <button class="btn waves-effect waves-light blue-grey darken-4" type="submit" name="">Submit
                    </button>
                 <a href="index.php" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
               </div>
            </form>
				<!-- echo  error message -->
				<?php echo $info
	   ?>
	</div>

	<br />
	<br />
	<br />

	 <!--  parallax image -->
  <div class="parallax-container">
    <div class="parallax"><img class="responsive-img" src="assets/plaxImg.jpg"/></div>
  </div>


	<?php
		include ("footer.php")
	?>
