<?php 
	session_start();
	unset($_SESSION['user_id']);
	unset($_SESSION['user_first_name']);
	unset($_SESSION['user_last_name']);
	unset($_SESSION['user_email']);
	unset($_SESSION['user_role']);
	echo "<script>window.location.href='../signin.php';</script>";

?>