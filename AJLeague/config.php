<?php

   define("DB_SERVER", "localhost:3306");
   define("DB_USERNAME", "Alex");
   define("DB_PASSWORD", "12345");
   define("DB_DATABASE", "AJLeague");
   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
else{
}
?>
