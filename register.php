<!DOCTYPE html>
<html>

<head>
  <title>Student Registration</title>

  <?php
  require_once('captcha_addition.php');
  require_once('header.php');
  require_once('validation.php');
  require_once('all.php');
  ?>
</head>

<script type="text/javascript">
  function Cap() {
    Captcha();
    Captcha1();
  }
</script>

</head>

<body onload="Captcha1()">
  <div class='container'>
    <h3 class='one'> Student Registration</h3>
    <!-- <div class='hr'> </div> -->
    <h4 style="text-align: center; font-size:16px">Fill Out The Following Details</h4>
    <!-- <div class='hr'> </div> -->
    <form action="./register_code.php" method="post" onsubmit="return ValidCaptcha1()">
      <table cellpadding="5" cellspacing="0">
        <tr>
          <td> <label> Name <span class='must'>* </span></label> </td>
          <td><input type="text" name="name" placeholder="Name" required id='inputTextBox'></td>
        </tr>

        <tr>
          <td> <label>Email <span class='must'>* </span></label> </td>
          <td><input type="email" name="email" placeholder="Email" required></td>
        </tr>

        <tr>
          <td> <label> Mobile Number </span></label> <span class='must'>* </span></td>
          <td><input type="text" name="mobile" placeholder="Mobile Number" required minlength="10" maxlength="12" id='Number'> </td>
        </tr>

        <tr>
          <td> <label>Job industry <span class='must'>* </span></label> </td>
          <td>
            <select name='industry' class='select' required id='in'>
              <?php
              include('../db.php');
              $res = mysqli_query($con, "select * from category");
              echo "<option>---Select---</option>";
              while ($record = mysqli_fetch_assoc($res)) {
                echo "<option value='{$record['id']}'>" . $record["name"] . "</option>";
              }
              ?>
            </select>
          </td>
        </tr>

        <tr>
          <td> <label>Experience <span class='must'>* </span></label> </td>
          <td>
            <select name='experience' class='select' required id='ex'>
              <option value=''>---Select---</option>
              <option value='1'>Fresher</option>
              <option value='2'>1 yrs</option>
              <option value='3'>2 yrs</option>
              <option value='4'>3 yrs</option>
              <option value='5'>4 yrs</option>
              <option value='6'>4 or above yrs</option>
            </select>
          </td>
        </tr>

        <tr>
          <td> <label>Address <span class='must'>* </span></label> </td>
          <td><textarea style="height: 42px; resize: none;" name="address" class='ta' placeholder="Your Address" style="height: 100px;" required></textarea> </td>
        </tr>

        <tr>
          <td> <label>About Yourself <span class='must'>* </span></label> </td>
          <td><textarea style="height: 80px;" name="about" class='ta' placeholder="About Yourself " style="height: 160px;" required></textarea> </td>
        </tr> <!-- CH -->

        <tr>
          <td> <label> Password </span></label> <span class='must'>* </span></td>
          <td><input type="password" name="password" placeholder="Password" required> </td>
        </tr>

        <tr>
          <td><label id='mainCaptcha1'></label> </td>
          <td><input required type="text" name="" id='txtInput1'>
            <button type="button" id="refresh1" onclick="Captcha1();">
              <i class="fa fa-sync-alt"></i>
            </button>
          <td>
        </tr>

        <tr>
          <!-- <td> </td> -->
          <td>
            <div id='cap1' class=""> Invalid capcta</div>
          </td>
        </tr>
      </table>

      <div class='hr'> </div>
      <input type="submit" class='bt_sb' name="btn_sbmt" value="Register  " id='submit_address' onclick="return Validate()">
      <div style="text-align: center; padding: 15px 10px 0px 10px;">If you are already registred? <a href="login.php">Login now</a></div>
      <div class='hr'> </div>
    </form>
  </div>
  <!-- <?php require_once('footer.php'); ?> -->

</body>

</html>

<script>
  function Validate() {
    var inn = document.getElementById("in");
    if (inn.value == "") {
      //If the "Please Select" option is selected display error.
      alert("Please select industry!");
      return false;
    }
    var ex = document.getElementById("ex");
    if (ex.value == "") {
      //If the "Please Select" option is selected display error.
      alert("Please select an option!");
      return false;
    }
    return true;
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
    background-image: url('./img/new.jpg');
    background-size: 80pc 70pc;
    background-repeat: no-repeat;
  }

  .container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }

  h3 {
    text-align: center;
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
  }

  hr {
    border: none;
    border-top: 1px solid #ccc;
    margin: 10px 0;
  }

  form {
    padding: 20px;
  }

  label {
    font-weight: bold;
  }

  input[type="text"],
  input[type="email"],
  input[type="password"],
  select,
  textarea {
    width: 170%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s ease;
  }

  input[type="text"]:focus,
  input[type="email"]:focus,
  input[type="password"]:focus,
  select:focus,
  textarea:focus {
    outline: none;
    border-color: #1e1e1e;
  }

  .must {
    color: red;
  }

  .bt_sb {
    width: 100%;
    background-color: #333;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
  }

  .bt_sb:hover {
    background-color: #0056b3;
  }

  a {
    color: #007bff;
    text-decoration: none;
  }

  a:hover {
    text-decoration: underline;
  }

  .invalid {
    display: none;
    color: red;
  }

  /* Animation for invalid captcha */
  @keyframes shake {
    0% {
      transform: translateX(0);
    }

    25% {
      transform: translateX(-5px);
    }

    50% {
      transform: translateX(5px);
    }

    75% {
      transform: translateX(-5px);
    }

    100% {
      transform: translateX(0);
    }
  }

  .invalid-animation {
    display: inline-block;
    animation: shake 0.4s ease-in-out;
  }
</style>