

<html>
<head>
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<title>SignUp</title>
<link rel="stylesheet" href="signups.php" />
</head>
<body>
<div class="form signup">
<span class="title">SignUp</span>

<form action="connect.php" method="post">

<div class="input-field">
  
    <input type="text" name="username" placeholder="Enter user name"  required>
    <i class="uil uil-user"></i>
    </div>


<div class="input-field">
<input type="text" placeholder="Enter phone number" name="phonenumber" required>
<i class="uil uil-phone"></i>
</div>

<div class="input-field">
<input type="text" placeholder="Enter email" name="email" required>
<i class="uil uil-envelope icon"></i>
</div>

<div class="input-field">
<input type="password" class="password" placeholder="Create password" name="password" required>
<i class="uil uil-lock icon"></i>
</div>

<div class="input-field">
<input type="password" class="password" placeholder="Confirm password" name="confirmpassword" required>
<i class="uil uil-lock icon"></i>
<i class="uil uil-eye-slash showHidePw"></i>
</div>

<div class="checkbox-text">
<div class="checkbox-content">
<input type="checkbox" id="termCon">
<label for="termCon" class="text">I accept all terms and conditions</label>
</div>
</div>





<div class="input-field button">
<input type="submit" value="Sign up">

</div>
</form>

<div class="login-signup">
<span class="text">Already a member?
<a href="login.php" class="text login-link">Login Now</a>


</span>
</div>




</body>

</html>