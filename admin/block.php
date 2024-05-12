<?php 
include('../db.php');

mysqli_query($con,"update users set status='0' where id='".$_GET['id']."' ");
header("location:student-block.php");

?>