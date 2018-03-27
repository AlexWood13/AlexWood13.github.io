<?php
//running config
include('config.php');
//starting the session
session_start();

//checking whether user is logged in
$user_check = $_SESSION["login_admin"];

//selecting user from user table in database
$ses_sql = mysqli_query($conn,"SELECT adminID FROM admin WHERE adminID = '$user_check' ");

//fetch the associated row if they are logged into an admin account
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

//if a user isn't logged it, it will redirect them to the sign in page
if(!isset($_SESSION["login_admin"])){
header("location:adminSignIn.php");
}
?>
