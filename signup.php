<!DOCTYPE html>
<html>

<head>
    <title>Amazon Sign Up </title>
    
  <link rel="shortcut icon" href="favicon2.ico" type="image/x-icon">  
    <link rel="stylesheet" type="text/css" href="css files/signup.css">
</head>

<body>
    <div class='container'>

        <img src='Images/Home/logo5.jpg' id="logo" width="150px" height="45px">

        <div class="login">

            <div class="login_container">
                <p id='sign-in'>Create Account</p>

                <form action = "config.php" method = "post">
                    <label for="name" class='label_for'>Your name</label>
                    <input type="text"  id='input_type' name="fname">
                
                    <label for="mobile_number" class='label_for'>Mobile Number or E-Mail</label>
                    <input type="text" id='input_type' name="mobile_number">
                
                    <label for="password" class='label_for'>Password</label>
                    <input type="password" id='input_type' name="password">

                    <label for="password_again" class='label_for'>Password again</label>
                    <input type="password" id='input_type' name="password_again">

                    <button class="Sign_in_button">Continue</button>
                </form>

                <p>By creating an account or logging in, you agree to Amazon’s <span>Conditions of Use</span> and <span>Privacy Policy</span>.
                </p>
            </div>

            <div class="create_account">
                <p>Already have an account?</p>
                <button><a href = "Sign_in_page.php" target = "blank">Sign in</a></button>

            </div>
        </div>

        <div class='footer'>

            <a>Conditions of Use</a>
            <a>Privacy Notice</a>
            <a>Help</a>

            <p>©1996-2022 Amazon.com, Inc, or its affliates</p>

        </div>
    </div>
</body>

</html>