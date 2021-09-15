<?php
require_once('Connect.php');

if(isset($_POST[ 'email' ]) && isset($_POST ['message'])){
	
	$u = $_POST ['name'];
	$p = $_POST['email'];
        $a = $_POST['phone no'];
        $b = $_POST['message'];
	$sql = "SELECT * FROM contact_info WHERE name ='$u',email='$p',phone no='$a', message = '$b'";
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result) != 0 ){
		echo 'Your message has been registered successfully.One of our agent will contact you soon.';
	}
	else{
		header("location: index.php");
	}
	
}