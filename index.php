<?php
ob_start();
include_once("connect.php");
include("send_in.php");

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
	<br>
<br><br><br>
<div class="navbar navbar-default navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<a href="index" class="navbar-brand"><b>
AdNet</b></a>
<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="navbar-collapse collapse" id="navbar-main">
<ul class="nav navbar-nav">

<li><a href="contact"><i class="glyphicon glyphicon-comment"></i> &nbsp; Contact Us</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="login"><i class="glyphicon glyphicon-user"></i> &nbsp; Login</a></li>
<li><a href="register"><i class="glyphicon glyphicon-envelope"></i> &nbsp; Register</a></li> </ul>
</div>
</div>
</div>
<div class="container">
<div align="center">
<h1>Welcome to 
AdNet!</h1>
<big>Qualified Advertising</big>
<hr>
</div>

<div class="col-md-10 col-md-offset-2">
	
<div class="col-lg-10">
<div class="input-group">
<input type="email" class="form-control" placeholder="What's your email address?" id="email">
<span class="input-group-btn">
<button class="btn btn-default" type="button" onClick="redirect();">Register and Earn</button>
</span>
<script type="text/javascript">
function redirect() {

window.location = 'register.php?email='+document.getElementById("email").value;

}
</script>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<div class="row">
<div class="col-md-6">
<div class="panel panel-primary">
<div class="panel-body">
<div align="center">
	
<h3><b>Publishers:</b></h3>
<br>


<br>

AdNet is a good way to start earning money from your website. There is no requirements to publish your first adspace on your website so you can start earning but if you want to earn traffic is a must. No traffic = no money<br><br> You can either choose to earn on every ad view or ad click, it depends on what you think is best for your website. Ad clicks pays alot higher than ad views as the advertiser gets a paid visitor to their site and ad views is no garantuee that people will click their advertisement and visit their website. Start today and choose between your ad type!<br><br>
<br>
<br>
<a href="register.php" class="btn btn-danger">Register and Monetize Your Links</a>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="panel panel-primary">
<div class="panel-body">
<div align="center">
<h3><b>Advertisers:</b></h3>
<br>

<br>
<b>
AdNet</b> as an advertising platform, our aim is to bring your words in front of more people. We're dedicated to improve your ad-results, and more make sure that your campaigns perform good. We aim to deliver stunning results.
<br>
<br>
We offer two types of advertising, PPV that stands for pay per view and PPC that stands for pay per click. If you choose to pay per view you will pay a small amount of money just to get your ad shown and this is the best option if you think your ad is very attractive. If you choose to pay per click you will pay a much greater amount money then PPV when someone clicks on you advertisement and this option is good if you are unsure how your ad will perform. We will always answer if you have any questions about the ad types!
<br>
<br>
<a href="register.php" class="btn btn-danger">Register and Start Your Campaigns</a>
</div>
</div>
</div>
</div>
</div>
<div align="center">
<h4>We have 
<?php

$get_usr_amount = mysqli_query($con,"SELECT * FROM users");
echo mysqli_num_rows($get_usr_amount);

?> users using our service</h4>
</div>
<footer class="footer">
<div class="container" align="center">
<p class="text-muted">Copyrighted <b>
AdNet</b> 2015 | Coded With<font color="red" size="4"><i class="glyphicon glyphicon-heart"></i></font> by Oliver Weitman</a></p>
</div>
</footer>
</body>
</html>