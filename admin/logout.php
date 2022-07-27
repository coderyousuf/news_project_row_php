<?php 
	include"db-con.php";

	session_start();

	session_unset();

	session_destroy();

	header("location: https://localhost/rabbi/News-Project-PHP-RAW-main/News-Project-PHP-RAW-main/")
 ?>
