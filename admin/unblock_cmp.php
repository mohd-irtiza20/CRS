<?php 
include('../db.php');

mysqli_query($con,"update company_login set status='Confirm' where id='".$_GET['id']."' ");
header("location:companies.php");

?>