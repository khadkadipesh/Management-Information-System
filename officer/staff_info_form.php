<?php
include ('./includes/officer_header.php');
?>
<body>
		<form class="login" name="std_form" method="POST" enctype="multipart/form-data"  action="personal_info_form_controller.php?type=staff">
		<div class="form-group">
		<div class="page-header"><h3>Staff Info form</h3></div>		
			<i>Fields marked as '<font color="red">*</font>' are <u>mandatory to fill</u>.</i>
		<div class="page-header"><h3>Basic Info</h3></div>
		
		<div class="text-center">
		<div class="form-group">
		<img id="blah" src="/testmis/images/KULogo.png" alt="your image" > 
		<center><input class="text-center" type="file"  name="image"  onchange="readURL(this);"></center>	
		
		</div>	
		</div>

		<div class="row">
		<div class="col-xs-6"><label for="staff type">Staff Type :<font color="red">*</font></label><select class="form-control" id="type" name="type" onchange="selectHandler()"><option>Non Teaching</option><option>Teaching</option></select></div>
			<div class="col-xs-6"><label for="gender">Enroll year:<font color="red">*</font></label><select class="form-control" id="enroll_year" name="enroll_year">
			<?php
			$year=date("Y");
			 for($i=$year; $i >=1991; $i--) { 
			 echo "<option>";
				echo $i;
			echo "</option>";
			}  ?>
			</select>
		</div>
        </div<div class="clear"></div>


        


		<div class="row">
		<div class="col-xs-4"><label for="personal_id">Registration Number:<font color="red">*</font></label><input class="form-control" type="name" name="personal_id" placeholder="Enter your Registration Number" required></div>
		<div class="col-xs-4"><label for="citizenship_number">Citizenship No:<font color="red">*</font></label><input class="form-control" type="text" placeholder="Enter your Citizenship Number" name="citizenship_number" required></div>
		<div class="col-xs-4"><label for="designation">Designation (For Teaching Staffs):</label><select class="form-control" id="designation" name="designation" disabled/><option>Associate Professor</option><option>Assistant Professor</option><option>Lecturer</option><option>Teaching Assistant</option></select></div>
        </div>

        <div class="row">
        	<div class="col-xs-4"><label for="first_name">First Name:<font color="red">*</font></label><input class="form-control" type="name" name="first_name" placeholder="Enter First Name" required></div>
			<div class="col-xs-4"><label for="middle_name">Middle Name:</label><input class="form-control" type="name" name="middle_name" placeholder="Middle Name"></div>
			<div class="col-xs-4"><label for="last_name">Last Name:<font color="red">*</font></label><input class="form-control" type="name" name="last_name" placeholder="Enter Last Name" required></div>
		</div>

		<div class="row">
		<div class="col-xs-4"><label for="gender">Gender:</label><select class="form-control" id="gender" name="gender"><option>Male</option><option>Female</option><option>Not Specified</option></select></div>
		<div class="col-xs-4"><label for="dob_ad">Date of Birth (A.D.):<font color="red">*</font></label><input class="form-control" type="date" name="dob_ad" required=""></div>	
		
		</div>

		<div class="page-header"><h3>Address Info</h3></div>
		<h4>Permanent Address:</h4>
		<div class="row">
		<div class="col-xs-3"><label for="permanent_address_town">Town:<font color="red">*</font></label><input class="form-control" type="Address" name="permanent_address_town" placeholder="Enter your permanent town" required=></div>
		<div class="col-xs-3"><label for="permanent_address_district">District:<font color="red">*</font></label><input class="form-control" type="Address" name="permanent_address_district" placeholder="Enter your permanent District" required=""></div>
		<div class="col-xs-3"><label for="permanent_address_country">Country:<font color="red">*</font></label><input class="form-control" type="Address" name="permanent_address_country" placeholder="Enter your permanent Country" required></div>
		<div class="col-xs-3"><label for="permanent_address_contact">Contact:<font color="red">*</font></label><input class="form-control" type="Contact" name="permanent_address_contact" placeholder="Enter your permanent resident Contact number" required></div>
		</div>

		<h4>Temporary Address:</h4>
		<div class="row">
		<div class="col-xs-3"><label for="temporary_address_town">Town:</label><input class="form-control" type="Address" name="temporary_address_town" placeholder="Enter your Temporary Address Town"></div>
		<div class="col-xs-3"><label for="temporary_address_district">District:</label><input class="form-control" type="Address" name="temporary_address_district" placeholder="Enter your Temporary Address District"></div>
		<div class="col-xs-3"><label for="temporary_address_country">Country:</label><input class="form-control" type="Address" name="temporary_address_country" placeholder="Enter your Temporary Address Country"></div>
		<div class="col-xs-3"><label for="temporary_address_contact">Contact:</label><input class="form-control" type="Contact" name="temporary_address_contact" placeholder="Enter your Temporary Address Contact Number"></div>
		</div>

		<div class="page-header"><h3>Place Of Birth</h3></div>
		<div class="row">
		<div class="col-xs-4"><label for="birth_town">Town:<font color="red">*</font></label><input class="form-control" type="Address" name="birth_town" placeholder="Enter your Birth town" required=></div>
		<div class="col-xs-4"><label for="birth_district">District:<font color="red">*</font></label><input class="form-control" type="Address" name="birth_district" placeholder="Enter your Birth District" required=""></div>
		<div class="col-xs-4"><label for="birth_country">Country:<font color="red">*</font></label><input class="form-control" type="Address" name="birth_country" placeholder="Enter your Birth Country" required></div>
		</div>

		<div class="page-header"><h3>Contact Info</h3></div>
		<div class="row">
		<div class="col-xs-4"><label for="personal_contact_email">E-mail Address:<font color="red">*</font></label><input class="form-control" type="E-mail" name="personal_contact_email" placeholder="Enter your e-mail address" required></div>
		<div class="col-xs-4"><label for="personal_contact_phone">Phone Number:</label><input class="form-control" type="text" name="personal_contact_phone" placeholder="Enter your phone number"></div>
		<div class="col-xs-4"><label for="personal_contact_mobile">Mobile Number:<font color="red">*</font></label><input class="form-control" type="text" name="personal_contact_mobile" placeholder="Enter student Number" required></div>
		</div><br />

		<div class="page-header"><h3>Family Info</h3>
		<div class="row">
			<div class="page-header"><h3>Father Name</h3></div>
        	<div class="col-xs-4"><label for="father_first_name">First Name:<font color="red">*</font></label><input class="form-control" type="name" name="father_first_name" placeholder="Enter Father's First Name" required></div>
			<div class="col-xs-4"><label for="father_middle_name">Middle Name:</label><input class="form-control" type="name" name="father_middle_name" placeholder="Enter Father's Middle Name"></div>
			<div class="col-xs-4"><label for="father_last_name">Last Name:<font color="red">*</font></label><input class="form-control" type="name" name="father_last_name" placeholder="Enter Father's Last Name" required></div>
		</div>
			<div class="row">
			<div class="page-header"><h3>Mother Name</h3></div>
        	<div class="col-xs-4"><label for="mother_first_name">First Name:<font color="red">*</font></label><input class="form-control" type="name" name="mother_first_name" placeholder="Enter First Name" required></div>
			<div class="col-xs-4"><label for="mother_middle_name">Middle Name:</label><input class="form-control" type="name" name="mother_middle_name" placeholder="Middle Name"></div>
			<div class="col-xs-4"><label for="mother_last_name">Last Name:<font color="red">*</font></label><input class="form-control" type="name" name="mother_last_name" placeholder="Enter Last Name" required></div>
		</div>
		</div>
		<br />
		<div class="page-header"><h3>Contact Person  Info</h3>
		<div class="row">
			<div class="page-header"><h3>Contact Person Name</h3></div>
        	<div class="col-xs-4"><label for="father_first_name">First Name:<font color="red">*</font></label><input class="form-control" type="name" name="contact_first_name" placeholder="Enter Father's First Name" required></div>
			<div class="col-xs-4"><label for="father_middle_name">Middle Name:</label><input class="form-control" type="name" name="contact_middle_name" placeholder="Enter Father's Middle Name"></div>
			<div class="col-xs-4"><label for="father_last_name">Last Name:<font color="red">*</font></label><input class="form-control" type="name" name="contact_last_name" placeholder="Enter Father's Last Name" required></div>
			</div>
			<div class="row">
			<div class="col-xs-6"><label for="contact_relation"> Relation </label><select class="form-control" name="contact_relation"><option>Parent</option><option>Guardian</option></select></div>
			<div class="col-xs-6"><label for="contact_contacf">Contact Number </label><input class="form-control" type="text" name="contact_contact" placeholder="Contact Person Contact"></div>
			</div>

		</div>

		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-3"><button class="form-control btn btn-success" type="submit" name="register" value="Next">Next</button></div>
			<div class="col-sm-3"><button class="form-control btn btn-primary" type="reset" name="reset" value="Clear">Clear</button></div>
			<!-- <div class="col-sm-3"><button class="form-control btn btn-danger" type="button" value="Cancel" onclick="alert('Are you sure to Cancel the register process')" name="Cancel">Cancel</button></div> -->
		</div>
		</div>
		</form>
<?php
include ('../includes/footer.php');
?>