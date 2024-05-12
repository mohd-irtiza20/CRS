<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>


<?php  
require_once('header-stu.php');
require_once('menu.php');

?>
<div style="padding: 120px;"></div>
    <?php
      require_once "db.php";
	  $res=mysqli_query($con,"select * from reviews where user_id= '".$_SESSION['userLogin']."' ");
	  if(mysqli_num_rows($res)>0)
		{
		 echo "<div class='alert alert-success text-center' ; style='    margin-left: 400px;
		 margin-right: 200px;'> Review Already Submitted! </div>";
		}
		    
		else {
    ?>
		           
	<form method='post' style="width: 50%; margin-left: auto; margin-right: auto;">
		<div class="form-group">
			<label >Your Review</label>
			<textarea class="form-control" name="review" placeholder="Your Review"> </textarea>
		</div>

		<div class="form-group">
			<label >Rating</label>
			<select class="form-control" name="rating">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
		</div>

		<div class="form-group">
			<input type="submit" name="btn" value="Submit Review" class="btn btn-warning">
		</div>
	</form>
		

<?php
	}
	if(isset($_POST['btn']))
	{
		require_once 'db.php';
		mysqli_query($con, "insert into reviews(user_id,review,rating) values('".$_SESSION['userLogin']."','".$_POST['review']."','".$_POST['rating']."')");
		header("refresh: 0");
	} 	
?>

<div style="padding: 30px;"></div>

</body>
</html>