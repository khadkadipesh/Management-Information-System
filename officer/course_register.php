<?php
include ('../officer/includes/officer_header.php');
?>
<body>
		<form name="std_form" method="POST" action="course_reg_controller.php">
		<div class="form-group">
						<i>Fields marked as '<font color="red">*</font>' are <u>mandatory to fill</u>.</i>
					<div class="page-header"><h3>Course Registration</h3></div>
				
	<div class="form-group row">
       <br>
  	<div class="col-xs-4">
    <label for="course_id">Course ID:</label> <font color="red">*</font>
    <input class="form-control" placeholder="Please enter course id " name="course_id" type="text">
 	</div>

  	<div class="col-xs-4">
    <label for="course_title">Course Title:</label> <font color="red">*</font>
    <input class="form-control" placeholder="Please enter course title" name="course_title"  type="text">
  	</div>

	<div class="col-xs-4">
    <label for="course_credit">Course Credit</label> <font color="red">*</font>
    <select class="form-control" name="course_credit"><option>1</option><option>2</option><option>3</option><option>4</option></select>
  	</div>
	</div>

				<div class="row"><br>
			<div class="col-sm-4"><button class="form-control btn btn-success" type="save" name="save" value="save"> Save</button></div>
			<div class="col-sm-4"><button class="form-control btn btn-primary" type="clear" name="clear" value="clear">Clear</button></div>
			<div class="col-sm-4"><button class="form-control btn btn-danger" type="cancel" name="cancel" value="cancel">Cancel</button></div>
			</div>	

<!--  -->
 

		</form>
	</div>

<?php
include ('../includes/footer.php');
?>