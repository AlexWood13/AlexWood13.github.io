<?php
   //local host server
   define("DB_SERVER", "localhost:3306");
   //database username
   define("DB_USERNAME", "Alex");
   //database password
   define("DB_PASSWORD", "12345");
   //database name
   define("DB_DATABASE", "AJLeague");
   //start connection through the data defined
   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	//if it doe not connect, kill the connection and display the error message.
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
else{
}
?>
