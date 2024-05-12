<?php
session_start();
// session_destroy();
unset($_SESSION['company']);
header('location:login.php');
?>