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
    <div style="background-color: whitesmoke; width:1030px;height: 800px; margin-left: 230px">
        <div style="padding: 70px;">
            <h1 style="text-align: center;font-family: 'Lobster', cursive; color:#333; margin-top: 80px;">Qualification Details </h1>
            <?php
               $res=mysqli_query($con,"select * from my_details where userid='".$_GET['id']."'");
              $record=mysqli_fetch_assoc($res);
			      ?>

            <?php
             echo "<table  ' class='table table-bordered table-striped' cellpadding='7' cellspacing='0'>";
             echo "<tr class='info'>";
             echo "<td> Bachlors Degree</td>";
             echo "<td> Collage/University Name </td>";
             echo "<td> Bachlors Percentage </td>";
             echo "</tr>";
             echo "<tr>";
             echo "<td> ".  $record["grad"] ."</td>";
             echo "<td> ".  $record["college"] ."</td>";
             echo "<td> ".  $record["per_grad"] ."</td>"; 
            ?>

             </tr>
             </table><br /><br /><br />
             
            <?php
             echo "<table  ' class='table table-bordered table-striped' cellpadding='7' cellspacing='0'>";
             echo "<tr class='info'>";
             echo "<td> Masters Degree</td>";
             echo "<td> University /Collage Name </td>";
             echo "<td> Masters Percentage </td>";
             echo "</tr>";
             echo "<tr>";
             echo "<td> ".  $record["pg"] ."</td>";
             echo "<td> ".  $record["un"] ."</td>";
             echo "<td> ".  $record["per_pg"] ."</td>"; 
            ?>

            </tr>
            </table><br /><br /><br />

            <?php
             echo "<table  ' class='table table-bordered table-striped' cellpadding='7' cellspacing='0'>";
             echo "<tr class='info'>";
             echo "<td> Other Qualifications with details</td>";
             echo "<tr>";
             echo "<td> ".  $record["other"] ."</td>";
           ?>
            </tr>
            </table><br /><br /><br />
        </div>
    </div>
</body>

</html>
<style>
body {
    background-color: whitesmoke;
}
</style>