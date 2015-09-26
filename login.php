<?php
ob_start();	
session_start();
include_once("connect.php");
include_once("send_in.php");
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


//Activation
if(isset($_GET['acti'])){
	$key2 = $_GET['acti'];
	  // secure
	$key1 = mysqli_real_escape_string($con,$key2);
		$key = trim(cleanInput($key1));
		
		
		$activation_url = $website_link . "/login.php?acti=" . $key;
			
		mysqli_query($con,"UPDATE users SET status='1' WHERE activation='$activation_url'");
		echo '<div class="alert alert-dismissible alert-success" style="width:400px;">
	  <strong>Success!</strong> You can now login to your account.
	</div>';			
}


//Process Login


if(isset($_POST['login'])){
	//Secure and get POST data
	
	$error = 0;
		
	$username1 = trim(cleanInput(mysqli_real_escape_string($con,$_POST['username'])));
	$username = htmlspecialchars($username1);
	
	$password1 = trim(cleanInput(mysqli_real_escape_string($con,$_POST['password'])));
	$password = htmlspecialchars($password1);
	
	$password = md5($password);
	
	//Check if user exists
	$get_user_existance = mysqli_query($con,"SELECT * FROM users WHERE username='$username'");
	$num_user_existance = mysqli_num_rows($get_user_existance);
	if($num_user_existance == 0){
		echo '<div class="alert alert-dismissible alert-danger" style="width:400px;">
  <strong>Error!</strong> Username does not exist.
</div>';
$error = $error + 1;
	}
	//Check if user is banned
	$get_user_banned = mysqli_query($con,"SELECT * FROM users WHERE username='$username' AND status='2'");
	$num_user_banned = mysqli_num_rows($get_user_banned);
	if($num_user_banned == 1){
		echo '<div class="alert alert-dismissible alert-danger" style="width:400px;">
  <strong>Error!</strong> User is banned.
</div>';
$error = $error + 1;
	
	}
	//Check if user haven't clicked activatin email
	$get_user_activation = mysqli_query($con,"SELECT * FROM users WHERE username='$username' AND status='0'");
	$num_user_activation = mysqli_num_rows($get_user_activation);
	if($num_user_activation == 1){
		echo '<div class="alert alert-dismissible alert-danger" style="width:400px;">
  <strong>Error!</strong> Click on the link in the activation email.
</div>';
$error = $error + 1;
	
	}
	
	//Check if combination was right
	$get_user_correct = mysqli_query($con,"SELECT * FROM users WHERE username='$username' AND password='$password' AND status='1'");
	$num_user_correct = mysqli_num_rows($get_user_correct);
	
if($num_user_correct == 1 AND $error == 0){
	//Setting Sessions and cookies
	//Session with cookies to last longer
	
	$_SESSION['in'] = "in";
	$_SESSION['username'] = $username;
	
	
	//redirect to members panel (dashboard.php)
	
	header("Location:dashboard");


}else{
		echo '<div class="alert alert-dismissible alert-danger" style="width:400px;">
  <strong>Error!</strong> Wrong login combination.
</div>';	
	
}
	
	
	
}
?>
<div class="panel panel-warning" style="width:800;">
  <div class="panel-heading">
    <h3 class="panel-title">Login</h3>
  </div>
  <div class="panel-body">
	  
<form action="login" method="POST" autocomplete="off"/>
<div class="form-group">
  <label class="control-label" for="inputDefault">Username</label>
   
  <input type="text" class="form-control" style="width:600;" name="username" maxlength="50" id="inputDefault" required/>
</div>
<div class="form-group">
  <label class="control-label" for="inputDefault">Password</label>
   
  <input type="password" class="form-control" style="width:600;" name="password" maxlength="999" id="inputDefault" required/>
</div><hr>
<input type="submit" style="width:150;" class="btn btn-warning" value="Login" name="login">
  </div>
</form>
</div>



</center>
</body>
<footer class="footer" style="position:fixed; bottom:0%; width:100%;overflow: hidden;height:70;">
<div class="well">
<div align="center">
<p class="text-muted"><b>Copyright&copy; 2015 AdNet</b></p>
</div>
</div>
</footer>
</html>
<?php
//Other background PHP codes
	
	
	
?>