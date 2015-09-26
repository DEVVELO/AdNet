<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<?php
//Db details
$host = "localhost";
$username = "root";
$password = "root";
$database = "AdNet";


$con = mysqli_connect($host,$username,$password,$database) or die("<br><br><br><center><h1>There was an error establishing connection to the database. Please contact administrator as fast as possible</h1></center>");
	
// some site settings

//Without ending /
$website_link = "http://localhost:7887/AdNet";

	
?>