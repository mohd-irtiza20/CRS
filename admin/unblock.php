<?php 
include('../db.php');

mysqli_query($con,"update users set status='1' where id='".$_GET['id']."' ");
header("location:student-block.php");

?>