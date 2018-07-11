<?php
include ('../officer/includes/officer_header.php');
include('../includes/mysql_connect.php');
include('../includes/functions.php');

		$query="SELECT * FROM `course`";
		$sql=mysqli_query($db,$query) OR die(mysqli_error($db));
		$query2="SELECT * FROM `staff_info`";
		$sql2=mysqli_query($db,$query2);
		$row =  mysqli_num_rows($sql);

		
		?>
		<form name="std_form" method="POST" action="course_assign_controller.php">
		<div class="form-group">
		<i>Fields marked as '<font color="red">*</font>' are <u>mandatory to fill</u>.</i>
		<div class="page-header"><h3>Course Registration</h3></div>
				
	<div class="form-group row">
       <br>
  	<div class="col-xs-2">
    <label for="course_id">Course ID:</label> <font color="red">*</font>
    <select class="form-control" name="course_id">
    <?php while ($fetch=mysqli_fetch_assoc($sql)) {  ?>
    
		<option><?php echo $fetch['course_id']; ?></option>

	<?php  }?>
	</select> 
 	</div>



	<div class="col-xs-3">
    <label for="semester">Semester</label> <font color="red">*</font>
    <select class="form-control" name="semester"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option></select>
</div>
    	<div class="col-xs-3">
    		    <label for="program">Program</label> <font color="red">*</font>

    <select name="program" class="form-control"><option>Computer Science</option> <option>Computer Engineering</option> </select>
  	</div>
  	  <div class="col-xs-4">
    <label for="faculty_id">Faculty ID:</label> <font color="red">*</font>
    <select class="form-control" name="faculty_id">
    <?php while ($fetch2=mysqli_fetch_assoc($sql2)) {  ?>
    
		<option><?php echo htmlspecialchars($fetch2['personal_id']); ?></option>

	<?php  }?>
	</select> 
 	</div>

  </div>

			<div class="row"><br>
			<div class="col-sm-6"><button class="form-control btn btn-success" type="save" name="save" value="save"> Assign</button></div>
			<div class="col-sm-6"><button class="form-control btn btn-danger" type="cancel" name="cancel" value="cancel">Cancel</button></div>
			</div>	

<!--  -->
 

		</form>
	</div>

<?php
include ('../includes/footer.php');
?>