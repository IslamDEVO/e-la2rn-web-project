<?php require "header.php" ?>
<link rel="stylesheet" type="text/css" href="resources/css/book_page.css">

	<?php
		require "dbConnection.php";

		if(isset($_GET['key'])) {
			$query = "select * from books where lower(name) like '%".$_GET['key']."%'";
			$result = mysqli_query($conn, $query);
			$arr = array();
			if($result->num_rows != 0) {
				while ($row=mysqli_fetch_assoc($result)) {
					$arr[] = $row;
				}
			}else {
				echo "<h1 style='color: red'>No Result</h1>";
			}
			
		}else {
			$query = "select * from books";
			$result = mysqli_query($conn, $query);
			$arr = array();
			if($result->num_rows != 0) {
				while ($row=mysqli_fetch_assoc($result)) {
					$arr[] = $row;
				}
			}else {
				echo "<h1 style='color: red'>No Result</h1>";
			}
		}

		require "dbClose.php";
	?>

	<div id="upload">
		<form action="" method="post" enctype = "multipart/form-data">
			<center><h2>UPLOAD FILE</h2></center>
			<label>
				File name : 
				<br>
				<input type="text" name="file_name" required="">
				<br>
			</label>
			<label>
				Choose a image to this book : 
				<br>
				<input type="file" name="pc_image" required="">
			</label>
			<br>
			<label>
				Choose a file : 
				<br>
				<input type="file" name="pc_book" required="">
			</label>
			<br>
			<input type="submit" name="upload" value="upload">
		</form>
	</div>

	<div id="content">
		<?php foreach ($arr as $row) {
			?><span class="book">
				<?php echo "<img src='".$row['image']."'> <br>"?>
				<?php echo "<h3>'".$row['name']."'</h3> <br>"?>
				<?php echo "<a href='download.php?link=".$row['link']."''>Download</a> <br>"?>
			</span>
		<?php } ?>
	</div>

<?php
	if(isset($_POST['upload'])) {
		$name = $_POST['file_name'];
		$pc_image = $_FILES['pc_image']['name'];
		$pc_image_tmp_name = $_FILES['pc_image']['tmp_name'];
		$pc_link = $_FILES['pc_book']['name'];
		$pc_link_tmp_name = $_FILES['pc_book']['tmp_name'];

		move_uploaded_file($pc_image_tmp_name, "uploads/$pc_image");
		move_uploaded_file($pc_link_tmp_name, "uploads/$pc_link");

		require "dbConnection.php";
		$escaped_name = mysqli_real_escape_string($conn, $name);
		$escaped_pc_image = mysqli_real_escape_string($conn, $pc_image);
		$escaped_pc_link = mysqli_real_escape_string($conn, $pc_link);
		$query = "insert into books values ('null','$name','uploads/".$escaped_pc_link."','uploads/".$escaped_pc_image."')";
		$result = mysqli_query($conn, $query);
		if(! $result) {
			echo "<script>alert('Book uploaded sccessfully')</script>";
		}else {
			echo "<br>error in query";
		}

		require "dbClose.php";

		echo "name : ".$name."<br>";
		echo "pc_image : ".$pc_image."<br>";
		echo "pc_image_tmp_name : ".$pc_image_tmp_name."<br>";
		echo "pc_link : ".$pc_link."<br>";
		echo "pc_link_tmp_name : ".$pc_link_tmp_name."<br>";

	}
?>

<?php require "footer.php" ?>