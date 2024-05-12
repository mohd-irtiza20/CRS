<?php
ob_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Company Login</title>
    <?php 
      require_once('../all.php');
      require_once('../validation.php');
    ?>

    <script type="text/javascript">
    function Captcha() {
        var alpha = new Array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
            'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
            'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
        var i;
        // for (i=0;i<6;i++){
        var a = alpha[Math.floor(Math.random() * alpha.length)];
        var b = alpha[Math.floor(Math.random() * alpha.length)];
        var c = alpha[Math.floor(Math.random() * alpha.length)];
        var d = alpha[Math.floor(Math.random() * alpha.length)];
        var e = alpha[Math.floor(Math.random() * alpha.length)];
        var f = alpha[Math.floor(Math.random() * alpha.length)];
        var g = alpha[Math.floor(Math.random() * alpha.length)];
        // }
        var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' ' + f + ' ' + g;
        document.getElementById("mainCaptcha").innerText = code
    }

    function ValidCaptcha() {
        var string1 = removeSpaces(document.getElementById('mainCaptcha').innerText);
        var string2 = removeSpaces(document.getElementById('txtInput').value);
        if (string1 == string2) {
            return true;
        } else {
            document.getElementById('cap').style.visibility = 'visible';
            Captcha();
            return false;
        }
    }

    function removeSpaces(string) {
        return string.split(' ').join('');
    }
    </script>

    <link rel="stylesheet" href="css/login.css">
</head>

<body onload=" Captcha()">
    <div class="module form-module">
        <div class="form">
            <h2 style="font-size: 30px; margin-top: 0; margin-bottom: 20px;">Company Login</h2>
            <form method='post' onsubmit="return ValidCaptcha()">
                <input type="email" placeholder="Email" name='email' required />
                <input type="password" placeholder="Password" name='password' required />
                <div id="wrapper-cap">
                    <label id='mainCaptcha'></label> <br>
                    <input required type="text" name="" id='txtInput'>
                    <button type="button" id="refresh" onclick="Captcha();">
                        <i class="fa fa-sync-alt"></i>
                    </button>
                    <div id='cap' class=""> Invalid capcta</div>
                </div>
                <button type='submit' name='btn'>Login</button>
            </form>
        </div>
        <div class="cta">Dont Have a account?<a href="register.php"> Register Now</a></div>
    </div>
</body>

</html>

<?php
$flag = 1;
require_once('../db.php');
if (isset($_POST['btn'])) {
  $result = mysqli_query($con, "select * from company_login where status='Confirm'");

  while ($r = mysqli_fetch_assoc($result)) {
    if ($r['email'] == $_POST['email'] && $r['password'] == $_POST['password']) {
      $flag = 0;
      // echo "<script>". "alert('here I am')". "</script>";
      session_start();
      $_SESSION['company'] = $r['id'];
      $_SESSION['company_name'] = $r['name'];
      header('location:dashboard.php');
    }
  }
  if ($flag) 
  {
    echo "<script>" . "alert('Email/Password seems wrong')" . "</script>";
  }
}
?>