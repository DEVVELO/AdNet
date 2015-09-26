<?php
if(isset($_SESSION['in'])){
	include_once("connect.php");
	$uus = $_SESSION['username'];
	$get_sessions = mysqli_query($con,"SELECT * FROM users WHERE username='$uus'");
	$id = "";
	$email = "";
	$username = $_SESSION['username'];
	$in = $_SESSION['in'];
	while($loop_s = mysqli_fetch_array($get_sessions)){
		$id = $loop_s['id'];
		$email = $loop_s['email'];
		$type = $loop_s['type'];
	}
	
	
	
}	
	
	
	
	
?>