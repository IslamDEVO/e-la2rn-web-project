<?php
require "dbConnection.php";
$query = "select * from signup;";
$result = mysqli_query($conn,$query);
if(! $result) {
	die("error in query");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>test read from db</title>
</head>
<body>
<ul>
	<?php
		while($row=mysqli_fetch_assoc($result)) {
			echo '<li>id : '.$row['id'].' name : '.$row['name'].' email : '.$row['email'].' password : '.$row['password'].'</li>';
		}
	?>
</ul>
<?php
	mysqli_free_result($result);
?>
</body>
</html>



<?php
require "dbClose.php";
?>