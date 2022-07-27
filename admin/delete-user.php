<?php 
	include "db-con.php";
  if ($_SESSION['user_role'] == 0) {
    header("location: https://localhost/rabbi/News-Project-PHP-RAW-main/News-Project-PHP-RAW-main/admin/post.php");
  }
  	if (isset($_GET['id'])) {
    	$id = $_GET['id'];
		$query = $dbcon->query("DELETE FROM `user` WHERE user_id = $id");
       if ($query) {
      	 header("location: https://localhost/rabbi/News-Project-PHP-RAW-main/News-Project-PHP-RAW-main/admin/users.php");
         } else $err_masg = "Data Not Deleted ..";
       }

       
 ?>
