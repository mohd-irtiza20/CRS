<?php


// Include necessary PHP files
include('header-stu.php');
include('db.php');
include('menu.php');

// Check if user is logged in
if (!isset($_SESSION['userLogin'])) {
    header('location: login.php');
    exit(); // Stop executing further code
}

// Fetch user details from the database
$res = mysqli_query($con, "SELECT * FROM my_details WHERE userid='" . $_SESSION['userLogin'] . "'");
if (mysqli_num_rows($res) == 0) {
    // Display form to fill out details if user details not found
?>
        <div class='contain'>
        <h3 class='one'>Reach top industry employers.</h3><br />
        <form method="post">
            <h4 style="text-align:center; font-weight:200; color: red; font-size: 16px; margin:0;">Fill Out Your Details</h4>
            <table cellpadding="5" cellspacing="0">
                <tr>
                    <td> <label>Bachelors Details <span class='must'>* </span></label> </td>
                    <td>
                        <select name='grad' class='select' required id='grad'>
                            <option value=''>---Select---</option>
                            <option value='B.Tech'>B.Tech</option>
                            <option value='BCA'>BCA</option>
                            <option value='BBA'>BBA</option>
                            <option value='BA'>BA</option>
                            <option value='Other'>Other</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td> <label>Collage /University <span class='must'>* </span></label> </td>
                    <td>
                        <select name='college' class='select' required id='cl'>
                            <option value=''>---Select---</option>
                            <option value='RIMT University'>RIMT University</option>
                            <option value='Chandigarh University'>Chandigarh University</option>
                            <option value='Panjab University'>Panjab University</option>
                            <option value='Chitkara University'>Chitkara University</option>
                            <option value='Chandigarh group of College'>Chandigarh Group Of College</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td> <label> Percentage % <span class='must'>* </span></label> </td>
                    <td><input type="text" name="per_grad" placeholder="%" required id='Number' minlength="2"
                            maxlength="3"></td>
                </tr>

                <tr>
                    <td> <label>Maters Details <span class='must'>* </span></label> </td>
                    <td>
                        <select name='pg' class='select' required id='pg'>
                            <option value=''>---Select---</option>
                            <option value='M.Tech'>M.Tech</option>
                            <option value='MCA'>MCA</option>
                            <option value='MBA'>MBA</option>
                            <option value='MA'>MA</option>
                            <option value='Other'>Other</option>
                            <option value='No'> Masters Not done</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td> <label>Collage /University <span class='must'>* </span></label> </td>
                    <td>
                        <select name='un' class='select' required id='cl'>
                            <option value=''>---Select---</option>
                            <option value='RIMT University'>RIMT University</option>
                            <option value='Chandigarh University'>Chandigarh University</option>
                            <option value='Panjab University'>Panjab University</option>
                            <option value='Chitkara University'>Chitkara University</option>
                            <option value='Chandigarh group of College'>Chandigarh Group Of College</option>
                            <option value='OTHER'>OTHER</option>
                        </select> 
                    </td>
                </tr>

                <tr>
                    <td> <label> Percentage % <span class='must'>* </span></label> </td>
                    <td><input type="text" name="per_pg" placeholder="%" required id='Number' minlength="2" maxlength="3"></td>
                </tr>

                <tr>
                    <td> <label>Other higher Qualification/Diploma<span class='must'>* </span></label> </td>
                    <td><textarea name="other" class='ta' placeholder="Other higher Qualification/Diploma Please Write in detail " style="height: 100px;" required></textarea> </td>
                </tr>

            </table>
            <br>
            <input type="submit" class='bt_sb' name="btn_sbmt" value="Submit" id='submit_address' onclick="return Validate()">
        </form>
    </div>
    <?php
    } else {
        $record = mysqli_fetch_assoc($res);
    ?>
        <h4 style=" margin-top:50px; margin-bottom:50px; text-align: center; font-size: 36px; color: white; display: flex; justify-content: center;margin-left: 196px;">
    <?php echo  $_SESSION['userName']; ?> Qualification details </h4>
    <div class='contain2' style="background-color: white; margin-right: 106px;">
        <div style='margin-top:50px;' class='hr'> </div>
        <div class='hr'> </div> 
        <?php
         echo "<table  class='table'>";
         echo "<tr class='info'>";
         echo "<td> Bachlors Degree</td>";
         echo "<td> Collage/University Name </td>";
         echo "<td> Bachlors Percentage </td>";
         echo "</tr>";
         echo "<tr>";
         echo "<td> " .  $record["grad"] . "</td>";
         echo "<td> " .  $record["college"] . "</td>";
         echo "<td> " .  $record["per_grad"] . "</td>"; 
        ?>
        </tr>
        </table>

        <?php
         echo "<table  class='table'>";
         echo "<tr class='info'>";
         echo "<td> Masters Degree</td>";
         echo "<td> University /Collage Name </td>";
         echo "<td> Masters Percentage </td>";
         echo "</tr>";
         echo "<tr>";
         echo "<td> " .  $record["pg"] . "</td>";
         echo "<td> " .  $record["un"] . "</td>";
         echo "<td> " .  $record["per_pg"] . "</td>"; 
        ?>
        </tr>
        </table>


        <?php
         echo "<table  class='table'>";
         echo "<tr class='info'>";
         echo "<td> Other Qualifications with details</td>";
         echo "<tr>";
         echo "<td> " .  $record["other"] . "</td>";
        ?>
        </tr>
        </table>

        <?php
         echo "<table  ' class='table table-bordered table-striped' cellpadding='7' cellspacing='0'>";
         echo "<tr class='info'>";
         echo "<td> Experience</td>";
         echo "<tr>";
         echo "<td> " .   $_SESSION["exp"] . "</td>";
        ?>
        </tr>
        </table>

    </div>
    <?php
    }
    ?>

    <script>
       function Validate() 
{
    var inn = document.getElementById("grad");
    if (inn.value == "") 
    {
        //If the "Please Select" option is selected display error.
        alert("Please select bacholors Degree!");
        return false;
    }
    var inn = document.getElementById("pg");
    if (inn.value == "") 
    {
        //If the "Please Select" option is selected display error.
        alert("Please select masters Degree!");
        return false;
    }
    var inn = document.getElementById("cl");
    if (inn.value == "") 
    {
        //If the "Please Select" option is selected display error.
        alert("Please select college");
        return false;
    }
}
    </script>

