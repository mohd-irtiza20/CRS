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
        style="background: linear-gradient(to right, #1488cc, #2b32b2); width:1030px;height: 800px;margin-left: 230px;">
        <div style=" padding:90px;">
            <div style="height: 20px;"></div>
            <h1 style="text-align: center;color:#fff">Applications Recieved</h1>
            <br />
            <?php
               include('../db.php');
               $res = mysqli_query($con, "select * from  users join applications on  users.id=applications.user_id  where job_id ='" . $_GET['id'] . "' ");

             echo "<div class='new' style='background:#fff; padding: 50px; border-radius:10px'>";
                echo "<table class='table  table-striped table-bordered'>";
                echo "<tr class='info'>";
                // echo "<th>" . "Image" . "</th>";
                echo "<th style='border: 1.5px solid #1488cc'>" . "Name" . "</th>";
                // echo "<th>" . "Email" . "</th>";
                echo "<th style='border: 1.5px solid #1488cc'>" . "Mobile" . "</th>";
                // echo "<th>" . "Industry" . "</th>";
                echo "<th style='border: 1.5px solid #1488cc'>" . "Experience" . "</th>";
                // echo "<th>" . "Address" . "</th>";
                echo "<th style='border: 1.5px solid #1488cc'>" . "About Applicant" . "</th>";
                echo "<th style='border: 1.5px solid #1488cc'>" . "Applied ON" . "</th>";
                echo "<th style='border: 1.5px solid #1488cc'>" . "Resume" . "</th>";
                echo "<th style='border: 1.5px solid #1488cc'>" . "More Details" . "</th>";
                echo "<th style='border: 1.5px solid #1488cc'>" . "Send Mail" . "</th>";
                echo "</tr>";
               
                while ($row = mysqli_fetch_assoc($res)) 
              {
                 echo "<tr>";
                 echo "<tr>";
                 //  if (empty($row['resume'])) 
                 //  {
                 //    echo "<td>" . "Image not uploaded Yet!" . " </td>";
                 //  }
                 //  else 
                 //  {
                 //    echo "<td>" . "<img src='../$row[profile]' style='width:50px; height:50px'>" . "</td>";
                 //  }
                 echo "<td style='border: 1.5px solid #1488cc'>" . $row['name'] . "</td>";
                 // echo "<td>" . $row['email'] . "</td>";
                 echo "<td style='border: 1.5px solid #1488cc'>" . $row['mobile'] . "</td>";
                 // echo "<td>" . $row['industry'] . "</td>";
                 echo "<td style='border: 1.5px solid #1488cc'>" . $row['experience'] . "</td>";
                 // echo "<td>" . $row['address'] . "</td>";
                 echo "<td style='text-align: justify; border: 1.5px solid #1488cc'>" . $row['about'] . "</td>";
                 echo "<td style='border: 1.5px solid #1488cc'>" . $row['applied_on'] . "</td>";

                 if (empty($row['resume'])) 
                 {
                   echo "<td style='border: 1.5px solid #1488cc'>" . "Resume not uploaded Yet!" . " </td>";
                 } 
                 else
                 {
                  echo "<td style='border: 1.5px solid #1488cc'>"
                    . "<a href='../$row[resume]'  target='_blank' class='btn btn-primary'>View</a>"
                    . "</td>";
                 }
                 echo "<td style='border: 1.5px solid #1488cc'>" . "<a  class='btn btn-success' href='my-details.php?id=" . $row['user_id'] . "'> More Details</a>" . "</td>";
                 echo "<td style='border: 1.5px solid #1488cc'>" . "<a href='mail.php?email=" . $row['email'] . "'> Send</a>" . "</td>";
                 echo "</tr>";
               }
                 echo "</table>";
              echo "</div>";
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