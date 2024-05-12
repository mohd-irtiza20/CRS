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
    <div style="background-color: whitesmoke; width:1030px; height: 1000px;margin-left: 180px;">
        <div style=" padding:90px;">
            <div style="height: 20px;"></div>
            <h1 style="text-align: center; font-family: 'Lobster', cursive;color: #333">All Job Posts</h1>
            <br />
            <?php
               include('../db.php');
               $res = mysqli_query($con, "select * from jobs");
               
               echo "<table class='table  table-striped table-bordered' '/>";
               
               echo "<tr class='info'>";
               
               echo "<th style=' padding: 5px;'>" . "Job Title" . "</th>";
               echo "<th style=' padding: 5px;'>" . "Location" . "</th>";
               echo "<th style=' padding: 5px;'>" . "job_type" . "</th>";
               echo "<th style=' padding: 5px;'>" . "skills" . "</th>";
               echo "<th style=' padding: 5px;'>" . "qualification" . "</th>";
               echo "<th style=' padding: 5px;'>" . "experience" . "</th>";
               echo "<th style=' padding: 5px;'>" . "description" . "</th>";
               echo "<th style=' padding: 5px;'>" . "Posts" . "</th>";
               echo "<th style=' padding: 5px;'>" . "Date Of Post" . "</th>";
               echo "<th style=' padding: 5px;'>" . "Approved By Admin" . "</th>";
               echo "<th style=' padding: 5px;'>" . "Change Status" . "</th>";
               echo "<th style=' padding: 5px;'>" . "Applications Submitted" . "</th>";
               
               echo "</tr>";
               
               while ($row = mysqli_fetch_assoc($res))
                {
                 echo "<tr>";
                 echo "<td>" . $row['title'] . "</td>";
                 echo "<td>" . $row['location'] . "</td>";
                 echo "<td>" . $row['job_type'] . "</td>";
                 echo "<td>" . $row['skills'] . "</td>";
                 echo "<td>" . $row['qualification'] . "</td>";
                 echo "<td>" . $row['experience'] . "</td>";
                 echo "<td>" . $row['description'] . "</td>";
                 echo "<td>" . $row['posts'] . "</td>";
                 echo "<td>" . $row['dop'] . "</td>";
                 echo "<td>" . $row['approved'] . "</td>";
                 echo "<td>" . "<a href='status.php?id=" . $row['id'] . "'> Change</a>" . "</td>";
                 echo "<td>" . "<a href='applications.php?id=" . $row['id'] . "'> Apllications</a>" . "</td>";
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