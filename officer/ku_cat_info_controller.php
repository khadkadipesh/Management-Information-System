<?php
session_start();
include('../includes/mysql_connect.php');
include('../includes/functions.php');
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$ku_cat_id = test_input($_POST["ku_cat_id"]);
	$ku_cat_total = test_input($_POST["ku_cat_total"]);
	$ku_cat_rank = test_input($_POST["rank"]);
	$ku_cat_physics = test_input($_POST["physics"]);
	$ku_cat_chemistry = test_input($_POST["chemistry"]);
	$ku_cat_math = test_input($_POST["math"]);
	$personal_id = test_input($_SESSION["p_id"]);
	$sql = "INSERT INTO `ku_cat` (`personal_id`, `ku_cat_id`, `ku_cat_score`, `ku_cat_rank`, `physics`, `chemistry`, `math`) VALUES ('$personal_id', '$ku_cat_id', '$ku_cat_total', '$ku_cat_rank', '$ku_cat_physics', '$ku_cat_chemistry',  '$ku_cat_math')";
	$query=mysqli_query($db,$sql)OR die("sorry".mysqli_error($db));
	if($query){
		header('location:register_final.php');
	}
	else
	{
	echo "sorry the rigistration process is not completed";
	}



}




?>