<?php
include('../includes/mysql_connect.php');
include('../includes/functions.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
	$personal_id=test_input($_SESSION['p_id']);
	$s_institute = test_input($_POST["s_institute"]);
	$s_examination_board= test_input($_POST["s_examination_board"]);
	$s_exam_year= test_input($_POST["s_exam_year"]);
	$s_aggregate= test_input($_POST['s_aggregate']);
	$s_roll= test_input($_POST['s_roll']);

	$h_institute = test_input($_POST["h_institute"]);
	$h_examination_board= test_input($_POST["h_examination_board"]);
	$h_exam_year= test_input($_POST["h_exam_year"]);
	$h_aggregate= test_input($_POST['h_aggregate']);
	$h_roll= test_input($_POST['h_roll']);	

	$sql = "INSERT INTO `educational_background_info` (`personal_id`, `s_institute`, `s_examination`, `s_exam_year`, `s_aggrigrate_marks`, `s_exam_roll`, `h_institute`, `h_examination`, `h_exam_year`, `h_aggrigrate_marks`, `h_exam_roll`) VALUES ('$personal_id', '$s_institute', '$s_examination_board', '$s_exam_year', '$s_aggregate', '$s_roll',  '$h_institute', '$h_examination_board', '$h_exam_year', '$h_aggregate', '$h_roll')";
	$query=mysqli_query($db,$sql)OR die("sorry".mysqli_error($db));
	if($query){
		header('location:ku_cat_info.php');
	}
	else
	{
	echo "string";
	}
}
else{
	header('location:../index.php');
}



?>