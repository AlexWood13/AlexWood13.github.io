<?php
//admin session to check that they logged into an admin account.
include("adminsession.php");
//include header
include("header.php");
?>

<html>
<head>
	<title> Admin Review </title>

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

	<!-- section colour -->
	  <div class="section amber darken-2">

		  <!-- logout button + dashboard button -->
<div class="container center">
	<a href="logout.php" class="waves-effect waves-light btn blue-grey darken-4">Logout</a>
	<a href="admindashboard.php" class="waves-effect waves-light btn blue-grey darken-4">Return to Admin Dashboard</a>
</div>

	<div class="container">
	<div class="row col m12 center">


      <?php

		//selecting data from the blog data table and inner join
       $sql = "SELECT contact.issue, contact.date, admin.adminID, user.Username, user.UserID
	   FROM contact INNER JOIN admin
	   ON admin.adminID = contact.adminID
	   INNER JOIN user
	   ON user.UserID = contact.UserID
	   ORDER BY adminID DESC";

		//checking connnection
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

		//declaring posts
		 $posts = "";

		//if there is a row in the data base, return the values
        if (mysqli_num_rows($res) > 0) {
            while($row = mysqli_fetch_assoc($res)) {
			    $userid = $row['UserID'];
				$username = $row['Username'];
                $issue = $row['issue'];
                $date = $row['date'];
				$adminid = $row['adminID'];

			//tag checks/validation
			$output = htmlspecialchars($issue);

				//data format to go on page
                $posts .= "<div><h3>User: $username</h3><h3>ID: $userid</h3><p>Issue: $output</p><h5>Date: $date</h5><h5>Admin ID: $adminid</h5>
				<hr class=\"style-seven\">
				</div>";
            }
			//outputting data
            echo $posts;
        } else

		{
			//if there are no posts, echo this message.
            echo "There are no results to display!";
        }
      ?>

	</div>
		  </div>
   	    <br />
		<br />
		<br />
 		<br />
 		<br />
 		<br />
 		<br />
 		<br />
	    <br />

	<!-- section colour end -->
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
