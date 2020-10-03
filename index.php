

<!DOCTYPE html>
<html>
<head>
	<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="styl.css">
	
	<link rel = "icon" href =  
"https://th.bing.com/th/id/OIP.ifmMp7QUSqnyp1wW6LATYwHaHa?w=165&h=180&c=7&o=5&pid=1.7" 
        type = "image/x-icon"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<div id="overlay">
<div class="spinner"></div> 
</div>


<script>

var overlay = document.getElementById("overlay");

window.addEventListener('load', function(){
  overlay.style.display = 'none';
});
</script>


<div class="container" id="container">
<div class="form-container sign-up-container">

<form action="/SLF_INDIA/signup.php" method="POST">
	<h1 class="hh">SLF INDIA</h1>
	<h1>Create Account</h1>
	<div class="social-container">
		<a href="#" class="social"><i class="fa fa-facebook"></i></a>
		<a href="#" class="social"><i class="fa fa-google"></i></a>
		<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
	</div>
	<!-- <span>or use your email for registration</span> -->
	<input type="text" name="name" value="" placeholder="Name">
	<input type="email" name="email" placeholder="Email">
	<input type="phno" name="phno" value="" placeholder="Phno">
	<input id="password-field" type="password" name="password"   placeholder="Password">
	<input type="password" name="cpassword" placeholder="Repeat Password">
	<button> SignUp </button>
</form>
</div>
<div class="form-container sign-in-container">
	<form action="/SLF_INDIA/signin.php" method="POST">
		<h1 class="hh">SLF INDIA</h1>
		<h1>Sign In</h1>
		<div class="social-container">
		<a href="#" class="social"><i class="fa fa-facebook"></i></a>
		<a href="#" class="social"><i class="fa fa-google"></i></a>
		<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
	</div>
	<span>or use your account</span>
	<input type="text" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<div class="form-group small clearfix">
            &nbsp;&nbsp;<img src="captcha.php" >
            <label class="checkbox-inline">Verification Code</label>
        </div> 
		<!-- <div class="form-group"> -->
            <input type="text" name="vercode" class="form-control" placeholder="Verfication Code" required="required">
        <!-- </div>  -->
	<a href="forgott/forget_pass.php">Forgot Your Password</a>

	<button name="submit">Sign In</button>
	</form>
</div>


<?php 
session_start();
	if ($_POST["vercode"] != $_SESSION["vercode"] || $_SESSION["vercode"]=='')  {
		?>   
		 <a href="signin.php">'Incorrect Verification Code';</a> 
		
     
	    <!-- echo "<script>alert('Incorrect verification code');</script>" ; -->
   <?php
    } 
	else{
		echo 'Verification code match !' ;
	}
?>



<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>To keep connected with us please login with your personal info</p>
			<button class="ghost" id="signIn">Sign In</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Hello, Friend!</h1>
			<p>Enter your details and start journey with us</p>
			<button class="ghost" id="signUp">Sign Up</button>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>


</body>
</html>