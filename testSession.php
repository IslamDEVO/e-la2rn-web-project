<?php
	if(isset($_GET['clear'])) {
		session_start();
		if(session_destroy())
		{
			header("Location: login.html");
		}
	}else {
		session_start();
		$_SESSION['name'] = 'ali';
	}
	echo print_r($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
<form action="" method="get">
	<input type="submit" name="clear">
</form>

</body>
</html>