<!DOCTYPE html>
<html>

<head>
<title>Registered Companies</title>

<style>

body,
h1,
h4,
p {
   margin: 0;
   padding: 0;
}
.container2 {
   width: 60%;
   background-color: #fff;
   margin: 0 auto;
   padding: 50px;
   display: flex;
   justify-content: center;
   border-radius:10px
}

.head h1 {
   text-align: center;
    color: #fff;
    margin: 50px;
    font-size: 34px;
}
th{
   font-size: 20px;
   letter-spacing: 2px;
   background-color: #17a2b8;
   color:#fff;
}

td{
   padding: 10px;
   font-size: 18px;
}
/* h4 {
   text-align: center;
   margin-top: 20px;
   font-size: 1.5rem;
}

.card {
   width: 300px;
   background-color: #fff;
   border-radius: 10px;
   box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
   margin: 30px;
   transition: transform 0.3s ease;
}
.card:hover {
   transform: translateY(-5px);
}
.card-body {
   padding: 20px;
}
.card-title {
   font-size: 1.7rem;
   color: #333;
}
.card-text {
   font-size: 1.9rem;
   color: #333;
   font-weight: bold;
}

.btn {
   display: inline-block;
   padding: 10px 20px;
   background-color: #007bff;
   color: #fff;
   text-decoration: none;
   border-radius: 5px;
   transition: background-color 0.3s ease;
}
.btn:hover {
   background-color: #0056b3;
} */

</style>
</head>

<body style='background: linear-gradient(to right, #1488cc, #2b32b2);'>

   <?php 
      include('header.php');
      include('db.php');
   ?>

   <div class="head">
      <h1>Registered Companies</h1>
   </div>

   <div class="container2">

      <?php
         $res = mysqli_query($con, "select * from company_login where status ='Confirm'");

         echo "<table class='table table-hover table-bordered' style='border: 1.5px solid #1488cc; width: 75%;text-align: center;'>";
         echo "<tr>";
         echo "<th style='font-size:20px; letter-spacing:2px; border: 1.5px solid #1488cc;text-align: center;'>Name</th>";
         echo "<th style='font-size:20px; letter-spacing:2px; border: 1.5px solid #1488cc; text-align: center;'>Details</th>";
         echo "</tr>";

         while ($record = mysqli_fetch_assoc($res)) 
         {
         echo "<tr style='border: 1.5px solid #1488cc'>";
         echo "<td style='border: 1.5px solid #1488cc'>" . $record["name"] . "</td>";
         echo "<td><a href='company-details1.php?id=" . $record['id'] . "'>Details</a></td>";
         echo "</tr>";
         }
         echo "</table>";
      ?>
   </div>

</body>

</html>