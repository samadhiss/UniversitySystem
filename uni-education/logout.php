<?php
session_start();


	session_destroy();
	unset($_SESSION['user']);
	unset($_SESSION['user_role_visitor']);
	unset($_SESSION['user_role_admin']);
	unset($_SESSION['user_role_student']);
	unset($_SESSION['user_role_staff']);
	header("Location: index.php");

?>