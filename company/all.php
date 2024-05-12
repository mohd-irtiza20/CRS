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
    <div style="background-color: whitesmoke; width:1200px;height: 1000px;margin-left: 230px;">
        <div style=" padding:90px;">
            <div style="height: 20px;"></div>
            <h1 style="text-align: center;color:#c60">Applications Recieved</h1><br />
            <?php 
              include ('../db.php');
              $res=mysqli_query($con, "select * from  users join applications on  users.id=applications.user_id  where job_id ='".$_GET['id']."' ");
             
                   echo "<table class='table  table-striped table-bordered' '/>";
                      echo "<tr class='info'>";
                      echo "<th>"."Name"."</th>";
                      echo "<th>"."Email"."</th>";
                      echo "<th>"."Mobile"."</th>";
                      echo "<th>"."Industry"."</th>";
                      echo "<th>"."Qualification"."</th>";
                      echo "<th>"."Experience"."</th>";
                      echo "<th>"."Address"."</th>";
                      echo "<th>"."About Applicant"."</th>";
                      echo "<th>"."Applied ON"."</th>";
                      echo "</tr>";

                      while($row=mysqli_fetch_assoc($res))
                      {
                        echo "<tr>";
                        echo "<td>". $row['name']."</td>";
                        echo "<td>". $row['email']."</td>";
                        echo "<td>". $row['mobile']."</td>";
                        echo "<td>". $row['industry']."</td>";
                        echo "<td>". $row['qualification']."</td>";
                        echo "<td>". $row['experience']."</td>";
                        echo "<td>". $row['address']."</td>";
                        echo "<td>". $row['about']."</td>";
                        echo "<td>". $row['applied_on']."</td>";
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