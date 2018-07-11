<?php
include('./includes/authentication.php');
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['type'])) {
	session_destroy();
	unset($_SESSION['username']);
	unset($_SESSION['type']);
	header("location: ../testmis/");
}


?>