<?php
session_start();
if(!isset($_SESSION["username"]) && !isset($_SESSION["type"])){
	header('location:/testmis/');
 }
else{
	if($_SESSION["type"]=="admin"){
		header('location:/testmis/officer/main.php');
	}
	if($_SESSION["type"]=="student"){
		header('location:/testmis/student');
	}
	if($_SESSION["type"]=="faculty"){
		header('location:/testmis/faculty');
	}
}


?>