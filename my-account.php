<!DOCTYPE html>
<html>

<head>
<title></title>
<style>

.user-div {
  display:flex;
  justify-content:space-between;
  align-items:center;
}
.user-image {
  margin-top:20px;
  width:150px;
  height:150px;
  border-radius:50%;
}

</style>
</head>

<body>
<?php 

include('header.php');

	if (!isset($_SESSION['userLogin'])) {
		header('location:my-account.php');
	}
	include('db.php');
	$res = mysqli_query($con, "select * from applications where user_id = '" . $_SESSION['userLogin'] . "'");
	?>
	<div class="user-div container">
		<div>
			<?php
			$user = mysqli_query($con, "select profile from users where id = '" . $_SESSION['userLogin'] . "'");
			$userImage = mysqli_fetch_assoc($user);
			?>
			<img src="<?php echo $userImage["profile"] ?>" class="user-image" alt="Image Not Found">
		</div>
		<div class="user-options">
			<a class="btn btn-danger" href="my-details.php"> My details</a>
			<a href="upload.php" class="btn btn-info">Upload Resume</a>
			<a href="profile_pic.php" class="btn btn-warning">Upload Profile Pic</a>
			<a href="write_review.php" class="btn btn-primary">Write Review</a>
		</div>
	</div>
	<div class='container-fluid' style="margin-top: 30px; margin-bottom: 80px; min-height: 300px">
		<?php

		echo "<div style='text-align:center; font-size:29px;color:#09c'>" . "Welcome " . $_SESSION['userName'] . "</div>";
		echo "<div style='text-align:center; font-size:20px;'>" . " You applied for these jobs " . "</div>";
		while ($r = mysqli_fetch_assoc($res)) {
			echo "<br/>";
			$res2 = mysqli_query($con, "select * from jobs where id = '" . $r['job_id'] . "'");

			echo "<table  ' class='table>";
			echo "<tr class='info'>";
			echo "<td> Job Title</td>";
			echo "<td> Job Location </td>";
			echo "<td> Job Type </td>";
			echo "<td>  Skills Required</td>";
			echo "<td>  Salaray </td>";
			echo "<td>  Job Description</td>";
			echo "<td>  Applied on </td>";
			echo "<td> Company Name </td>";
			echo "<td> Job details </td>";
			echo "<td> Company Details </td>";
			echo "</tr>";

			while ($record = mysqli_fetch_assoc($res2)) {
				$res3 = mysqli_query($con, "select * from company_login where id = '" . $record['company_id'] . "'");
				$record2 = mysqli_fetch_assoc($res3);
				echo "<tr>";

				echo "<td> " .  $record["title"] . "</td>";
				echo "<td>" . $record['location'] . "</td>";
				echo "<td>" . $record["job_type"] . "</td>";
				echo "<td>" . $record["skills"] . "</td>";
				echo "<td>" . $record["salary"] . "</td>";
				echo "<td>" . $record["description"] . "</td>";
				echo "<td>" . $r["applied_on"] . "</td>";
				echo "<td>" . $record2["name"] . "</td>";

				echo "<td>" . "<a href='job-details.php?id=" . $record['id'] . "'>  Details</a>" . "</td>";
				echo "<td>" . "<a href='company-details1.php?id=" . $record2['id'] . "'>  Details</a>" . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		?>
	</div>
	
</body>

</html>