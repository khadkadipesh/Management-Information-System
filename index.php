<?php
include ('./includes/header.php');
session_start();
 if(isset($_SESSION["username"]) && isset($_SESSION['type'])){
 	if($_SESSION['type']=="admin"){
 		header('location:./officer/main.php');
 	}
 	if($_SESSION['type']=="hod"){
 		header('location:./hod/');
 	}
 	}
?>
<div class="row">
	<div class="col-sm-6">
		<div class="page-header"><h3>Welcome to the system</h3></div>
		<p>This is simply a Management Information System (MIS) of Department of Computer Science and Engineering (DoCSE). It contains every information of students studying and teachers working on the department.</p>
		<p>Please login below to commence further:</p>
		<br />
		<div id="errMsg">
            <font color="red"><?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?></font>
        </div>
        <?php unset($_SESSION['errMsg']); ?>
		<form class="login" action="./controller/login_controller.php" method="POST">
        <div class="form-group">
         <label for="username"><h4>Enter the Username</h4></label>
         <input id="username" class="form-control" type="text" name="username" placeholder="Your Username" required>
        </div>

        <div class="form-group">
         <label for="password"><h4>Enter the Password</h4></label>
         <input id="password"  class="form-control" type="password" name="password" placeholder="Your Password" required>
        </div>

        <button type="submit" class="center-block btn btn-primary" value="Login">Login</button>
  	  	</form>
	</div>	
	<div class="col-sm-6">
		<div class="page-header"><h3>Quick Links</h3></div>
			<ul class="list-group">
			    <li class="list-group-item list-group-item-info"><h4><a href="http://ku.edu.np"><strong>Kathmandu University (KU)</strong></a></h4></li>
			    <li class="list-group-item list-group-item-info"><h4><a href="http://ku.edu.np/cse"><strong>Department of Computer Science and Engineering (DoCSE)</strong></a></h4></li>
			    <li class="list-group-item list-group-item-info"><h4><a href="http://mail.google.com/a/ku.edu.np"><strong>KU WebMail for staffs and students</strong></a></h4></li>
			</ul>
	</div>
</div>

<?php
include ('./includes/footer.php');
?>