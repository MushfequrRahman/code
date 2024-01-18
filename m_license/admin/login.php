<?php
session_start(); // Starting Session
//$error=''; // Variable To Store Error Message
@$userid=$_POST['userid'];
@$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
if (isset($_POST['submit'])) {
//if (empty($_POST['userid']) || empty($_POST['password'])) {
//$error = "Username or Password is invalid";
}

// Define $username and $password

// To protect MySQL injection for Security purpose
$userid = stripslashes($userid);
$password = stripslashes($password);
$userid = mysql_real_escape_string($userid);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("license", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from admin where password='$password' AND userid='$userid'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$userid; // Initializing Session
header("location: dashboard.php"); // Redirecting To Other Page
} //else {
//echo $error = "Username or Password is invalid";
//}
mysql_close($connection); // Closing Connection

//}
?>