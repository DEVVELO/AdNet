<?php
	
include_once("session.php");
session_start();
if(isset($_SESSION['in'])){
	if(isset($_SESSION['username'])){
		header("Location:Dashboard");
	}	
}

	
	
?>