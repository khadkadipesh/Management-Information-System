<?php
include('../includes/mysql_connect.php');
include('../includes/functions.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {	
	$course_id = test_input($_POST["course_id"]);
	$semester = test_input($_POST["semester"]);
	$program = test_input($_POST['program']);
	$faculty= $_POST["faculty_id"];
	$query="INSERT INTO `course_assign`(`course_id`,`semester`, `program`, `personal_id`) VALUES('$course_id','$semester','$program','$faculty')";
	$sql = mysqli_query($db,$query);
	if($sql){
		header('location:course_list.php');
	}
	else{

			header('location:course_list.php?error=occured');
	}

}
?>