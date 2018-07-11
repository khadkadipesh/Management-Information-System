<?php
session_start();
unset($_session['p_id']);

header('location:end.php');
?>