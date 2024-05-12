<link rel="stylesheet" type="text/css" href="css/menu.css">

<div id="menu_bar"<br /><
    <span id="welcome">Welcome</span>
    <?php
  session_start();
  if (!isset($_SESSION['admin'])) {
    header('location:login.php');
  }
  include('../db.php');
  
  $res7 = mysqli_query($con, "select * from company_login where status='Pending'");
  $cr = mysqli_num_rows($res7);
  $students = mysqli_query($con, "select * from users where status = 0 ");
  $stdNA = mysqli_num_rows($students);
  echo "<span id='span_user_name'>" . $_SESSION["admin_name"] . "</span>";
  ?>
    <ul>
        <li> <a href="dashboard.php" class="links"> Dashboard </a> </li>
        <li> <a href="companies.php" class="links"> Companies </a> </li>
        <li> <a href="students.php" class="links"> Students </a> </li>
        <li> <a href="jobs.php" class="links"> All Jobs </a> </li>


        <li style="padding-bottom: 30px;"> <a href="company-request.php" class="links">
                Company Requests <span class="badge badge-light"> <?php echo $cr;  ?></span>
            </a>
        </li>

        <li style="padding-bottom: 30px;"> <a href="student-request.php" class="links">
                Student Requests <span class="badge badge-light"> <?php echo $stdNA;  ?></span>
            </a>
        </li>

        <li> <a href="applicants.php" class="links">Registered Applicants </a> </li>
        <li> <a href="job_category.php" class="links"> Job Categories/Industries </a> </li>

        <li> <a href="student-block.php" class="links">Block Student </a> </li>
        <li> <a href="blocked.php" class="links">Blocked Student </a> </li>

        <li> <a href="blocked_com.php" class="links">Blocked Companies </a> </li>
    </ul>
</div>
<div id="right_div">

</div>