<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('header-stu.php');
require_once('menu.php');

// Redirect if user is not logged in
if (!isset($_SESSION['userLogin'])) {
    header('location:index.php');
    exit(); // Stop executing further code
} 

require_once('db.php');

// Fetch user's profile
$res = mysqli_query($con, "SELECT profile FROM users WHERE id = '".$_SESSION['userLogin']."'");
$r = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Picture Upload</title>
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <style>
        /* Your CSS styles */
    </style>
</head>
<body>
    <div class='container' style='padding-top:70px; min-height:400px; padding-left: 255px; '>
        <form method='post' enctype='multipart/form-data'>
            <div class='form-group'>
                <input type='file' required class='form-control' name='file'>
            </div>
            <div class='form-group'>
                <input type='submit' class='btn btn-success' value='Upload Profile pic' name='btn'>
            </div>
        </form>   
        <?php
        if (empty($r['profile'])) {
            echo "<label class='alert alert-warning'> You have Not uploaded the Profile pic yet! </label><br>";
        } else {
            echo "<label class='alert alert-success'> You have already uploaded the Profile pic! </label><br>";
            echo "<img src='$r[profile]' class='img img-rounded' width='300px'>";
        }

        if (isset($_POST['btn'])) {
            $res1 = mysqli_query($con, "SELECT profile FROM users WHERE id = '".$_SESSION['userLogin']."'");
            $r1 = mysqli_fetch_assoc($res1);
            $name = $r1['profile'];
            unlink($name);
            $n = $_FILES['file']['name'];
            $destination = 'img/'. rand(). time().$n;
            $source = $_FILES['file']['tmp_name'];
            move_uploaded_file($source, $destination);
            mysqli_query($con, "UPDATE users SET profile='$destination' WHERE id = '".$_SESSION['userLogin']."' ");
            echo "<div class='alert alert-success'>Profile Pic Uploaded Successfully</div>";
            header("refresh:0");
        }
        ?>
    </div>
</body>
</html>
