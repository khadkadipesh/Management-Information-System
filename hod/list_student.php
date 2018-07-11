<?php
include ('includes/hod_header.php');
?>

<div class="page-header"><h3><?php echo "Stream Name: B.Sc. Computer Science or B.E. Computer Engineering"; ?></h3><h4>Search by Batch:</h4></div>

<div class="row">
<form method="POST" action="search_student_all.php">
	<div class="col-sm-4">
	<label>Enroll year:<font color="red">*</font></label><select class="form-control" id="enroll_year" name="enroll_year">
			<?php
			$year=date(Y);
			 for($i=$year; $i >=1991; $i--) { 
			 echo "<option>";
				echo $i;
			echo "</option>";
			}  ?>
			</select>	
	</div>
	<div class="col-sm-4">
		<label>Session:<font color="red">*</font></label>
		<select class="form-control">
			<option value="1">Regular Batch</option>
			<option value="0">Odd Batch</option>
		</select>
	</div>
	<div class="col-sm-4">
		<label>Click here to search:</label><br />
		<a href="#" class="btn btn-primary" type="submit">Search</a>
	</div>
</form>
</div>
<br /><br />

<?php
include ('includes/footer.php');
?>