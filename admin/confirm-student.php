<?php

include('../db.php');
mysqli_query($con, "update users set notification = 'You can now use your account' where id='" . $_GET['id'] . "' ");
mysqli_query($con, "update users set status = 1 where id='" . $_GET['id'] . "' ");
header("location:students.php");