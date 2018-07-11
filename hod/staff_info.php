<?php
include ('../hod/includes/hod_header.php');
include('../includes/mysql_connect.php');
include('../includes/functions.php');
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$query="SELECT * FROM `personal_info` JOIN staff_info ON personal_info.personal_id = staff_info.personal_id  WHERE personal_info.personal_id='$id'";
	$sql=mysqli_query($db,$query) OR die(mysqli_error($db));
	$row=mysqli_fetch_assoc($sql);
	$dob=date_create($row['dob_ad']);
	$formated_dob=date_format($dob,"d M, Y");
}

?>
<div class="page-header"><h3>Staff Information</h3></div>

<div class="panel panel-info">
      <div class="panel-heading">Basic Information</div>
      <div class="panel-body">
      	<div class="row">
			<center><div class="col-sm-6">
				<img src="<?php echo "/testmis/".$row['photo'];?>" class="img-responsive img-circle" width="250" height="250"><br />
				<div class="caption">
          		<p><strong><?php echo $row['first_name'] . " " . $row['middle_name'] ." ". $row['last_name'] .", ".$row['designation'];?></strong></p>
        		</div></div></center>
    		<div class="col-sm-6">
	      		<strong>Full Name:</strong> <?php echo $row['first_name'] . " " . $row['middle_name'] ." ". $row['last_name']; ?><br />
	      		<strong>Date of Birth:</strong>&nbsp;<?php  echo $formated_dob; ?><br />
				<strong>Address:</strong> <?php echo $row['permanent_address_town'] . ", " . $row['permanent_address_district'] .", ". $row['permanent_address_country'];?> <br />
				<strong>Father's Name:</strong> <?php echo $row['father_name'];?><br />
				<strong>Mother's Name:</strong> <?php echo $row['mother_name']; ?><br />
				<strong>Mobile Number:</strong> +977 <?php echo $row['personal_contact_mobile'];?><br />
				<strong>E-mail Address:</strong> <?php echo $row['personal_contact_email'];?><br /><br />
				<font color="red"><strong><i>Incase of emergency, contact on following details:</i></strong></font><br />
				<strong>Contact Person:</strong> <?php echo $row['contact_person'];?><br />
				<strong>Relation to Person:</strong> <?php echo $row['contact_person_relation'];?><br />
				<strong>Contact Number:</strong> +977 <?php echo $row['contact_person_contact'];?>
			</div>
    	</div>
	</div>
</div>
<?php
include ('../includes/footer.php');
?>