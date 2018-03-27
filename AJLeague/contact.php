<?php

	//session
	include_once("session.php");

//when button is pressed
if(isset($_POST['post'])) {
		//setting values = to the table data
        $issue = mysqli_real_escape_string($conn, $_POST['issue']);
        $date = date('l jS \of F Y h:i:s A');
		$UserID = $_SESSION['login_user'];
		$adminID = mysqli_real_escape_string($conn, $_POST['adminID']);

		//inserting into blog table
        $sql = "INSERT INTO contact (issue, date, UserID, adminID) VALUES ('$issue', '$date', '$UserID', '$adminID')";

	 //redirect to blog once post button is pressed
     if (mysqli_query($conn, $sql));
	$info = "Your Issue will be reviewed shortly, thank you!";

}

?>

<html>
	<head>
		<title> Contact </title>

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

	<?php
include("header.php");
?>

	<!-- logout button -->
<div class="container" align="center">
	<a href="logout.php" class="waves-effect waves-light btn blue-grey darken-4">Logout</a>
</div>

		<br />
		<br />
		<br />

		<!-- title form -->
<form action="contact.php" method="post" enctype="multipart/form-data">
	<div class="container">

		<!-- content form -->
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" name="issue" class="materialize-textarea" required></textarea>
          <label for="textarea1">Issue</label>
        </div>
      </div>

		<!--drop down-->

			<div class="row">
                        <div class="input-field col s12">
							<p> Issue: </p>
                            <select name="adminID" required>
								<option value="" disabled selected> Pick an issue </option>
                                <option value="1">Technical</option>
                                <option value="2">Account</option>
                                <option value="3">Info</option>
                            </select>
                        </div>
                    </div>

	 <br />
		<!-- Post submit button -->
		<input class="btn blue-grey darken-4" name="post" type="submit" value="post">
	</div>
	</form>

	<!-- echo info -->
	<div class="center">
		<?php echo $info; ?>
	</div>

	<!-- dashboard button -->
	<div class="container" align="center">
		<a href="dashboard.php" class="waves-effect waves-light btn blue-grey darken-4">Return to Dashboard</a>
	</div>

	<!-- parallax image -->
  <div class="parallax-container">
    <div class="parallax"> <img class="responsive-img" src="assets/plaxImg2.jpg"/></div>
  </div>

	<?php
	include("footer.php");
?>

</body>
</html>
