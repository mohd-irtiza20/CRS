<?php
	require_once('db.php');
	echo "<form method='post' enctype='multipart/form-data'>";
    echo "<div class='form-group'>";
	echo "<input type='file' required class='form-control' name='file'>";
	echo "</div>";
	echo "<div class='form-group'>";
	echo "<input type='submit' class='btn btn-success' value='Upload Profile pic' name='btn'>";
	echo "</div>";
	echo "</form>"; 
	
	$res=mysqli_query($con, "select profile from users where id = '1'");
    $r=mysqli_fetch_assoc($res);

	echo "<img src='$r[profile]' class='img img-rounded' width='300px'>";
	if(isset($_POST['btn']))
	{
		$res1=mysqli_query($con, "SELECT profile FROM users where id = '1' ");
		$r1=mysqli_fetch_assoc($res1);
		$name=$r1['profile'];
		unlink( $name);
		$n=$_FILES['file']['name'];
		$destination='img/'. rand(). time().$n;
		$source= $_FILES['file']['tmp_name'];
    	move_uploaded_file($source, $destination);
    	mysqli_query($con, "update users set profile='$destination' where id = '1' ");
		echo "<div class='alert alert-success'>"."Profile Pic Uploaded Sucessfully"."</div>";
        header("refresh:0");
	}
?>