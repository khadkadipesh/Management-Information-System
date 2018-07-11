<?php
include ('../officer/includes/officer_header.php');
include('../includes/mysql_connect.php');
include('../includes/functions.php');
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$query="SELECT * FROM `personal_info` JOIN student_info ON personal_info.personal_id = student_info.personal_id JOIN educational_background_info ON personal_info.personal_id = educational_background_info.personal_id JOIN ku_cat ON personal_info.personal_id = ku_cat.personal_id WHERE personal_info.personal_id='$id'";
	$sql=mysqli_query($db,$query) OR die(mysqli_error($db));
	$row=mysqli_fetch_assoc($sql);
	$dob=date_create($row['dob_ad']);
	$formated_dob=date_format($dob,"d M, Y");
}

?>
<div class="page-header"><h3>Student Information</h3></div>

<div class="panel panel-info">
      <div class="panel-heading">Basic Information</div>
      <div class="panel-body">
      	<div class="row">
			<center><div class="col-sm-6">
				<img src="<?php echo '../'. $row['photo'];  ?>" class="img-responsive img-circle" width="250" height="250"><br />
				<div class="caption">
          		<p><strong><?php echo $row['first_name'] . " " . $row['middle_name'] ." ". $row['last_name']; ?> </strong></p>
        		</div></div></center>
    		<div class="col-sm-6">
	      		<strong>Full Name:</strong> <?php echo $row['first_name'] . " " . $row['middle_name'] ." ". $row['last_name']; ?><br />
	      		<strong>Program:</strong>&nbsp;<?php  echo $row['program']; ?><br />
	      		<strong>Batch:</strong>&nbsp;<?php if($row['batch']==false){ $batch="Feb";} else{ $batch="spring";} echo $batch ." ". $row['enroll_year']; ?><br />
	      		<strong>Date of Birth:</strong>&nbsp;<?php  echo $formated_dob; ?><br />
				<strong>Address:</strong> <?php echo $row['permanent_address_town'] . " " . $row['permanent_address_district'] ." ".','. $row['permanent_address_country'];?> <br />
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

<div class="panel panel-info">
      <div class="panel-heading">Educational Information</div>
      <div class="panel-body">
      	<div class="row">
			<div class="table-responsive">
		  <table class="table table-hover text-center">
		  	<thead>
		  		<tr>
		  			<th class="text-center">Instituition</th>
		  			<th class="text-center">Level</th>
		  			<th class="text-center">Passed Year</th>
		  			<th class="text-center">Registration Number</th>
		  			<th class="text-center">Percentage</th>
		  		</tr>
		    </thead>

		    <tbody>
		    	<tr>
		    		<td><?php echo $row['s_institute']; ?></td>
		    		<td><?php echo $row['s_examination']; ?></td>
		    		<td><?php echo $row['s_exam_year']; ?></td>
		    		<td><?php echo $row['s_exam_roll']; ?></td>
		    		<td><?php echo $row['s_aggrigrate_marks']. "%"; ?></td>
		    	</tr>
		    	<tr>
		    		<td><?php echo $row['h_institute']; ?></td>
		    		<td><?php echo $row['h_examination']; ?></td>
		    		<td><?php echo $row['h_exam_year']; ?></td>
		    		<td><?php echo $row['h_exam_roll']; ?></td>
		    		<td><?php echo $row['h_aggrigrate_marks']. "%"; ?></td>
		    	</tr>
		    	
		    </tbody>
		  </table>
		</div>
    	</div>
	</div>
</div>

<div class="panel panel-info">
      <div class="panel-heading">Kathmandu University Common Admission Test - Computer Based Test (KUCAT-CBT) Information</div>
      <div class="panel-body">
      	<div class="row">
			<div class="table-responsive">
		  <table class="table table-hover text-center">
		  	<thead>
		  		<tr>
		  			<th class="text-center">KU_CAT_ID</th>
		  			<th class="text-center">Year</th>
		  			<th class="text-center">Rank</th>
		  			<th class="text-center">Score</th>
		  		</tr>
		    </thead>

		    <tbody>
		    	<tr>
		    		<td><?php echo $row['ku_cat_id'];  ?></td>
		    		<td><?php echo $row['enroll_year'];?></td>
		    		<td><?php echo $row['ku_cat_rank']; ?></td>
		    		<td><?php echo $row['ku_cat_score']; ?> 
		    	</tr>
		    </tbody>
		  </table>
		</div>
    	</div>
	</div>
</div>

<?php
include ('../includes/footer.php');
?>