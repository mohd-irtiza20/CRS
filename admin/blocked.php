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
    <div style="background-color: whitesmoke; width:1030px;height: 1000px;margin-left: 230px;">
        <div style=" padding:90px;">
            <div style="height: 20px;"></div>
            <h1 style="text-align: center; font-family: 'Lobster', cursive;color: #333">All Registered Students</h1>
            <br />
            <?php 
              include ('../db.php');
              $res=mysqli_query($con,"select * from users  where status ='0'");
              echo "<table class='table  table-striped table-bordered' '/>";
                    echo "<tr class='info'>";
                      echo "<th>"."Name"."</th>";
                      echo "<th>"."Email"."</th>";
                      echo "<th>"."Mobile"."</th>";
                      echo "<th>"."Industry"."</th>";
                      echo "<th>"."Experience"."</th>";
                      echo "<th>"."Address"."</th>";
                      echo "<th>"."About Applicant"."</th>";
                      echo "<th>"."DOJ"."</th>";
                      echo "<th>"."More Qualification Details"."</th>";
                    echo "</tr>";

                  while($row=mysqli_fetch_assoc($res))
                    {
                      echo "<tr>";
                        echo "<td>". $row['name']."</td>";
                        echo "<td>". $row['email']."</td>";
                        echo "<td>". $row['mobile']."</td>";
                        echo "<td>". $row['industry']."</td>";
                        // echo "<td>". $row['qualification']."</td>";
                        echo "<td>". $row['experience']."</td>";
                        echo "<td>". $row['address']."</td>";
                        echo "<td>". $row['about']."</td>";
                        echo "<td>". $row['doj']."</td>";
                        echo "<td>". "<a href='my-details.php?id=".$row['id']."'> Qualification-details</a>"."</td>";           
                      echo "</tr>";
                    }
                echo "</table>";
           ?>
        </div>
    </div>
</body>

</html>
<style>
body {
    background-color: whitesmoke;
    text-transform: capitalize;
}
</style>