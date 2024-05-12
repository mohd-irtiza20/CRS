<?php

session_start();
// session_destroy();
unset($_SESSION['userLogin']);
header('location:index.php');
?>