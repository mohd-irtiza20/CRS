<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <?php
      include('header.php');
     include('db.php');
      $res = mysqli_query($con, "select * from jobs  where approved ='Posted' ");
    ?>

    <div class='jobs' style='margin-top: 30px; margin-bottom: 30px;'> <br />

        <h1 style="text-align: center; color:#fff;"> All Job openings</h1>

        <div class="container">
            <div style="height:auto; margin-left:6%; margin-top:30px; ">
                <div class="row div_products">
                    <?php
          while ($r = mysqli_fetch_assoc($res)) {
            if (isset($_SESSION['userLogin'])) {
              $res5 = mysqli_query($con, "select * from applications where job_id='" . $r['id'] . "' && user_id = '" . $_SESSION['userLogin'] . "'");
              $j = mysqli_num_rows($res5);

            //   if ($j != 0) {
            //     echo "<div style='color:red;line-height:2px;position:relative;top:40px;left:10px;padding:10px;'> You have already applied for this job!</div>";
            //   }
            // } else {
              // echo "<div style='color:red;line-height:2px;position:relative;top:40px;left:10px;padding:10px;'>Please Login/Sign Up To Check Status</div>";
            }

            echo "<a class='all_details' style='width:45%; display:inline-block: vertical-align:top ; text-decoration:none; ' href='job-details.php?id=" . $r['id'] . "' >";
            echo "<span style='color:#296196; font-weight:600;font-size:16px;'>" . "Job" . "</span>" . "<br/>";
            echo "<span class='s_name' style='color:  #cd4237;line-height:35px; font-size:19px;'>" . $r["title"] . " </span>" . "<br/>";
            echo "<span class='s_name' style='color:  #666666;'>" . "<b>Location:</b> &nbsp;" . $r["location"] . " </span>";
            echo "<span class='s_name' style='color:  #666666;'>" . "&nbsp;&nbsp;&nbsp;&nbsp;<b>Experience:</b>&nbsp; " . $r["experience"] . " </span>" . "<br/>";
            echo "<span class='s_name' style='color:  #666666;'>" . "<b>Role:</b> &nbsp;" . $r["role"] . " </span>";
            echo "<span class='s_name' style='color:  #666666;'>" . "&nbsp;&nbsp;<b>Posted On:</b>&nbsp; " . $r["dop"] . " </span>" . "<br/>";
            echo "<span class='s_name' style='color:  #666666;'>" . "<b>Key Skills:</b>&nbsp; " . "<span style='color:#0d8cd5'>" . $r["skills"] . "</span>" . " </span>";
            echo "</a>";
          } ?>

                </div>
            </div>
        </div>
    </div>

</body>

</html>

<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(to right, #1488cc, #2b32b2);
}

.all_details {

    display: inline-block;
    vertical-align: top;
    margin-right: 20px;
    margin-bottom: 20px;
    border: solid 1px #ddd;
    background: #fff;
    padding: 20px;
    box-sizing: border-box;
    border-radius: 8px;
    box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
}

#div_products {
    height: auto;
    margin-left: 35px;
    margin-top: 30px;
    border-top: 5px solid #eaeaea;

}

span {
    line-height: 30px;
}
</style>