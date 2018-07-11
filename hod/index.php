<?php
include ('includes/hod_header.php');
include('../includes/mysql_connect.php');
$check_id=$_SESSION['active_id'];
$sql="SELECT username FROM users WHERE personal_id='$check_id'";
$query=mysqli_query($db,$sql)OR die(mysqli_error($db));
$data=mysqli_fetch_assoc($query);

?>

<div class="page-header"><h3>Welcome, <?php echo  $data['username']; ?></h3></div><br />
<div class="row">
	<div class="col-sm-4">
		<a href="search_list.php?std_type=cs">
		<center id="fisheye"><img src="images/computerscience.png" class="img-responsive" alt="Search Records" width="100px" height="100px"><br />
			<figcaption class="figure-caption">B.Sc. Computer Science</figcaption></center>
		</a>
	</div>
	<div class="col-sm-4">
		<a href="search_list.php?std_type=ce">
		<center id="fisheye"><img src="images/computerengineering.png" class="img-responsive" alt="Search Records" width="100px" height="100px"><br />
			<figcaption class="figure-caption">B.E. Computer Engineering</figcaption></center>
		</a>
	</div>
	<div class="col-sm-4">
		<a href="course_list.php">
		<center id="fisheye"><img src="images/viewcourse.png" class="img-responsive" alt="View Course Details" width="100px" height="100px"><br />
			<figcaption class="figure-caption">View Course Details</figcaption></center>
		</a>
	</div>
</div><br /><br />
<div class="row">
	<div class="col-sm-4">
		<a href="#search">
			<center id="fisheye"><img src="images/searchstudent.png" class="img-responsive" alt="Search Student" width="100px" height="100px"><br />
			<figcaption class="figure-caption">Search Student</figcaption></center>
    	</a>
	</div>
	<div class="col-sm-4">
		<a href="#search">
			<center id="fisheye"><img src="images/searchstaff.png" class="img-responsive" alt="Search Staff" width="100px" height="100px"><br />
			<figcaption class="figure-caption">Search Staffs</figcaption></center>
		</a>
	</div>
	<div class="col-sm-4">
		<a href="#search">
			<center id="fisheye"><img src="images/search.png" class="img-responsive" alt="Search Records" width="100px" height="100px"><br />
			<figcaption class="figure-caption">Search for a Record</figcaption></center>
		</a>
	</div>
</div>

<?php
include ('includes/footer.php');
?>