<?php require "header2.php" ?>

		<div id="content">
		<br>
			<div class="contact-us">
				<form action="" method="POST">
					<fieldset>
						<legend>Contact Us</legend>
						<p>
							Fill out all required Field to send a Message. Please don't spam,Thank you!</p>
							<input type="text" name="name" placeholder="Your name" required=""><br>
							<input type="email" name="email" placeholder="Your Emaail Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="example@example.com" required="">
							<br>
							<input type="text" name="subject" placeholder="Subject" required=""><br>
							<textarea name="data" placeholder="What would you lik to tell us" rows="6" required=""></textarea><br>
							<input type="submit" name="submit" value="Send Message">
					</fieldset>
				</form>
			</div>
			<div class="contact-info">
				<center><h3>Contact information</h3></center>
				<div>
					<img src="resources/img/home.png" width="20" height="20">
					<span>Assuit University FCI</span>
				</div>
				<div>
					<img src="resources/img/email1.png" width="20" height="20">
					<span>eslammohammed881@yahoo.com</span>
				</div>
				<div>
					<img src="resources/img/phone.png" width="20" height="20">
					<span>01096044765</span>
				</div>
			</div>
			<div class="social-media">
				<center><h3>Social Media</h3></center>
				<center>
					<ul>
						<li><a href=""><img src="resources/img/face1.jpg" width="30" height="30"></a></li>
						<li><a href=""><img src="resources/img/twi1.jpg" width="30" height="30"></a></li>
						<li><a href=""><img src="resources/img/youtube2.png" width="30" height="30"></a></li>
					</ul>
				</center>
			</div>
		</div>

<?php require "footer.php" ?>

<?php

if(isset($_POST['submit'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $data = $_POST['data'];
      
      require "dbConnection.php";
      $escaped_name = mysqli_real_escape_string($conn, $name);
      $escaped_email = mysqli_real_escape_string($conn, $email);
      $escaped_subject = mysqli_real_escape_string($conn, $subject);
      $escaped_data = mysqli_real_escape_string($conn, $data);

      $query = "insert into contact values ('null','$escaped_name','$escaped_email','$escaped_subject','$escaped_data')";
      $result = mysqli_query($conn, $query);
      if(! $result) {
        echo "error in query";
      }else {
        echo "<script>alert('Than you for contact')</script>";
      }

      require "dbClose.php";
  }

?>