<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
<?php
    include('header-stu.php');
    include('db.php');
    include('menu.php');
    $res = mysqli_query($con, "SELECT * FROM jobs WHERE approved ='Posted'");
    
    ?>

    <div class="jobs" style="margin-top: 30px; margin-bottom: 30px;">
        <h1 style="text-align: center; color: #fff; margin-left: 200px;">All Job Openings</h1>
        <div class="container">
            <div style="height: auto; margin-left: 6%; margin-top: 30px;">
                <div class="row div_products" style="margin-left: 200px;">
                    <?php
                    while ($r = mysqli_fetch_assoc($res)) {
                        echo "<a class='all_details' href='job-details-stu.php?id=" . $r['id'] . "'>";
                        echo "<span style='color: #296196; font-weight: 600; font-size: 16px;'>Job</span><br/>";
                        echo "<span class='s_name' style='color: #cd4237; line-height: 35px; font-size: 19px;'>" . $r["title"] . "</span><br/>";
                        echo "<span class='s_name' style='color: #666666;'><b>Location:</b> " . $r["location"] . "</span>";
                        echo "<span class='s_name' style='color: #666666;'>&nbsp;&nbsp;&nbsp;&nbsp;<b>Experience:</b> " . $r["experience"] . "</span><br/>";
                        echo "<span class='s_name' style='color: #666666;'><b>Role:</b> " . $r["role"] . "</span>";
                        echo "<span class='s_name' style='color: #666666;'>&nbsp;&nbsp;<b>Posted On:</b> " . $r["dop"] . "</span><br/>";
                        echo "<span class='s_name' style='color: #666666;'><b>Key Skills:</b> <span style='color: #0d8cd5;'>" . $r["skills"] . "</span></span>";
                        echo "</a>";
                    }
                    ?>
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