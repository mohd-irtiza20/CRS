<!DOCTYPE html>
<html>

<head>
    <title>All Job Openings</title>
    <link rel="stylesheet" type="text/css" href="css/header.css">
</head>

<body>
    <?php
    include('header.php');
    include('db.php');
    $res = mysqli_query($con, "select * from jobs  where approved ='Posted' && industry='" . $_GET['c'] . "' ");
    ?>
    <div class='jobs' style='margin-top: 30px; margin-bottom: 30px;'> <br />
        <h1 style="text-align: center; font-family: 'Lobster', cursive; color:#17a2b8"> All Job Openings</h1>

        <div class="container" style="background-color: whitesmoke">
            <div style="margin-left: 6%; margin-top: 30px;">
                <div class="row">
                    <?php
                    while ($r = mysqli_fetch_assoc($res)) {
                        echo "<a class='all_details' href='job-details.php?id=" . $r['id'] . "' >";
                        echo "<span style='color:#296196; font-weight:600; font-size:16px;'>Job</span><br/>";
                        echo "<span class='s_name'>" . $r["title"] . "</span><br/>";
                        echo "<span class='s_name'>Location: &nbsp;" . $r["location"] . "</span>";
                        echo "<span class='s_name'>&nbsp;&nbsp;&nbsp;&nbsp;Experience:&nbsp; " . $r["experience"] . "</span><br/>";
                        echo "<span class='s_name'>Role: &nbsp;" . $r["role"] . "</span>";
                        echo "<span class='s_name'>&nbsp;&nbsp;Posted On:&nbsp; " . $r["dop"] . "</span><br/>";
                        echo "<span class='s_name'>Key Skills >&nbsp; <span style='color:#0d8cd5'>" . $r["skills"] . "</span></span>";
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
        font-family: 'Raleway', sans-serif !important;
    }

    .all_details {
        display: inline-block;
        width: 250px;
        margin-right: 25px;
        margin-top: 15px;
        margin-bottom: 50px;
        border: solid #eeeded 1.5px;
        background: #fff;
        padding: 20px;
        text-decoration: none;
        color: #333;
    }

    .all_details:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .container {
        padding: 20px;
    }

    span {
        line-height: 30px;
    }
</style>
