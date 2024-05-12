<!DOCTYPE html>
<html>

<head>
    <title></title>

</head>

<body>
    <?php
	include 'menu.php';
	include 'header.php';
	?>
    <div style="background-color: white; width:1030px;height: 1000px;margin-left: 230px;">
        <div style=" padding:90px;">
            <h1
                style="text-align: center; margin-top: 70px;color: #333; font-weight: 900;font-family: 'Lobster', cursive;">
                Job Industries </h1>

            <a href="add-job-cat.php" class="btn btn-info">Add New Job Industry</a>
            <div>
                <h1 style='padding: 10px; text-align: center;'> ALL Job Industry </h1>
            </div>
            <?php require_once "../db.php";
			$res = mysqli_query($con, "select * from category ");

			if (mysqli_num_rows($res) > 0) {
				echo "<table  style='margin:30px;' class='table table-bordered table-striped' >";
				 echo "<tr class='info'>";
				 echo "<td> NAME </td>";
				 echo "<td> DELETE </td>";
				 echo "</tr>";
				  while ($record = mysqli_fetch_assoc($res))
				   {
					echo "<tr>";
					echo "<td> " .  $record["name"] . "</td>";
					echo "<td> " .  "<a href='del.php?id=$record[id]' class='btn btn-warning'> Delete</a>" . "</td>";
					echo "</tr>";
				   }
				echo "</table>";
			} ?>
        </div>
    </div>
</body>

</html>
<style>
body {
    background-color: white;
    text-transform: capitalize;
}
</style>