<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <?php include('header.php');
     include('db.php');
     $res = mysqli_query($con, "select * from jobs where id='" . $_GET['id'] . "'");
     $r = mysqli_fetch_assoc($res);

     $res2 = mysqli_query($con, "select * from company_login where id='" . $r["company_id"] . "'");
     $r2 = mysqli_fetch_assoc($res2);

     ?>
    <div class="head">
        <h1>Job Details</h1>
    </div>
    <div class="contain" style="width:65%; background-color: white; box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.2);
 border-radius: 10px; padding: 20px;margin-bottom: 40px;margin-top: 40px;">

        <div style="padding: 10px 40px 0px 40px;">

            <?php
               echo "<span class='s_name' style='color:  #cd4237;line-height:35px; font-size:20px;'>" . $r["title"] . " </span>" . "<br/>";
               echo "<span class='s_name' style='color: #333;font-weight: 400;font-size:18px;'>" . "Location" ."</br>" ."</span>". "<span style='color: #666666;text-align: justify;font-size: 14px;'>". $r["location"] . " </span>"."<br/>"; ?>
            <br>

            <span style="color: #333;font-weight: 400;font-size:18px;">Job Description</span><br />
            <p style="color: #666666;text-align: justify;font-size: 14px;"> <?php echo $r['description'] ?></p>


            <span style="color: #333;font-weight: 400;font-size:18px;">Name</span><br />
            <p style="color: #666666;text-align: justify;font-size: 14px;"> <?php echo $r2['name'] ?></p>

            <span style="color: #333;font-weight: 400;font-size:18px;">About Company</span><br />
            <p style="color: #666666;text-align: justify;font-size: 14px;"> <?php echo $r2['about'] ?></p>

            <span style="color: #333;font-weight: 400;font-size:18px;">Skills </span><br />
            <p style="color: #666666;text-align: justify;font-size: 14px;"> <?php echo $r['skills'] ?></p>


            <span style="color: #333;font-weight: 400;font-size:18px;">Job Type </span><br />
            <p style="color: #666666;text-align: justify;font-size: 14px;"> <?php echo $r['job_type'] ?></p>


            <span style="color: #333;font-weight: 400;font-size:18px;">Industry </span><br />
            <?php
               $res = mysqli_query($con, "select * from category where id='" . $r['industry'] . "'");
               $industry = mysqli_fetch_assoc($res); ?>
            <p style="color: #666666;text-align: justify;font-size: 14px;"> <?php echo $industry["name"] ?></p>


            <span style="color: #333;font-weight: 400;font-size:18px;"> Role </span><br />
            <p style="color: #666666;text-align: justify;font-size: 14px;"> <?php echo $r['role'] ?></p>


            <span style="color: #333;font-weight: 400;font-size:18px;">Qualification </span><br />
            <p style="color: #666666;text-align: justify;font-size: 14px;"> <?php echo $r['qualification'] ?></p>

            <span style="color: #333;font-weight: 400;font-size:18px;">Experience </span><br />
            <p style="color: #666666;text-align: justify;font-size: 14px;"> <?php echo $r['experience'] ?></p>


            <span style="color: #333;font-weight: 400;font-size:18px;">Posts </span><br />
            <p style="color: #666666;text-align: justify;font-size: 14px;"> <?php echo $r['posts'] ?></p>


            <span style="color: #333;font-weight: 400;font-size:18px;">Salary </span><br />
            <p style="color: #666666;text-align: justify;font-size: 14px;"> <?php echo $r['salary'] ?></p>

            <span style="color: #333;font-weight: 400;font-size:18px;">Min. Graduation % </span><br />
            <p style="color: #666666;text-align: justify;font-size: 14px;"> <?php echo $r['grd_marks'] ?></p>


            <span style="color: #333;font-weight: 400;font-size:18px;">Date </span><br />
            <p style="color: #666666;text-align: justify;font-size: 14px;"> <?php echo $r['dop'] ?></p>
            <div style="height: 10px;"></div>


            <?php
               if (isset($_SESSION['userLogin'])) {

                    $res5 = mysqli_query($con, "select * from applications where job_id='" . $_GET['id'] . "' && user_id = '" . $_SESSION['userLogin'] . "'");
                    $j = mysqli_num_rows($res5);

                    if ($j == 0) {
                         echo "<a href='apply.php?id=" . $_GET['id'] . "' id='apply'> Apply </a>";
                    } else {
                         echo "<p style='color:red'> You have already applied for this job!</p>";
                    }
               } else {
                    echo "<p style='color:red'> Please Login to Apply</p>";
               }

               ?>

        </div>
    </div>


</body>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(to right, #1488cc, #2b32b2);
}

.contain {
    width: 80%;
    margin: 20px auto;
    background-color: #fff;
    box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    padding: 15px;
    overflow: hidden;
}

div h1 {
    text-align: center;
    font-size: 36px;
    color: white;
    display: flex;
    justify-content: center;
    margin-top: 50px;
}

span {
    color: #333;
    font-weight: 400;
    font-size: 18px;
}

p {
    color: #666666;
    font-size: 14px;
    line-height: 1.6;
}

#apply {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    padding: 8px 15px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

#apply:hover {
    background-color: #0056b3;
}

/* Add animations */

.contain {
    animation: fadeIn 1s ease;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive styles */

@media (max-width: 768px) {
    .contain {
        width: 90%;
        padding: 10px;
    }
}
</style>