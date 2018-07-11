<?php
include('authentication.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Department of Computer Science and Engineering (DoCSE) :: Management Information System (MIS)</title>
	<link rel="stylesheet" type="text/css" href="/testmis/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/testmis/bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="/testmis/bootstrap/css/bootstrap-social.css">
	<link rel="stylesheet" type="text/css" href="/testmis/bootstrap/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="/testmis/css/style.css">
	<link rel="stylesheet" type="text/css" href="/testmis/bootstrap/css/upload.css">
	<script src="/testmis/bootstrap/js/functions.js"></script>
	<script src="/testmis/bootstrap/js/jquery-3.2.1.js"></script>
	<script src="/testmis/bootstrap/js/bootstrap.js"></script>
	<script src="/testmis/bootstrap/js/npm.js"></script>
</head>
<body style="font-family: Raleway;">
<div class="container">
	<header class="header text-center">
		<h1>Department of Computer Science and Engineering (DoCSE)</h1>
		<h3><a href="../officer/main.php">Management Information System (MIS)</a></h3>
		<center>
		<a href="http://ku.edu.np"><img src="/testmis/images/KULogo.png" height="150px" width="150px" style="vertical-align: middle;"></a>
		</center>
	</header><br /><br />
	<nav class="navbar navbar-custom" role="navigation">
 	<div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar" role="navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/testmis/hod/">MIS</a>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav">   
	           		<li class="dropdown">
	           			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Students <span class="caret"></span></a>
	           			<ul class="dropdown-menu">
	           				<li><a href="search_list.php?std_type=ce">Computer Engineering</a></li>
	           				<li><a href="search_list.php?std_type=cs">Computer Science</a></li>
	           				
	           			</ul>
					</li>
					<li class="">
	           			<a  href="search_list.php?type=staff">Staffs </a>

					</li>

					<li>
	           			<a  href="course_list.php">Course </span></a>
	           		</li>
	        	</ul>



	        	 <ul class="nav navbar-nav navbar-right" style="margin-right: 2px;">
	        	 	<form class="navbar-form navbar-left" method="POST" action="./search_list.php">
					<div class="input-group">
					<input type="text" class="form-control" placeholder="Search" id="search" name="search">
					<div class="input-group-btn">
					<button class="btn btn-default" type="submit">
					<i class="glyphicon glyphicon-search"></i>
					</button>
					</div>
					</div>
					</form>
					<li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    			</ul>
            </div>
	</div>
	</nav>