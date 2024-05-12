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
    <div
        style="background: linear-gradient(to right, #1488cc, #2b32b2); width:1030px;height: 700px; margin-left: 230px">
        <div style="padding: 70px; ">
            <!-- <div style="height: 120px;"></div> -->
            <h1 style="text-align: center; font-size: 36px; color: white; font-weight: 500; margin-top: 50px;"> Job Posts</h1><br />
            <div class="new" style='padding: 50px 27px;background: white;border-radius: 10px;'>
                <?php 
                  include ('../db.php');
                   $res=mysqli_query($con,"select * from jobs where company_id ='".$_SESSION['company']."'");

                    echo "<table class='table table-hover table-bordered' style='border: 1.5px solid #1488cc'>";
                      echo "<tr class='info'>";
                      echo "<th style='border: 1.5px solid #1488cc'>"."Job"."</th>";
                      echo "<th style='border: 1.5px solid #1488cc'>"."Location"."</th>";
                      echo "<th style='border: 1.5px solid #1488cc'>"."Job Type"."</th>";
                      echo "<th style='border: 1.5px solid #1488cc'>"."Skills"."</th>";
                      echo "<th style='border: 1.5px solid #1488cc'>"."Qualification"."</th>";
                      echo "<th style='border: 1.5px solid #1488cc'>"."Experience"."</th>";
                      // echo "<th style='border: 1.5px solid #1488cc'>"."Description"."</th>";
                      echo "<th style='border: 1.5px solid #1488cc'>"."Post On"."</th>";
                      echo "<th style='border: 1.5px solid #1488cc'>"."Approved By Admin"."</th>";
                      echo "<th style='border: 1.5px solid #1488cc'>"."Applications Submitted"."</th>";
                      echo "</tr>";

                      while($row=mysqli_fetch_assoc($res))
                      {
                        echo "<tr>";
                        echo "<td style='border: 1.5px solid #1488cc'>". $row['title']."</td>";
                        echo "<td style='border: 1.5px solid #1488cc'>". $row['location']."</td>";
                        echo "<td style='border: 1.5px solid #1488cc'>". $row['job_type']."</td>";
                        echo "<td style='border: 1.5px solid #1488cc'>". $row['skills']."</td>";
                        echo "<td style='border: 1.5px solid #1488cc'>". $row['qualification']."</td>";
                        echo "<td style='border: 1.5px solid #1488cc'>". $row['experience']."</td>";
                        // echo "<td style='border: 1.5px solid #1488cc'>". $row['description']."</td>";
                        echo "<td style='border: 1.5px solid #1488cc'>". $row['dop']."</td>";
                        echo "<td style='border: 1.5px solid #1488cc'>". $row['approved']."</td>";
                        echo "<td style='border: 1.5px solid #1488cc'>". "<a href='applications.php?id=".$row['id']."'> Apllications</a>"."</td>"; 
                        echo "</tr>";
                      }
                    echo "</table>";
                ?>
            </div>
        </div>
    </div>
</body>

</html>
<style>
body {
  background-color: whitesmoke;
  text-transform: capitalize;
}

td {
  text-align: justify;
  text-align: center;
}

th {
  text-align: center;
  letter-spacing: 2px;
}
</style>