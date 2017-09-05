<link rel="stylesheet" type="text/css" href="resources/css/Head_Foot.css">

    <div id="footer">
      <div class="footer-info">
        <div class="about-us">
          <center><h3>About Us</h3></center>
          <span class="title">Name :</span>Section 3 web<br><span class="title">Faculty :</span>Computer And Information<br><span class="title">Level :</span>Third<br><span class="title">Departement :</span>Information Technology<br><span class="title">Univesity :</span>Assuit
        </div>
        <div class="our-service">
          <center><h3>Uor Service</h3></center>
          <img src="resources/img/true.jpg" width="30" height="30"><span class="service">Web Designe</span><br>
          <img src="resources/img/true.jpg" width="30" height="30"><span class="service">Web Development</span><br>
          <img src="resources/img/true.jpg" width="30" height="30"><span class="service">Programming</span><br>
          <img src="resources/img/true.jpg" width="30" height="30"><span class="service">Network</span><br>
          <img src="resources/img/true.jpg" width="30" height="30"><span class="service">Security</span><br>
        </div>
        <div class="contact-info">
                    <center><h3>Feedback</h3></center>
                    <!--<p>COMMENT:</p>-->
                    <form action="" method="POST">
                    <textarea name="feedback" required=""></textarea>
                    <br>
                    <input type="submit" value="SEND" name="feedback_send" />
                    </form>
                </div>
      </div>
      <div class="footer-copyright">
                <center>
                    <br>
                    <span style="font-size: 20px;color: white;">Coperight &copy E-le2Rn 2017</span>
                </center>         
            </div>
    </div>
  </div>
</body>
</html>

<?php
  if(isset($_POST['feedback_send'])) {
    if(isset($_SESSION['email'])) {
      $feedback = $_POST['feedback'];
      $email = $_SESSION['email'];
      require "dbConnection.php";
      $escaped_feedback = mysqli_real_escape_string($conn, $feedback);
      $query = "insert into feedback values ('null','$email','$escaped_feedback')";
      $result = mysqli_query($conn, $query);
      if(! $result) {
        echo "error in query";
      }else {
        echo "<script>alert('Thank you for your feedback')</script>";
      }

      require "dbClose.php";
    }else {
      echo "<script>alert('Login please to sent your feadback')</script>";
    }
  }
?>