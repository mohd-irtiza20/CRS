<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('./db.php');
if (isset($_POST['btn_sbmt'])) {
  $res = mysqli_query($con, "select * from users where mobile='" . $_POST['mobile'] . "' ||  email='" . $_POST['email'] . "'");
  if (mysqli_num_rows($res) <= 0) {
    $query = "INSERT INTO `users` (`name`, `email`, `mobile`, `industry`, `experience`, `address`, `about`, `password`)
VALUES ('" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['mobile'] . "','" . $_POST['industry'] . "','" . $_POST['experience'] . "','" . $_POST['address'] . "','" . $_POST['about'] . "','" . $_POST['password'] . "')";

    $result = mysqli_query($con, $query);
    if (!$result) {
      die('Error: ' . mysqli_error($con));
    }

    header('location:thanku.php');
    exit; // Add exit after header to prevent further execution
  } else {
    header('location:already.php');
    exit; // Add exit after header to prevent further execution
  }
}
