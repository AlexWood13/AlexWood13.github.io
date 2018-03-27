<?php

//admin only pages
include('adminsession.php');

//select from admin database and return data
function displayUser($conn, $login_admin) {
$sql = "SELECT username, password FROM admin
WHERE adminID = '$login_admin' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
return $row;
}

//update function
function updateUser($conn, $login_admin) {
	//escape string to stop SQL injections/stop the user from entering in their own tags and code
$myusername = mysqli_real_escape_string($conn,$_POST["username"]);
$mypassword = mysqli_real_escape_string($conn,$_POST["password"]);
	//update admin table (username and password) where the adminID matches the logged in admin
$sql = "UPDATE admin SET username = '$myusername', password = '$mypassword' WHERE adminID = '$_SESSION[login_admin]' ";

	//if sql code runs return info that the admin has been updated successfully, else return the error message.
if (mysqli_query($conn, $sql)) {
$info = "Updated Admin user successfully ";
}
else {
$info = "Error updating User: ". mysqli_error($conn);
}
return $info;
}

//update linked to submit button
if(isset($_POST["update"])){
	//connected to the updateUser function if they are logged in as an admin.
$info = updateUser($conn, $_SESSION["login_admin"]);
}

//displaying admin data
$row = displayUser($conn, $_SESSION["login_admin"]);

//closing the connection
mysqli_close($conn);
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
  <title>Admin Dashboard</title>

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
				  <li><a href="adminblog.php" class="waves-effect waves-light btn blue-grey darken-4">Blog</a></li>
             <li><a href="champions.php"class="waves-effect waves-light btn blue-grey darken-4">Champions</a></li>
             <li><a href="Tactics.php"class="waves-effect waves-light btn blue-grey darken-4">Tactics and Strategy</a></li>
			 <li><a href="adminreview.php"class="waves-effect waves-light btn blue-grey darken-4">Admin Review</a></li>
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
<br />

<div class="container center">

<!-- layout -->
<form action = "" method = "post">
<label>Username :</label><input type = "text" name = "txtusername" value = "<?php
echo $row["username"]?>" class = "box"/><br /><br />
<label>Password :</label><input type = "text" name = "txtpassword" value = "<?php
echo $row["password"]?>" class = "box"/><br /><br />


	<!-- update button -->
<button type="submit" name="update">Update</button>

<!-- end of form -->
</form>

	<!-- logout button -->
	<a href="logout.php" class="waves-effect waves-light btn blue-grey darken-4">Logout</a>

	<!-- echo the info from top -->
	<?php echo $info;
?>

	  </div>

	  <br />

 <!-- parallax image -->
  <div class="parallax-container">
    <div class="parallax"> <img class="responsive-img" src="assets/plaxImg.jpg"/></div>
  </div>

<?php
	include ("footer.php")
		?>

  </body>
</html>
