<?php
session_start();
unset($_SESSION['p_id']);
echo $_SESSION['p_id'];
header('location:../officer/main.php');


?>