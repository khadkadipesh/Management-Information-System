<?php
include('../includes/mysql_connect.php');
include('../includes/functions.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {	
//common variable decleration start here
	$personal_id = test_input($_POST["personal_id"]);
	$first_name = test_input($_POST["first_name"]);
	$middle_name= test_input($_POST["middle_name"]);
	$last_name= test_input($_POST["last_name"]);
	$gender = test_input($_POST['gender']);
	$dob_ad = test_input($_POST['dob_ad']);
	$citizenship_number= test_input($_POST['citizenship_number']);
	$permanent_address_town= test_input($_POST['permanent_address_town']);
	$permanent_address_district= test_input($_POST['permanent_address_district']);
	$permanent_address_country= test_input($_POST['permanent_address_country']);
	$permanent_address_contact= test_input($_POST['permanent_address_contact']);
	$temporary_address_town= test_input($_POST['temporary_address_town']);
	$temporary_address_district= test_input($_POST['temporary_address_district']);
	$temporary_address_country= test_input($_POST['temporary_address_country']);
	$temporary_address_contact= test_input($_POST['temporary_address_contact']);
	$email = test_input($_POST["personal_contact_email"]);
	$phone = test_input($_POST["personal_contact_phone"]);
	$mobile = test_input($_POST["personal_contact_mobile"]);
	$bptown = test_input($_POST["birth_town"]);
	$bpdistrict = test_input($_POST["birth_district"]);
	$bpcountry = test_input($_POST["birth_country"]);
	$enroll_year = test_input($_POST["enroll_year"]);
	$father_name=test_input($_POST['father_first_name']).test_input($_POST['father_middle_name']).test_input($_POST['father_last_name']);
	$mother_name=test_input($_POST['mother_first_name']).test_input($_POST['mother_middle_name']).test_input($_POST['mother_last_name']);	
	$contact_person=test_input($_POST['contact_first_name']).' '.test_input($_POST['contact_middle_name']).' ' .test_input($_POST['contact_last_name']);
	$relation=test_input($_POST['contact_relation']);
	$contact_contact=test_input($_POST['contact_contact']);	

//common variable decleration end here
	

	if($_GET['type']=="std"){

			if(isset($_FILES['image'])){
				$target_dir = $_SERVER['DOCUMENT_ROOT']."/testmis/images/student/";
				$database_path = "images/student/".basename($_FILES["image"]["name"]);
				$target_file = $target_dir . basename($_FILES["image"]["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					   	
				// Check if file already exists
				if (file_exists($target_file)) {
				    echo "Sorry, file already exists.";
				    $uploadOk = 0;
				}
				// Check file size
				if ($_FILES["image"]["size"] > 9900000) {
				    echo "Sorry, your file is too large.";
				    $uploadOk = 0;
				}
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				    $uploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				    echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
				    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
				        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
				    } else {
				        echo "Sorry, there was an error uploading your file.";
				    }
				}

			}
			$path = test_input($database_path);
			$catagories="student";
			$program = test_input($_POST["program"]);
			$sql2="INSERT INTO `student_info` (`personal_id`, `program`, `enroll_year`)VALUES('$personal_id', '$program', '$enroll_year')";
			$query2=mysqli_query($db,$sql2) OR die(mysqli_error($db));
			$sql = "INSERT INTO `personal_info` (`personal_id`, `first_name`, `middle_name`, `last_name`, `gender`, `dob_ad`, `citizenship_number`, `permanent_address_town`, `permanent_address_district`, `permanent_address_country`, `permanent_address_contact`, `temporary_address_town`, `temporary_address_district`, `temporary_address_country`, `temporary_address_contact`, `personal_contact_email`, `personal_contact_phone`, `personal_contact_mobile`, `birth_town`, `birth_district`, `birth_country`, `photo`, `catagories`, `father_name`, `mother_name`,`contact_person`,`contact_person_relation`,`contact_person_contact`) VALUES ('$personal_id', '$first_name', '$middle_name', '$last_name', '$gender', '$dob_ad', '$citizenship_number', '$permanent_address_town', '$permanent_address_district', '$permanent_address_country', '$permanent_address_contact', '$temporary_address_town', '$temporary_address_district', '$temporary_address_country', '$temporary_address_contact', '$email', '$phone', '$mobile', '$bptown', '$bpdistrict', '$bpcountry', '$path', '$catagories', '$father_name', '$mother_name', '$contact_person', '$relation','$contact_contact')";
			$query=mysqli_query($db,$sql) OR die(mysqli_error($db));

			if($query && $query2){
				$_SESSION['p_id']=$personal_id;
				
				header('location:educational_info_form.php');
			}
			else
			{
			echo "sorry.! system failed to execute the query";

			}
		}


		if($_GET['type']=="staff"){
			if(isset($_FILES['image'])){
				$target_dir = $_SERVER['DOCUMENT_ROOT']."/testmis/images/staff/";
				$database_path = "images/staff/".basename($_FILES["image"]["name"]);
				$target_file = $target_dir . basename($_FILES["image"]["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					   	
				// Check if file already exists
				if (file_exists($target_file)) {
				    echo "Sorry, file already exists.";
				    $uploadOk = 0;
				}
				// Check file size
				if ($_FILES["image"]["size"] > 9900000) {
				    echo "Sorry, your file is too large.";
				    $uploadOk = 0;
				}
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				    $uploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				    echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
				    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
				        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
				    } else {
				        echo "Sorry, there was an error uploading your file.";
				    }
				}

			}
			$path = test_input($database_path);
			$designation="Non Teaching";
			if(isset($_POST['designation']))
			$designation=test_input($_POST['designation']);
			$type= test_input($_POST['type']);
			$catagories="staff";
			$sql = "INSERT INTO `personal_info` (`personal_id`, `first_name`, `middle_name`, `last_name`, `gender`, `dob_ad`, `citizenship_number`, `permanent_address_town`, `permanent_address_district`, `permanent_address_country`, `permanent_address_contact`, `temporary_address_town`, `temporary_address_district`, `temporary_address_country`, `temporary_address_contact`, `personal_contact_email`, `personal_contact_phone`, `personal_contact_mobile`, `birth_town`, `birth_district`, `birth_country`, `photo`, `catagories`, `father_name`, `mother_name`,`contact_person`,`contact_person_relation`,`contact_person_contact`) VALUES ('$personal_id', '$first_name', '$middle_name', '$last_name', '$gender', '$dob_ad', '$citizenship_number', '$permanent_address_town', '$permanent_address_district', '$permanent_address_country', '$permanent_address_contact', '$temporary_address_town', '$temporary_address_district', '$temporary_address_country', '$temporary_address_contact', '$email', '$phone', '$mobile', '$bptown', '$bpdistrict', '$bpcountry', '$path', '$catagories', '$father_name', '$mother_name', '$contact_person', '$relation','$contact_contact')";
			$query=mysqli_query($db,$sql) OR die(mysqli_error($db));
			$sql2="INSERT INTO `staff_info` (`personal_id`, `staff_type`, `designation`)VALUES('$personal_id', '$type', '$designation')";
			$query2=mysqli_query($db,$sql2) OR die(mysqli_error($db));

			if($query && $query2){
				$_SESSION['p_id']=$personal_id;
				
				header('location:main.php');
			}
			else
			{
			echo "sorry.! system failed to execute the query";

			}
		}




}

else{
	header('location:../index.php');
}

?>