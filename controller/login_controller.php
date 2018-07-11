<?php
require('../includes/mysql_connect.php');
include('../includes/functions.php');
session_start();
if (isset($_POST['username'])){
    $username = test_input($_REQUEST['username']);       
	$username = mysqli_real_escape_string($db,$username);
	$password = test_input($_REQUEST['password']);
	$password = mysqli_real_escape_string($db,$password);
	$query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
	$result = mysqli_query($db,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
    if($rows==1){
    	$data=mysqli_fetch_assoc($result);
	    $_SESSION['username'] = $username;
	    $_SESSION['active_id'] =$data['personal_id'];
	    $type=$data['user_type'];
	    $_SESSION['type']= $type;
	    	if($type=="admin")
            header("Location: ../officer/main.php");
         	if($type=="hod"){
         	$_SESSION['type']= $type;
         	header("location: ../hod/");
         }
	}
	else{
		$_SESSION['errMsg'] = 'Either username or password is incorrect!';
	}
	header("Location: /testmis");
}
   
?>

