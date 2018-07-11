<?php
include ('../officer/includes/officer_header.php');
include('../includes/mysql_connect.php');
include('../includes/functions.php');
$key="";
	if(isset($_POST['search']) && $_POST['search']!="") {	
	$key=test_input($_POST['search']);
	$query="SELECT * FROM `personal_info` WHERE personal_id LIKE '%$key%' || first_name LIKE '%$key%' || last_name LIKE '%$key%' || CONCAT(first_name,'',last_name) LIKE '%key%'";
	$sql=mysqli_query($db,$query) OR die(mysqli_error($db));
	$num_row=mysqli_num_rows($sql);
	}
	if(isset($_GET['type']))
	{
		$type=$_GET['type'];
		$query="SELECT * FROM `personal_info` WHERE catagories='$type'";
		$sql=mysqli_query($db,$query) OR die(mysqli_error($db));
		$num_row=mysqli_num_rows($sql);
	}
	if(isset($_POST['search']) && empty($_POST['search'])){
		$key="";
		$query="SELECT * FROM `personal_info` WHERE personal_id LIKE '$key' ";
		$sql=mysqli_query($db,$query) OR die(mysqli_error($db));
		$num_row=mysqli_num_rows($sql);
	}
	if(isset($_GET['std_type'])){
		if($_GET['std_type']=="cs"){
			$program="computer science";
		}
		else{
			$program="computer engineering";
		}
		$query="SELECT * FROM `personal_info`JOIN student_info ON personal_info.personal_id=student_info.personal_id WHERE student_info.program='$program'";
		$sql=mysqli_query($db,$query) OR die(mysqli_error($db));
		$num_row=mysqli_num_rows($sql);
	}
	

?>
<div class="page-header"><h3>Search Record</h3></div>


<div class="panel panel-info">
      <div class="panel-heading">Total <?php echo $num_row; ?> Records found  </div>
      <div class="panel-body">
      	<div class="row">
		<div class="table-responsive">
		  <table class="table table-hover text-center">
		  	<thead>
		  		<tr>
		  			<th class="text-center">Personal ID</th>
		  			<th class="text-center">Name</th>
		  			<th class="text-center">Catagory</th>
		  			<th class="text-center">Action</th>
		  		</tr>
		    </thead>

		    <tbody>
		    	<?php 
		    	while($row=mysqli_fetch_assoc($sql)){
	    	?>
		    	<tr>
		    		<td><?php echo $row['personal_id']; ?></td>
		    		<td><?php echo $row['first_name']."&nbsp;" .$row['middle_name']."&nbsp;".$row['last_name']; ?></td>
		    		<td><?php echo $row['catagories']; ?></td>
		    		<?php if($row['catagories']=="student"){?>
		    		<td><a href="std_info.php?id=<?php echo $row['personal_id'];?>" class="btn btn-info" type="button">Details</a><span> | </span><a href="std_info.php?id=<?php echo $row['personal_id'];?>" class="btn btn-warning" type="button">Update</a><span> | </span><a href="std_info.php?id=<?php echo $row['personal_id'];?>" class="btn btn-danger" type="button">Delete</a></td>
		    		<?php }elseif($row['catagories']=="staff"){?>
		    		<td><a href="staff_info.php?id=<?php echo $row['personal_id'];?>" class="btn btn-info" type="button">Details</a><span> | </span><a href="staff_update.php?id=<?php echo $row['personal_id'];?>" class="btn btn-warning" type="button">Update</a><span> | </span><a href="staff_delete.php?id=<?php echo $row['personal_id'];?>" class="btn btn-danger" type="button">Delete</a></td><?php }elseif($row['program']=="computer science"){?>
		    		<td><a href="std_info.php?id=<?php echo $row['personal_id'];?>" class="btn btn-info" type="button">Details</a><span> | </span><a href="staff_update.php?id=<?php echo $row['personal_id'];?>" class="btn btn-warning" type="button">Update</a><span> | </span><a href="staff_delete.php?id=<?php echo $row['personal_id'];?>" class="btn btn-danger" type="button">Delete</a>x</td>
		    		<?php }elseif($row['program']=="computer engineering"){?>
		    		<td><a href="staff_info.php?id=<?php echo $row['personal_id'];?>" class="btn btn-info" type="button">Details</a><span> | </span><a href="staff_update.php?id=<?php echo $row['personal_id'];?>" class="btn btn-warning" type="button">Update</a><span> | </span><a href="staff_delete.php?id=<?php echo $row['personal_id'];?>" class="btn btn-danger" type="button">Delete</a>x</td>
		    		<?php } ?>
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