<?php
include ('../officer/includes/officer_header.php');
?>
<body>


		<form name="std_form" method="POST" action="educational_info_form_controller.php">
		<div class="form-group">
						<i>Fields marked as '<font color="red">*</font>' are <u>mandatory to fill</u>.</i>
					<div class="page-header"><h3>Educational Information</h3></div>
					<div class="page-header"><h4>School Level or equivalent</h4>

	<div class="form-group row">
  	<div class="col-xs-4">
    <label for="ex1">Institute:</label> <font color="red">*</font>
    <input class="form-control" placeholder="Student's Institute" required id="ex1" name="s_institute" type="text">
 	</div>

  	<div class="col-xs-4">
    <label for="ex2">Board:</label> <font color="red">*</font>
    <input class="form-control" placeholder="Board or control of examination" required id="ex2" name="s_examination_board" type="text">
  	</div>

	<div class="col-xs-4">
    <label for="ex3">Year:</label> <font color="red">*</font>
    <input class="form-control" placeholder="Year of examination(%)" required id="ex3" name="s_exam_year" type="text">
  	</div>
	</div>

	<div class="form-group row">
 	<div class="col-xs-4">
    <label for="ex1">Aggregate Mark(%):</label>  <font color="red">*</font>
    <input class="form-control" placeholder="Aggregate Mark(%)" required id="ex1" name="s_aggregate" type="text">
  	</div>

  	<div class="col-xs-4">
    <label for="ex2">Roll no:</label> <font color="red">*</font>
    <input class="form-control" placeholder="Examination roll number" required id="ex2" name="s_roll" type="text">
 	</div>
  	
	</div>
				
						
<div class="page-header"><h4>Higher Secondary Level or Equivalent</h4>
	<div class="form-group row">
  	<div class="col-xs-4">
    <label for="ex1">Institute</label> <font color="red">*</font>
    <input class="form-control" placeholder="Student's Institute" required id="ex1" name="h_institute" type="text">
 	</div>

  	<div class="col-xs-4">
    <label for="ex2">Board:</label> <font color="red">*</font>
    <input class="form-control" placeholder="Board or control of examination" required id="ex2" name="h_examination_board" type="text">
  	</div>

	<div class="col-xs-4">
    <label for="ex3">Exam Year:</label> <font color="red">*</font>
    <input class="form-control" placeholder="Year of examination(%)" required id="ex3" name="h_exam-year" type="text">
  	</div>
	</div>

	<div class="form-group row">
 	<div class="col-xs-4">
    <label for="ex1">Aggregate Mark(%):</label>  <font color="red">*</font>
    <input class="form-control" placeholder="Aggregate mark(%)" required id="ex1" name="h_aggregate" type="text">
  	</div>

  	<div class="col-xs-4">
    <label for="ex2">Roll no:</label> <font color="red">*</font>
    <input class="form-control" placeholder="Examination roll number" required id="ex2" name="h_roll" type="text">
 	</div>
  	</div>

 <div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-3"><button class="form-control btn btn-success" type="submit" name="register" value="Next">Next</button></div>
	<div class="col-sm-3"><button class="form-control btn btn-primary" type="reset" name="reset" value="Clear">Clear</button></div>
 </div>			

</div>
		</form>
	

<?php
include ('../includes/footer.php');
?>