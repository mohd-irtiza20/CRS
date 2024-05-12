<!DOCTYPE html>
<html>

<head>
    <title>Admin LogIn</title>
    <?php include('../all.php');
         include('../validation.php');
         ?>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <style>
    body {
        overflow: hidden;
    }
    </style>
</head>

<body>
    <!-- <div class='heading'>Campus Placement System </div><br /> <br /> -->
    <div class="container">
        <div class="header">
            <h1>Admin Login</h1>
        </div>
        <form class="login" method='post'>
            <input type="email" placeholder="Email" name="email" required><br><br />
            <input type="password" placeholder="Password" name="password" required><br><br />
            <input type="submit" value="Login" name='btn'>
        </form>
    </div>
</body>

</html>
<?php
   include('../db.php');
   if (isset($_POST['btn'])) {
   	$result = mysqli_query($con, "select * from admin_login");
   
   	while ($r = mysqli_fetch_assoc($result)) {
   		if ($r['email'] == $_POST['email'] && $r['password'] == $_POST['password']) {
   
   			session_start();
   			$_SESSION['admin'] = $r['email'];
   			$_SESSION['admin_name'] = $r['name'];
   			header('location:dashboard.php');
   		}
   	}
   
   	echo "<script>" . "alert('Email/Password seems wrong')" . "</script>";
   }
   ?>