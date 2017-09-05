<?php require "header.php"; ?>
<?php
	//session_start();
	if(isset($_SESSION['email'])) {?>
		<h1 >
		Your download is begin after 5 seconds, of not beginning 
		<?php echo "<a href='".$_GET['link']."' download>CLICK HERE</a>"?> Thank You
		</h1>
		
		
	
	<?php }else {
		header("location: login.php");
	}
?>
<?php require "footer.php"; ?>

<style type="text/css">
	h1 {
		width: 90%;
		margin-top: 50px;
		margin-bottom: 50px;
		text-align: center;
		color: #464642;
	}
	a {
		text-decoration: none;
		padding: 10px;

	}
</style>