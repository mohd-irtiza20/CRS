<?php
require_once('./db.php');

if (isset($_POST["login_acc"])) {
  session_start();
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  $res = mysqli_query($con, "SELECT * FROM users WHERE password='$password' AND email='$email'");
  if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    $res = mysqli_query($con, "SELECT * FROM users WHERE status=1 AND id =" . $row['id']);
    if (mysqli_num_rows($res) > 0) {
      $_SESSION["exp"] = $row['experience'];
      $_SESSION["userLogin"] = $row['id'];
      $_SESSION['userName'] = $row['name'];
      header('Location: dashboard.php');
      exit;
    } else {
      $_SESSION["message"] = "Not approved yet.";
      header('Location: login.php');
    }
  } else {
    $_SESSION["message"] = "Invalid credentials!";
    header('Location: login.php');
  }
}
