<?php

/*$host = "localhost";
$user = "root";
$password = "";
$database = "elearn";*/

$host = "sql10.freemysqlhosting.net";
$user = "sql10191221";
$password = "HuRInEM2ck";
$database = "sql10191221";

$conn = mysqli_connect($host,$user,$password,$database);
if(mysqli_connect_errno()) {
	die("error in connection to database: ".mysqli_connect_error());
}else {
	//echo "database connection is done sccessfully";
}
?>
