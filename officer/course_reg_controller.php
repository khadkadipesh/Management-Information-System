<?php
include('../includes/mysql_connect.php');
include('../includes/functions.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {	
//common variable decleration start here
	$course_id = test_input($_POST["course_id"]);
	$course_title = test_input($_POST["course_title"]);
	$course_credit=test_input($_POST["course_credit"]);
	$query="INSERT INTO `course`(`course_id`,`course_title`,`course_credit`) VALUES('$course_id','$course_title','$course_credit') ";
	$sql = mysqli_query($db,$query)or die(mysqli_error($db));
	if($sql){
		header('location:course_list.php');
	}
	else{
			echo "sorry error occured while uploading record";
	}

}
?>