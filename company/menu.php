<link rel="stylesheet" type="text/css" href="css/menu.css">
<div id="menu_bar"><br /><br />
<img src="./images/companies.png" alt=""><br />
    <?php
      session_start();
      if (!isset($_SESSION['company'])) {
       header('location:login.php');
      }
       echo "<div id='span_user_name' style='text-align:center'>" . $_SESSION["company_name"] . "</div>";
    ?> <br /><br /><br />
    <ul>
        <li style="font-size: 15px;"> <a href="dashboard.php" class="links"> Dashboard </a> </li><br />
        <li style="font-size: 15px;"> <a href="my-jobs.php" class="links"> Jobs Posted </a> </li><br>
        <li style="font-size: 15px;"> <a href="add-job.php" class="links"> Add Job </a> </li><br />
        <li style="font-size: 15px;"> <a href="applications.php?id=1" class="links"> View Applications </a> </li> <br>
        <li style="font-size: 15px;"> <a href="details.php" class="links"> My details </a> </li>
        <br />
    </ul>
</div>
<div id="right_div">

</div>