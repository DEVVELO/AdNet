<?php
ob_start();	
include_once("connect.php");
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
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index">AdNet</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="contact">Contact</a></li>
        <li><a href="about">About</a></li>
	</ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="login">Login</a></li>
		<li><a href="register">Register</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php
//Processing data area
	
	
?>





</body>
<footer class="footer" style="position:flex; bottom:0%; width:100%;overflow: hidden;height:70;">
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