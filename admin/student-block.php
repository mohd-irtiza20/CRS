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
              $res=mysqli_query($con,"select * from users ");
             
              echo "<table class='table  table-striped table-bordered' '/>";
             
                      echo "<tr class='info'>";
                      echo "<th>"."Name"."</th>";
                      echo "<th>"."Email"."</th>";
                      echo "<th>"."Mobile"."</th>";
                      echo "<th>"."Industry"."</th>";
                      // echo "<th>"."Experience"."</th>";
                      echo "<th>"."Address"."</th>";
                      echo "<th>"."About"."</th>";
                      // echo "<th>"."DOJ"."</th>";
                      echo "<th>"."Status"."</th>";
                      echo "<th>"."Qualification Details"."</th>";
                      echo "<th>"."Block/Unblock"."</th>";
                      echo "</tr>";

                      while($row=mysqli_fetch_assoc($res))
                      {
                        echo "<tr>";
                        echo "<td>". $row['name']."</td>";
                        echo "<td>". $row['email']."</td>";
                        echo "<td>". $row['mobile']."</td>";
                        echo "<td>". $row['industry']."</td>";
                        // echo "<td>". $row['qualification']."</td>";
                        // echo "<td>". $row['experience']."</td>";
                        echo "<td>". $row['address']."</td>";
                        echo "<td>". $row['about']."</td>";
                        // echo "<td>". $row['doj']."</td>";

                        if($row['status'] == 1)
                        {
                          echo "<td>". "Confirm"."</td>";
                        } 
                        else 
                        {
                          echo "<td>". "Blocked"."</td>";
                        }

                        echo "<td>". "<a class='btn btn-primary' href='my-details.php?id=".$row['id']."'> View</a>"."</td>"; 

                        if($row['status'] == 0)
                        {
                         echo "<td>". "<a  class='btn btn-success' href='unblock.php?id=".$row['id']."'> Un-Block</a>"."</td>"; 
                        } 
                        else 
                        {
                         echo "<td>". "<a  class='btn btn-danger' href='block.php?id=".$row['id']."'> Block</a>"."</td>"; 
                        }
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