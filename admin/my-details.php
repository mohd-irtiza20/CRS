<!DOCTYPE html>
<html>

<head>
    <title></title>

</head>

<body>
    <?php  
	  include 'menu.php';
	  include 'header.php';
     include '../db.php';
	?>
    <div style="background-color: white; width:1200px;height: 1000px;margin-left: 230px;">
        <div style=" padding:90px;">
            <h1
                style="text-align: center; margin-top: 70px;color: #333; font-weight: 900;font-family: 'Lobster', cursive;">
                Qulification Details</h1>
        </div>

        <?php
            $res=mysqli_query($con,"select * from my_details where userid='".$_GET['id']."'");
            $record=mysqli_fetch_assoc($res);
        ?>

        <?php
            echo "<table  style='margin-left:30px;margin-right:30px;' class='table table-bordered table-striped' cellpadding='7' cellspacing='0'>";
            echo "<tr class='info'>";
            echo "<td> Bachlors Degree</td>";
            echo "<td> Collage/University Name </td>";
            echo "<td> Bachlors Percentage </td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td> ".  $record["grad"] ."</td>";
            echo "<td> ".  $record["college"] ."</td>";
            echo "<td> ".  $record["per_grad"] ."</td>"; 
            echo "</tr>";
            echo "</table>";
            echo "</br>";
            ?>
        <!-- Here i made change -->

        <?php
           echo "<table style='margin-left:30px;margin-right:30px;' class='table table-bordered table-striped' cellpadding='7' cellspacing='0'>";
            echo "<tr class='info'>";
            echo "<td> Masters Degree</td>";
            echo "<td> University /Collage Name </td>";
            echo "<td> Masters Percentage </td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td> ".  $record["pg"] ."</td>";
            echo "<td> ".  $record["un"] ."</td>";
            echo "<td> ".  $record["per_pg"] ."</td>"; 
            echo "</tr>";
            echo "</table>";
            echo "</br>";?>
        <!-- Here i made change -->

        <?php
           echo "<table  style='margin-left:30px;margin-right:30px;' class='table table-bordered table-striped' cellpadding='7' cellspacing='0'>";
            echo "<tr class='info'>";
            echo "<td> Other Qualifications with details</td>";
            echo "<tr>";
            echo "<td> ".  $record["other"] ."</td>";
            echo "</tr>";
            echo "</table>";
            echo "</br>";
            echo "</br>";
           ?>

        <!-- Here i made change -->
    </div>
</body>

</html>
<style>
body {
    background-color: white;
    text-transform: capitalize;
}
</style>