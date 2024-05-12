<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>

<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/header.css">
    <?php require_once('all.php');?>
</head>

<body>
    <div class='header2'>

        <div class="both">
            <a class="title" style="display:flex; justify-content:center; margin-bottom: -14px; font-size:30px;"
                href="index.php">Campus Placement System </a> <br>
        </div>

        <div class="both">
            <ul class="all_link">
                <li><a style="text-decoration:none" href="index.php">Home</a> </li>
                <li><a style="text-decoration:none" href="jobs.php">Jobs</a>
                    <ul id="submenu">
                        <?php require_once "db.php";
                         $res = mysqli_query($con, "select * from category");
                         while ($record = mysqli_fetch_assoc($res)) 
                         {
                          echo "<li>" . "<a href='jobs-cat.php?c=$record[id]'>" . $record["name"] . "</a>" . "</li>";
                         }
                        ?>
                    </ul>
                </li>
                <?php
                  if (!isset($_SESSION["userLogin"])) { 
                ?>
                <li><a style="text-decoration:none" href="companies.php">Companies</a>
                    <ul id="submenu">
                        <?php require_once "db.php";
                            $res = mysqli_query($con, "select * from company_login where status ='Confirm'");
                            while ($record = mysqli_fetch_assoc($res)) 
                            {
                             echo "<li>" . "<a href='company-details1.php?id=$record[id]'>" . $record["name"] . "</a>" . "</li>";
                            }
                        ?>
                    </ul>
                </li>

                <li><a style="text-decoration:none" href="company/login.php">Companies Login</a> </li>
                <li><a style="text-decoration:none" href="company/register.php">Companies Registration</a> </li>
                <?php } ?>

                <?php
                // session_start();     
                if (isset($_SESSION["userLogin"])) { ?>
                <li><a style="text-decoration:none" href="my-account.php">Profile</a> </li>
                <li><a style="text-decoration:none" href="notifications.php">Notifications</a> </li>
                <li><a style="text-decoration:none" href="logout.php">Logout</a> </li>

                <?php } else { ?>

                <li><a style="text-decoration:none" id='btnsignin' style="cursor: pointer;" href="login.php">Student Login</a> </li>
                <li><a style="text-decoration:none" href="register.php">Student Registeration</a> </li>
                <li><a style="text-decoration:none" href="admin/login.php">Admin Login</a> </li>
                <?php } ?>

            </ul>
        </div>
    </div>

</body>

</html>

<style>
body {
  font-family: "Raleway", sans-serif !important;
}

.input_all_login {
  font-size: 15px;
  text-indent: 7px;
  margin-top: 3px;
}

.new {
  text-align: center;
  color: #2874f0;
  margin-top: -10px;
  margin-bottom: 20px;
  font-size: 15px;
  cursor: pointer;
}

#submenu {
  background-color: white;
  margin: 0;
  padding: 0;
  position: absolute;
  visibility: hidden;
  width: 400px;
  /* z-index: 876878979; */
}

#submenu > li {
  margin: 0;
  list-style: none;
  padding: 7px 50px;
}

#submenu > li > a {
  text-decoration: none;
  color: #34495e !important;
  font-size: 15px;
}

</style>