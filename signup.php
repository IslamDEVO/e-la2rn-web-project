<?php
if(isset($_POST['rePassword'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = md5($_POST['password']);

	require "dbConnection.php";
	$escaped_name = mysqli_real_escape_string($conn, $name);
	$escaped_email = mysqli_real_escape_string($conn, $email);
	$escaped_pass = mysqli_real_escape_string($conn, $pass);
	$query = "insert into signup values ('null','$escaped_name','$escaped_email','$escaped_pass')";
	$result = mysqli_query($conn,$query);
	if(! $result) {
		die("error in query");
	}else {
		header("location:login.php");
	}
}else {
	$email = $_POST['email'];
	$pass = md5($_POST['password']);
	require "dbConnection.php";
	$espaced_email = mysqli_real_escape_string($conn, $email);
	$escaped_pass = mysqli_real_escape_string($conn, $pass);
	$query = "select * from signup where email ='".$espaced_email."' and password ='".$escaped_pass."'";
	$result = mysqli_query($conn, $query);
	if($result->num_rows == 0) {
		die("error in query");
	}else {
		session_start();
		$_SESSION['email'] = $espaced_email;
		header("location:home.php");
	}
	mysqli_free_result($result);
	require "dbClose.php";
}

?>