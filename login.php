  <?php
  session_start();
  ob_start();
  if (isset($_SESSION["userLogin"])) {
    header("Location: index.php");
  }
  ?>
  <!DOCTYPE html>
  <html>

  <head>
    <title>Student Login</title>
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <?php
    require_once('all.php');
    require_once('validation.php');
    require_once('captcha.php');
    require_once('captcha_addition.php');
    ?>

    <script type="text/javascript">
      function Cap() {
        Captcha();
        Captcha1();
      }
    </script>

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: Arial, sans-serif;
        background-image: url('img/new.jpg');
        background-size: cover;
        overflow: hidden;
        background-size: 100%;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }

      .panel {
        max-width: 400px;
        width: 100%;
        border-radius: 10px;
        background: #ffffff;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin: 80px auto 0;
        margin-bottom: 100px;
      }

      .panel-heading {
        color: #333;
        text-align: center;
        font-size: 30px;
        margin-top: 20px;
      }

      .panel-body {
        padding: 10px 40px 0;
      }

      .form {
        display: flex;
        flex-direction: column;
      }

      .form h2 {
        margin-bottom: 20px;
        color: #333;
        text-align: center;
      }

      form input[type="email"],
      form input[type="password"],
      form input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
      }

      form input[type="email"]:focus,
      form input[type="password"]:focus,
      form input[type="text"]:focus {
        outline: none;
        border-color: #1e1e1e;
      }

      #wrapper-cap {
        position: relative;
        margin-bottom: 20px;
      }

      #wrapper-cap input[type="text"] {
        width: calc(90% - 40px);
      }

      #wrapper-cap button {
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        background-color: #333;
        color: #fff;
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
      }

      #wrapper-cap button i {
        font-size: 16px;
      }

      #cap {
        display: none;
        color: red;
        margin-top: 5px;
        animation: slideInLeft 0.5s ease;
      }

      input[type="submit"] {
        width: 100%;
        background-color: #333;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
      }

      .cta {
        text-align: center;
        padding: 15px 10px 0px 10px;
      }

      .cta a {
        color: #007bff;
        text-decoration: none;
      }
    </style>
  </head>

  <body onload="Cap()">
    <div class='container'>
      <div id="login" class=" panel">
        <div class="login_txt panel-heading">Student Login </div>
        <?php
        if (isset($_SESSION["message"])) { ?>
          <p class="text-danger text-center"><?= $_SESSION["message"] ?></p>
        <?php
        }
        unset($_SESSION["message"]);
        ?>
        <div class='panel-body'>
          <form action="./login_code.php" method="post" name="login" onsubmit="return ValidCaptcha()">

            <!-- <div class="txt_login"> Email . </div> -->
            <input name="email" required type="email" class="input_all_login" placeholder="Email" /><br />

            <!-- <div class="txt_login">Password. </div> -->
            <input name="password" required type="password" class="input_all_login" placeholder=" Password" /><br />

            <div id="wrapper-cap">
              <label id='mainCaptcha'></label>
              <input required type="text" name="" id='txtInput'>
              <button type="submit" id="refresh" onclick="Captcha1()">
                <i id="refresh" class="fa fa-sync-alt"></i>
              </button>
              <div id="cap" class=""> Invalid capcta</div>
            </div>

            <input type="submit" class="login-acc" value="Login" name="login_acc">

          </form>
        </div>
        <div class="cta">Not a member as yet? <a href="register.php">Register Now</a></div><br />
      </div>
    </div>
  </body>

  </html>