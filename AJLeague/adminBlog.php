<?php
//include session
include("adminsession.php");

//include header
include("header.php");
?>

<html>
<head>
	<title> Admin Blog </title>

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

		  <!-- logout button -->
<div class="container center">
	<a href="logout.php" class="waves-effect waves-light btn blue-grey darken-4">Logout</a>
</div>

	<div class="container">
	<div class="row col m12 center">


		<!-- PHP -->
      <?php

		//selecting data from the blog data table and inner join
       $sql = "SELECT blog.title, blog.content, blog.date, user.Username FROM blog
	   INNER JOIN user ON user.UserID = blog.UserID
	   ORDER BY id DESC";

		//checking connnection
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

		//declaring posts
		 $posts = "";

		//if there is a row, fetch data
        if (mysqli_num_rows($res) > 0) {
            while($row = mysqli_fetch_assoc($res)) {
				$username = $row['Username'];
                $title = $row['title'];
                $content = $row['content'];
                $date = $row['date'];

			//tag checks/validation
			$output = htmlspecialchars($content);
			$outputT = htmlspecialchars($title);

				//data format
                $posts .= "<div><h4>Username: $username</h4><u><h2>Title: $outputT</h2></u><p>$output</p><h5>Date: $date</h5>
				<hr class=\"style-seven\">
				</div>";
            }
			//outputting data
            echo $posts;
        } else

		{
			//if there is no data, display this message.
            echo "There are no results to display!";
        }
      ?>

	</div>
		  </div>
    <br />

	<!-- post button and dashboard link -->
	<div class="center">
	<a href="admindashboard.php" class="waves-effect waves-light btn blue-grey darken-4">Return to Admin Dashboard</a>
	</div>


	<!-- section colour end -->
	</div>

  <!-- parallax image -->
  <div class="parallax-container">
    <div class="parallax"> <img class="responsive-img" src="assets/plaxImg2.jpg"/></div>
  </div>

	<!-- including footer -->
	<?php
		include("footer.php");
	?>

</body>
</html>
