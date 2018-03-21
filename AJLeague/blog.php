<?php
include("session.php");
include("header.php");

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

	<title> Blog </title>
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


      <?php
			//Query and build the display list
		// sql using a where clause and innerjoin
		 $sql = " SELECT user.Username
  		 FROM user
 		 INNER JOIN blog
   		 ON user.UserID = blog.UserID";
		//the ON clause specifies that the "id" column from both tables must match
		$query = mysqli_query($conn, $sql) or die(	mysqli_error($conn)	);
while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$username = $row["Username"];
	}


		//selecting data from the blog data table
        $sql = "SELECT * FROM blog ORDER BY date DESC";
		//checking connnection
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

		//declaring posts
        $posts = "";
        if (mysqli_num_rows($res) > 0) {
            while($row = mysqli_fetch_assoc($res)) {
                $id = $row['id'];
                $title = $row['title'];
                $content = $row['content'];
                $date = $row['date'];


			//tag checks
			$output = htmlspecialchars($content);
			$outputT = htmlspecialchars($title);

				//data format
                $posts .= "<div><h4>$username</h4><u><h2>$outputT</h2></u><p>$output</p><h5>$date</h5>
				<hr class=\"style-seven\">
				</div>";
            }
			//outputting data
            echo $posts;
        } else
		{
            echo "There are no results to display!";
        }
      ?>
	</div>
		  </div>
    <br />

	<div class="center">
    <a href="post.php" class="waves-effect waves-light btn blue-grey darken-4">Post</a>
	</div>

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
	<?php
		include("footer.php");
	?>




</body>
</html>
