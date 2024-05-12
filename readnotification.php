<?php
include('db.php');
mysqli_query($con, "update users set notification = NULL where id='" . $_GET['id'] . "' ");
header("location:notifications.php");