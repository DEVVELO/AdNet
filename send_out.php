<?php
include_once("session.php");

if(!isset($_SESSION['in'])){
	header("Location:index");
}
if(!isset($_SESSION['username'])){
	header("Location:index");
}	
	
	
	
?>