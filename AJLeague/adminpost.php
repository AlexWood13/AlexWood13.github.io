<?php

	include_once("adminsession.php");

//if post button is pressed run this code.
if(isset($_POST['post'])) {
	//setting values = to table data
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $content = mysqli_real_escape_string($conn, $_POST['content']);
        $date = date('l jS \of F Y h:i:s A');
		$UserID = $_SESSION['login_user'];

		//inserting into blog table
        $sql = "INSERT INTO blog (title, content, date, UserID) VALUES ('$title', '$content', '$date', '$UserID')";

		//redirect to blog once post button is pressed
        mysqli_query($conn, $sql);
        header("Location: blog.php");
    }

?>

<html>
	<head>
		<title> Blog - Post </title>

	 <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!-- my style sheet -->
    <link href="myStylesheets.css" type="text/css" rel="stylesheet"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	    <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="main.js"></script>

</head>
<body>

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
<form action="post.php" method="post" enctype="multipart/form-data">
	<div class="container">
	<input placeholder="Title" name="title" type="text" autofocus size="48" required> <br /><br />

		<!-- content form -->
	<div class="row">

        <div class="input-field col s12">
          <textarea id="textarea1" name="content" class="materialize-textarea" required></textarea>
          <label for="textarea1">Content</label>
        </div>
      </div>

	 <br />
		<!-- Post submit button -->
		<input class="btn blue-grey darken-4" name="post" type="submit" value="post">
	</div>
	</form>


	<!-- links to blog and dashboard pages -->
	<div class="container" align="center">
		<a href="adminblog.php" class="waves-effect waves-light btn blue-grey darken-4">Return to Admin Blog</a>
		<a href="admindashboard.php" class="waves-effect waves-light btn blue-grey darken-4">Return to Admin Dashboard</a>
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
