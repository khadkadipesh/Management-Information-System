<?php
include ('../officer/includes/officer_header.php');
?>
<body>
		<form name="std_form" method="POST" action="ku_cat_info_controller.php">
		<div class="form-group">
						<i>Fields marked as '<font color="red">*</font>' are <u>mandatory to fill</u>.</i>
					<div class="page-header"><h3>KUCAT-CBT Information</h3></div>
Kathmandu University Computer Aided Test(KUCAT-CBT) Information
					<div class="form-group row">
      <br>
  	<div class="col-xs-4">
    <label for="ex1">KUCAT-CBT ID:</label> <font color="red">*</font>
    <input class="form-control" placeholder="KUCAT-CBT ID" required id="ex1" name="ku_cat_id" type="text">
 	</div>

  	<div class="col-xs-4">
    <label for="ex2">Total Obtain Marks:</label> <font color="red">*</font>
    <input class="form-control" placeholder="Total marks obtain in KUCAT-CBT test" required id="ex2" name="ku_cat_total" type="text">
  	</div>

	<div class="col-xs-4">
    <label for="ex3">Rank:</label> <font color="red">*</font>
    <input class="form-control" placeholder="Rank" required id="ex3" name="rank" type="text">
  	</div>
	</div>

	<div class="form-group row">
  	<div class="col-xs-4">
    <label for="ex1">Physics:</label> <font color="red">*</font>
    <input class="form-control" placeholder="Marks obtain in Physics" required id="ex1" name="physics" type="text">
 	</div>

  	<div class="col-xs-4">
    <label for="ex2">Chemistry:</label> <font color="red">*</font>
    <input class="form-control" placeholder="Marks obtain in Chemistry" required id="ex2" name="chemistry" type="text">
  	</div>

	<div class="col-xs-4">
    <label for="ex3">Math:</label> <font color="red">*</font>
    <input class="form-control" placeholder="Marks obtain in Math" required id="ex3" name="math" type="text">
  	</div>
	</div>
	
	<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-3"><button class="form-control btn btn-success" type="submit" name="register" value="save">Save</button></div>
	<div class="col-sm-3"><button class="form-control btn btn-primary" type="reset" name="reset" value="Clear">Clear</button></div>
 	</div>			


 

		</form>
	</div>

<?php
include ('../includes/footer.php');
?>