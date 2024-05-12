<?php

include('../db.php');
mysqli_query($con,"delete from category where id='".$_GET['id']."'");
header("location:job_category.php");
?>