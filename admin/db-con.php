<?php
	$dbcon = new mysqli("localhost", "root", "", "newsapplication");

	if ($dbcon->connect_error) {
		die("Database Connection Promlem ...");
	}
 ?>