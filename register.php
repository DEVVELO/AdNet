<?php
ob_start();	
include_once("connect.php");
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="margin-bottom:0;">
	<center>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	<a href="index" class="navbar-brand"><b>
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;AdNet</b></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

		<li><a href="contact"><i class="glyphicon glyphicon-comment"></i> &nbsp; Contact Us</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		<li><a href="login"><i class="glyphicon glyphicon-user"></i> &nbsp; Login</a></li>
		<li><a href="register"><i class="glyphicon glyphicon-envelope"></i> &nbsp; Register</a></li> </ul>
      </ul>
    </div>
  </div>
</nav>
<?php
//Processing data area
function cleanInput($input) {

  $search = array(
    '@<script[^>]*?>.*?</script>@si',  
    '@<[\/\!]*?[^<>]*?>@si',           
    '@<style[^>]*?>.*?</style>@siU',   
    '@<![\s\S]*?--[ \t\n\r]*>@'       
  );

    $output = preg_replace($search, '', $input);

    return $output;
  }
if(isset($_POST['register'])){
	
	  // secure
	$email2 = mysqli_real_escape_string($con,$_POST['email']);
	$username2 = mysqli_real_escape_string($con,$_POST['username']);
	$password2 = mysqli_real_escape_string($con,$_POST['password']);
	//Secure more
	$email1 = htmlspecialchars($email2);
	$username1 = htmlspecialchars($username2);
	$password1 = htmlspecialchars($password2);
	//Run secure function
	$email = trim(cleanInput($email1));
	$username = trim(cleanInput($username1));
	$password_no_md5 = trim(cleanInput($password1));
	//make pass md5
	$password = md5($password_no_md5);
	
	//$error checks if any error exisits
	$error = 0;
	
	//Get if username exists
	$username_exists = mysqli_query($con,"SELECT * FROM users WHERE username='$username'");
	$num_username_exists = mysqli_num_rows($username_exists);
	//Get if email exists
	$email_exists = mysqli_query($con,"SELECT * FROM users WHERE email='$email'");
	$num_email_exists = mysqli_num_rows($email_exists);
	
	
	if($num_email_exists > 0){
		//Email already exisits
			echo '<div class="alert alert-dismissible alert-danger" style="width:400px;">
 
	  <strong>Error!</strong> Email already exist.
	</div>';
	$error = $error + 1;	
	}elseif($num_username_exists > 0){
		//Username already exists
		echo '<div class="alert alert-dismissible alert-danger" style="width:400px;">

  <strong>Error!</strong> Username already exist.
</div>';
$error = $error + 1;
}
	
	
	
	
	
if($error == 0){
	//Insert into database and print success message
	echo '<div class="alert alert-dismissible alert-success" style="width:400px;">
  <strong>Success!</strong> An activation email has been sent to you.
</div>';	
mysqli_query($con,"INSERT INTO users(email,username,password) VALUES('$email','$username','$password')");

//Send activation email
	$ackey = crc32($email);
$msg="Welcome! Your activation link is: " . $website_link . "/login.php?acti=".$ackey;
$ac_link = $website_link . "/login.php?acti=".$ackey;
$subject = "Activation Link\r\n";

	mail($email,$subject,$msg);
	mysqli_query($con,"UPDATE users SET activation='$ac_link' WHERE email='$email'");
	
	
}
	
	
}
	
?>

<div class="panel panel-success" style="width:800;">
  <div class="panel-heading">
    <h3 class="panel-title">Register</h3>
  </div>
  <div class="panel-body">

  <?php 
  if(isset($_GET['email'])){
	  $home_email = trim(cleanInput(mysqli_real_escape_string($con,$_GET['email'])));
	  $home_email = htmlspecialchars($home_email);
	  
 
}
  ?>

<form action="register" method="POST" autocomplete="off"/>
<div class="form-group">
  <label class="control-label" for="inputDefault">Email</label>
   <input type="text" style="display:none;">
  <input type="email" class="form-control" style="width:600;" name="email"  maxlength="200" id="inputDefault" <?php if(isset($home_email)){echo 'value="' . $home_email . '"';} ?>" required/>
</div>
<div class="form-group">
  <label class="control-label" for="inputDefault">Username</label>
   <input type="text" style="display:none;">
  <input type="text" class="form-control" style="width:600;" name="username" maxlength="50" id="inputDefault" required/>
</div>
<div class="form-group">
  <label class="control-label" for="inputDefault">Password</label>
   <input type="password" style="display:none;">
  <input type="password" class="form-control" style="width:600;" name="password" maxlength="999" id="inputDefault" required/>
</div><hr>
<input type="submit" style="width:150;" class="btn btn-success" value="Register" name="register">
  </div>
</form>
</div>

</center>
</body>
<footer class="footer" style="position:fixed; bottom:0%; width:100%;overflow: hidden;height:70;">
<div class="well">
<div align="center">
<p class="text-muted"><b>Copyright&copy; 2015 ScriptCasket</b></p>
</div>
</div>
</footer>
</html>
<?php
//Other background PHP codes
	
	
	
?>