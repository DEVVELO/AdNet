<?php
ob_start();	
session_start();
include_once("connect.php");
include_once("send_out.php");
include_once("session.php");


?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="margin-bottom:0;">

	<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
	<div class="navbar-header">
	<a href="member.php" class="navbar-brand"><b>
	AdNet</b></a>
	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	</button>
	</div>
	<div class="navbar-collapse collapse" id="navbar-main">
	<ul class="nav navbar-nav">
		<li><a href="member.php"><i class="glyphicon glyphicon-home"></i> &nbsp; User Home</a></li>
	<li><a href="create_ad.php"><i class="glyphicon glyphicon-screenshot"></i> &nbsp; Advertise Here</a></li>
	<li><a href="type_change.php?type=advertiser	   "><i class="glyphicon glyphicon-signal"></i>&nbsp; Advertiser Dashboard</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
	<li><a href="withdraw.php"><i class="glyphicon glyphicon-usd"></i> Balance <span class="badge">0.00000</span></a></li>
	<li><a href="create_ad.php"><i class="glyphicon glyphicon-usd"></i> &nbsp; Create Ad</a></li>
	<li><a href="edit.php"><i class="glyphicon glyphicon-wrench"></i> &nbsp; Edit Profile</a></li>
	<li><a href="logout"><i class="glyphicon glyphicon-off"></i> &nbsp; Logout</a></li>
	</ul>
	</div>
	</div>
	</div>
	<div class="container">
	<div class="page-header"><br>
	<h1>
	AdNet <i><b>Publisher</b></i> Dashboard</h1>
	</div>
	<div class="row">
	<div class="col-lg-8 col-md-7 col-sm-6">
	<div class="panel panel-default">
	<div class="panel-body">
	<h2>Let's...</h2>
	<small>What are you planning to do?</small>
	<br>
	<br>
	<div class="btn-group btn-group-justified">
	<a href="#" class="btn btn-warning"><i class="glyphicon glyphicon-th"></i> &nbsp;Option</a>
	<a href="#" class="btn btn-warning"><i class="glyphicon glyphicon-th"></i> &nbsp;Option</a>
	<a href="contact" class="btn btn-success"><i class="glyphicon glyphicon-comment"></i> &nbsp;Support</a>
	</div>
	<br>
	<div class="btn-group btn-group-justified">
	<a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-th"></i> &nbsp;Withdraw</a>
	<a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-th"></i> &nbsp;Option</a>
	<a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-th"></i> &nbsp;Option</a>
	</div><br>

	<br><br>


	<h2>Account Misc. Details</h2>
	<small>Some things that matter!</small>
	<br>
	<br>
	<table class="table table-striped table-hover">
	<tr class="success">
	<td>Account Balance</td>
	<td>$0.00000</td>
	</tr>
	<tr class="success">
	<td>Total link clicks</td>
	<td>27</td>
	</tr>

	<tr class="success">

	<td>Status</td><td>
	You are active!</td></tr><tr class="success">
	<td>Refered by</td>
	<td>
	No one referred you</td>
	</tr>
	</table>
	<div class="panel panel-primary">
	<div class="panel-heading">
	<h3 class="panel-title">Earn more with referrals</h3>
	</div>
	<div class="panel-body">
	Did you know that you can refer members to <b>
	AdNet</b> and earn more cash. We pay upto 10% of their commision.
	<br>
	<br>

	<b>Spread this link:</b> <abbr title=""><a href="http://website.com">http://website.com/?ref=1</a></abbr>
	<br>
	<br>
	<b>Referred Users: </b> 0</div>
	</div>
	</div>
	</div>
	</div>

	<div class="col-lg-4 col-md-5 col-sm-6">
	<div class="panel panel-primary">
	<div class="panel-heading">
	<h3 class="panel-title">How to Get Started?</h3>
	</div>
	<div class="panel-body">

	AdNet helps you to get paid for interacting with advertisers. You get people click your links to earn. The clicks is worth advertisers bid per 1000 clicks. All you need is to share your links, and lay back and see the traffic roling in.
	<br>
	<br>
	Advertise here, and get huge traffic flowing towards your site. Refer users, and earn more. Or, buy a premium membership and earn a more percentage per click.
	</div>
	</div>
	</div>
	</div>
	</div><div class="well">
	<div align="center">
	<p class="text-muted">Copyrighted <b>
	AdNet</b> 2015 | Coded With<font color="red" size="4"><i class="glyphicon glyphicon-heart"></i></font> by Oliver Weitman</a></p>
	</div>
	</div>
</body>
</html>
<?php
//Other background PHP codes
	
	
	
?>