    <!DOCTYPE html>
    <html>

    <head>
    <title>Home</title>
    <link rel="stylesheet" href="">
    </head>

    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: lightblue;
    margin: 0;
    padding: 0;
    }

    .container {
    width: 80%;
    margin: 0 auto;
    text-decoration: none;
    }

    .carousel {
    margin-top: -30px;
    z-index: -1;
    }

    .carousel-image {
    background-size: cover;
    height: 500px;
    }

    .title-wrap {
    width: 70%;
    margin: 0 auto;
    }

    .all_titles {
    font-size: 45px;
    line-height: 65px;
    font-weight: 700;
    font-family: Raleway, sans-serif;
    text-transform: capitalize;
    padding-top: 25%;
    text-align: center;
    color: white;
    }

    .jobs {
    margin-top: 30px;
    margin-bottom: 30px;
    }

    .all_details,
    .all_details1 {
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

    .all_details:hover,
    .all_details1:hover {
    outline: none;
    border-color: #4cb8c4;
    }

    .cat-btn {
    background: linear-gradient(to right, #4CAF50, #45a049);
    color: white;
    border: none;
    text-align: center;
    border-radius: 10px;
    font-size: 17px;
    margin: 10px;
    padding: 8px 20px;
    cursor: pointer;
    font-family: 'Arial', sans-serif;
    display: inline-block;
    text-decoration: none;
    transition: all .4s;
    text-transform: uppercase;
    box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.2);
    }

    .cat-btn:hover {
    background: linear-gradient(to right, #45a049, #4CAF50);
    }

    .job-type {
    color: #4CAF50;
    font-weight: 600;
    font-size: 16px;
    }

    .job-title {
    color: #333;
    line-height: 1.5;
    font-size: 18px;
    }

    .job-info {
    color: #666;
    font-size: 16px;
    }

    .skills {
    color: #007BFF;
    }

    .company-name {
    color: #4CAF50;
    font-weight: 600;
    font-size: 16px;
    }

    .company-info {
    color: #666;
    text-align: justify;
    }

    .container {
    display: flex;
    justify-content: center;
    grid-row: inherit;
    }

    img {
    height: 50px;
    width: 50px;
    border-radius: 50%;
    margin-right: 20px;
    box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
    }


    h1 {
    font-size: 32px;
    color: #333;
    text-align: center;
    margin-bottom: 20px;
    padding-top: 20px;
    font-weight: 700;
    }
    </style>

    <body>
    <?php 
    include('header.php');
    include('db.php');
    $res = mysqli_query($con, "select * from jobs where approved ='Posted' limit 8  ");
    ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="carousel-image" style="background-image: url(img/rimmt.jpg);">
                    <div class="title-wrap">
                        <marquee behavior="alternate" direction="left">
                            <h1 class="all_titles">Gateway to Opportunities</h1>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jobs">
        <?php if(mysqli_num_rows($res) > 0){ ?>
        <h1>Find latest job openings</h1>
        <?php } ?>
        <div class="container">
            <div class="row">
                <?php while ($r = mysqli_fetch_assoc($res)) { ?>
                <a style="text-decoration:none" class="all_details" href="job-details.php?id=<?php echo $r['id']; ?>">
                    <span class="job-type">Job</span><br>
                    <span class="job-title"><?php echo $r['title']; ?></span><br>
                    <span class="job-info"><b>Location:</b> <?php echo $r['location']; ?></span><br>
                    <span class="job-info"><b>Experience:</b> <?php echo $r['experience']; ?></span><br>
                    <span class="job-info"><b>Role:</b> <?php echo $r['role']; ?></span><br>
                    <span class="job-info"><b>Posted On:</b> <?php echo $r['dop']; ?></span><br>
                    <span class="job-info"><b>Key Skills:</b>
                    <span class="skills"><?php echo $r['skills']; ?></span></span>
                </a>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="jobs">
        <?php 
        $res = mysqli_query($con, "select * from company_login where status ='Confirm' limit 6  ");
        if(mysqli_num_rows($res) > 0){
        ?>
        <h1>Companies Registered with Us</h1>
        <?php }?>
        <div class="container">
            <div class="row" style="display:flex">
                <?php
                while ($r = mysqli_fetch_assoc($res)) { ?>
                <a style="text-decoration:none;text-align: justify;" class="all_details1"
                    href="company-details1.php?id=<?php echo $r['id']; ?>">
                    <!-- <span class="company-name">Company Name</span><br> -->
                    <img src="img/companies.png" alt="">
                    <span class="company-name"><?php echo $r['name']; ?></span><br><br>
                    <span class="company-info"><b>Info:</b> <?php echo $r['about']; ?></span>
                </a>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php $reviews = mysqli_query($con, "select * from reviews join users on reviews.user_id= users.id limit 6 ");
    if(mysqli_num_rows($reviews) > 0){
    ?>
    <h1>Job Seekers Reviews</h1>
    <?php }?>
    <?php require_once('reviews.php'); ?>
    <?php 
    $res = mysqli_query($con, "select * from category"); 
    if(mysqli_num_rows($res) > 0){
    ?>
    <h1>Job Industries</h1>
    <?php }?>
    <div style="margin-bottom: 20px" class="container">

    <?php
        while ($r = mysqli_fetch_assoc($res)) {
        echo "<a style='text-decoration:none' href='jobs-cat.php?c=$r[name]' class='cat-btn'>" . $r['name'] . "</a>";
        }
    ?>
    </div>

    <?php include('footer.php'); ?>
    </body>

    </html>