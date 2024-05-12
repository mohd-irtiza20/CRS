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
    <div style="background-color: whitesmoke; width:1030px;height: 800px;margin-left: 230px;">
        <div style=" padding:90px;">
            <h1 style="text-align: center; font-family: 'Lobster', cursive;color: #333"> Student Regristration Requests
            </h1>
            <br />
            <?php
               include('../db.php');
               $res = mysqli_query($con, "select * from users where status = 0 ");
               if (mysqli_num_rows($res) > 0) 
               {
                 echo "<table class='table table-striped table-bordered'>";
                 echo "<tr class='success'>";
                 echo "<th>" . "Name" . "</th>";
                 echo "<th>" . "Email Id" . "</th>";
                 echo "<th>" . "Mobile" . "</th>";
                 echo "<th>" . "Experience" . "</th>";
                 echo "<th>" . "Address" . "</th>";
                 echo "<th>" . "About" . "</th>";
                 echo "<th>" . "Action" . "</th>";
                 echo "</tr>";

                  while ($r = mysqli_fetch_assoc($res))
                  {
                   echo "<tr>";
                   echo "<td>" . $r['name'] . "</td>";
                   echo "<td>" . $r['email'] . "</td>";
                   echo "<td>" . $r['mobile'] . "</td>";
                   echo "<td>" . $r['experience'] . "</td>";
                   echo "<td>" . $r['address'] . "</td>";
                   echo "<td>" . $r['about'] . "</td>";
                   echo   "<td>" . "<a class='btn btn-success' href='confirm-student.php?id=" . $r['id'] . "'> Confirm </a>" . "</td>";
                   echo "</tr>";
                  }
                 echo "</table>";
                }
              ?>
        </div>
    </div>
</body>

</html>
<style>
body {
    background-color: whitesmoke;
}
</style>