<?php

if (isset($_POST['btn_sbmt'])) 
{
   
}

?>

    <style>
      
body {
  font-family:Arial,sans-serif;
  margin:0;
  padding:0;
  background:linear-gradient(to right,#1488cc,#2b32b2);
  color:#333;
}
.contain {
  max-width:65%;
  margin:0 auto;
  padding:20px;
}
.contain2 {
  max-width:65%;
  margin:0 auto;
  border-radius:10px;
  margin-bottom:40px;
  padding:10px 30px
}
header {
  background-color:#333;
  color:#fff;
  padding:20px 0;
  text-align:center;
}
form {
  background-color:#fff;
  padding:30px;
  border-radius:10px;
  box-shadow:0 0 20px rgba(0,0,0,0.1);
}
h3.one {
  text-align:center;
  font-size:36px;
  color:white;
  display:flex;
  justify-content:center;
}
label {
  display:block;
  margin-bottom:10px;
  font-weight:600;
}
input[type="text"],select,textarea {
  width:calc(100% - 20px);
  padding:10px;
  margin-bottom:20px;
  border:1px solid #ccc;
  border-radius:5px;
  box-sizing:border-box;
  font-size:16px;
}
.must {
  color:red;
}
.bt_sb {
  background-color:red;
  color:#fff;
  border:none;
  border-radius:5px;
  padding:12px 24px;
  font-size:18px;
  cursor:pointer;
  display:block;
  margin:0 auto;
}
.bt_sb:hover {
  background-color:#c60;
}
table {
  width:100%;
  border-collapse:collapse;
  margin-top:20px;
}
th {
  background-color:#f2f2f2;
  font-weight:bold;
  text-align:left;
}
/* Media Queries */

@media (max-width:768px) {
  form {
  padding:20px;
}
}
    </style>
</body>

</html>
