<?php require "header2.php" ?>

		<script type="text/javascript">
			var send = 0;
			function trySend () {
				if(send == 1) {
					alert('Thank you for registration');
					return true;
				}else {
					alert('password is not matched');
					//window.history.back();
					return false;
				}
			}
			function confirmePassword (password) {
				var password = document.querySelector('.sign-up input[name="password"]');
				console.log(password.value);
				var rePassword = document.querySelector('.sign-up input[name="rePassword"]');
				console.log(rePassword.value);
				if(password.value == rePassword.value) {

					document.getElementById("confirmePassword").textContent = "";
					send = 1;
				}else {
					document.getElementById("confirmePassword").textContent = "password is not matched";4
					send = 0;
				}

			}
		</script>
		<div id="content-of-login">
			<div class="sign-up">
				<p class="title">Sign UP</p>
				<center>
					<span class="face">
						<img class="icone" src="resources/img/face1.jpg">
						<p>Facebook</p>
					</span>
					<span class="google">
						<img class="icone" src="resources/img/google.jpg">
						<p>Google+</p>
					</span>
				</center>
				<form method="post" onsubmit="return trySend();" action="signup.php">
					<div>
						<img class="icone" src="resources/img/login-person.png">
						<input type="text" name="name" placeholder="Your Name" required="">
					</div>
					<div>
						<img class="icone" src="resources/img/email1.png">
						<input type="email" name="email" placeholder="Your Emaail Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="example@example.com" required="">
					</div>
					<div>
						<img class="icone" src="resources/img/password-login.png">
						<input type="password" name="password" placeholder="Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="">
					</div>
					<div>
						<img class="icone" src="resources/img/password-login.png">
						<input type="password" name="rePassword" placeholder="Confirme Password" onchange="confirmePassword(this.value)" required="">
						<div id="confirmePassword" style="color: red;float: right;"></div>
					</div>
					<br>
					<input type="submit" value="Sign UP">
				</form>
			</div>
			<div class="login">
				<p class="title">Login</p>
				<form method="post" action="signup.php">	
					<div>
						<img class="icone" src="resources/img/email1.png">
						<input type="email" name="email" placeholder="Your Emaail Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="example@example.com" required="">
					</div>
					<div>
						<img class="icone" src="resources/img/password-login.png">
						<input type="password" name="password" placeholder="Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="">
					</div>
					<br>
					<label>
						<input type="checkbox" name="remember-me" value="rememberMy">
						Remember Me
					</label>
					<br>
					<input type="submit" name="" value="Login">
					</form>
					<span class="show">
					<center>
						Forget Password ?!!
					</center>
					<br>
					<form>
						<div class="hiden">
							<input type="email" name="email" placeholder="Your Email Address" required="">
							<br>
							<input type="submit" name="" value="Send">
						</div>
					</form>
					</span>
					<center>
					<span class="face">
						<img class="icone" src="resources/img/face1.jpg">
						<p>Facebook</p>
					</span>
					<span class="google">
						<img class="icone" src="resources/img/google.jpg">
						<p>Google+</p>
					</span>
				</center>
					
				
			</div>
		</div>

<?php require "footer.php" ?>