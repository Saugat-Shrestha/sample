<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- ===== Iconscout CSS ===== -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<!-- ===== CSS ===== -->
<link rel="stylesheet" href="login.css">

<!--<title>Login &amp; Registration Form</title>-->
</head>
<body>
<div class="container">
<div class="forms">
<div class="form login">
<span class="title">Events Booking</span>
<div class="title1">

<input type="radio" id="input1"
name="type" value="personal">
<label for="Choice1">Personal</label>
<input type="radio" id="input2"
name="type" value="business">
<label for="Choice2">Business</label>

</div>

<form action="#">
<div class="input-field">
<input type="text" placeholder="Enter your email" required>
<i class="uil uil-envelope icon"></i>
</div>
<div class="input-field">
<input type="password" class="password" placeholder="Enter your password" required>
<i class="uil uil-lock icon"></i>
<i class="uil uil-eye-slash showHidePw"></i>
</div>

<div class="checkbox-text">
<div class="checkbox-content">
<input type="checkbox" id="logCheck">
<label for="logCheck" class="text">Remember me</label>
</div>

<a href="#" class="text">Forgot password?</a>
</div>

<div class="input-field button">
<a href="last.html"><input type="button" value="Login"></a>
</div>
</form>

<div class="login-signup">
<span class="text">Don't have account ?
<a href="signup.html" class="text signup-link">Signup Now</a>
</span>

</div>
</div>
</div>
</div>
</body>
</html>