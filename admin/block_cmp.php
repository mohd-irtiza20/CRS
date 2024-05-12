<?php 
include('../db.php');

mysqli_query($con,"update company_login set status='Block' where id='".$_GET['id']."' ");
header("location:companies.php");

?>