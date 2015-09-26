<?php
ob_start();
session_start();
unset($_SESSION);
session_destroy();
include("send_out.php");
	
?>