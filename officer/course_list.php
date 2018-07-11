<?php
include ('../officer/includes/officer_header.php');
include('../includes/mysql_connect.php');
include('../includes/functions.php');
$key="";
	if(!isset($_POST['search_by'])) {	
	$query="SELECT * FROM `course` JOIN course_assign ON course.course_id=course_assign.course_id JOIN personal_info ON course_assign.personal_id=personal_info.personal_id";
	$sql=mysqli_query($db,$query) OR di(mysqli_error($db));
	$num_row=mysqli_num_rows($sql);
	}
	if(isset($_GET['search_by']))
	{
		$key=$_GET['search_by'];
		$query="SELECT * FROM `course` WHERE course_title LIKE '%key%'";
		$sql=mysqli_query($db,$query) OR die(mysqli_error($db));
		$num_row=mysqli_num_rows($sql);
	}
?>
<?php
		if(isset($_GET['error'])){
			echo '<font color="red">The course is already assigned.</font>';
		}
		?>
<div class="page-header"><h3>Search Record</h3></div>


<div class="panel panel-info">
      <div class="panel-heading">Total number of records found: <?php echo $num_row; ?>
       </div>
      <div class="panel-body">
      	<div class="row">
		<div class="table-responsive">
		  <table class="table table-hover text-center">
		  	<thead>
		  		<tr>
		  			<th class="text-center">Course ID</th>
		  			<th class="text-center">Course Title</th>
		  			<th class="text-center">Credit</th>
		  			<th class="text-center">Assigned Faculty</th>
		  			<th class="text-center">Action</th>
		  		</tr>
		    </thead>

		    <tbody>
		    	<?php 
		    	while($row=mysqli_fetch_assoc($sql)){
	    	?>
		    	<tr>
		    		<td><?php echo $row['course_id']; ?></td>
		    		<td><?php echo $row['course_title']; ?></td>
		    		<td><?php echo $row['course_credit']; ?></td>
		    		<td><?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name'] ;?></td>
		    		<td><a href="#" class="btn btn-warning" type="button">Update</a><span> | </span><a href="#" class="btn btn-danger" type="button">Delete</a></td>
		    		
		    	</tr>
		    	<?php 
		    		}
		    	?>
		    </tbody>
		  </table>
		</div>
    	</div>
	</div>
</div>



<?php
include ('../includes/footer.php');
?>