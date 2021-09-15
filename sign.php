<?php
require_once('Connect.php');

if(isset($_POST[ 'email' ]) && isset($_POST ['password'])){
	
	$u = $_POST ['email'];
	$p = $_POST['password'];
	$sql = "SELECT * FROM sign WHERE email ='$u' AND password = '$p'";
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result) != 0 ){
		header("location: index.php");
	}
	else{
		header("location: login.php");
	}
	
}