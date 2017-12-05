<?php
session_start();
$connection = mysql_connect("localhost", "root", ""); // Establishing connection with server..
$db = mysql_select_db("futsal", $connection); // Selecting Database.
$username=$_POST['username']; // Fetching Values from URL.
$password= md5($_POST['password']); // Password Encryption, If you like you can also leave sha1.

// Matching user input email and password with stored email and password in database.
$result = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'");
$data = mysql_num_rows($result);
if($data==1){
	echo "Successfully Logged in...";
}else{
	echo "Email or Password is wrong...!!!!";
}
?>