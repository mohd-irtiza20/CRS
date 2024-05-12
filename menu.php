<?php
session_start(); // Start the session

require_once('db.php');

if (!isset($_SESSION['userLogin'])) {
    header('location:login.php');
    exit(); // Stop executing further code
}

$res = mysqli_query($con, "select profile from users where id = '".$_SESSION['userLogin']."'");
$r = mysqli_fetch_assoc($res);

// Check if profile picture exists
$profileImage = isset($r['profile']) ? $r['profile'] : 'default_profile_image.jpg'; // Provide a default image path if profile picture doesn't exist
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<div id="menu_bar">
    <img src="<?php echo $profileImage; ?>" class="img img-rounded" width="90px" height="90px">
    <div id="span_user_name"><?php echo $_SESSION["userName"]; ?></div>
    <br>
    <ul>
        <li><a href="my-details.php" class="links"> My Details </a></li><br>
        <li><a href="jobs-stu.php" class="links">All Jobs</a></li><br>
        <li><a href="upload.php" class="links"> Upload Resume </a></li><br>
        <li><a href="profile_pic.php" class="links"> Upload Profile </a></li><br>
        <li><a href="write_review.php" class="links"> Write Review </a></li><br>
        <li><a href="notifications.php" class="links"> Notification </a></li>
        <br>
    </ul>
</div>

<div id="right_div">
    <!-- Content for the right div -->
</div>

</body>
</html>


<style>
  body {
  margin:0;
  padding:0;
}
img {
  height:90px;
  width:90px;
  border-radius:50%;
  margin-left:70px;
  margin-bottom:16px;
}
#menu_bar {
  height:100%;
  background-color:#135D66;
  width:230px;
  top:65px;
  left:0;
  position:fixed;
  padding-top:20px;
}
#menu_bar > ul {
  margin-top:18px;
  padding:0;
}
#menu_bar >ul >li {
  width:auto;
  height:4px;
  padding-top:6px;
  padding-left:9px;
  padding-bottom:20px;
  font-family:sans-serif;
  border-bottom:1px solid whitesmoke;
  font-size:10pt;
}
#menu_bar>ul >li:hover {
  color:#1abc9c;
}
.links {
  text-decoration:none;
  color:#ecf0f1;
}
#welcome {
  margin-left:50px;
  font-size:15pt;
  color:#ecf0f1;
  font-family:sans-serif;
  text-transform:uppercase;
  font-weight:550;
}
#span_user_name {
  margin-left:20px;
  font-size:15px;
  color:#ecf0f1;
  font-family:sans-serif;
  text-transform:uppercase;
  font-weight:550;
  text-align:center;
}

</style>