<!DOCTYPE html>
<html>

<head>
    <title>Admin - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
    body {
        background-color: white;
        text-transform: capitalize;
        overflow: hidden;
    }

    .bg {
        background-color: white;
        width: 1200px;
        height: 100vh;
        margin-left: 230px;
    }

    .head {
        text-align: center;
        margin-top: 70px;
        color: #333;
        font-weight: 900;
    }
    </style>
</head>

<body>
    <?php
  include 'menu.php';
  include 'header.php';
  ?>
    <div class="bg" style='background-image: linear-gradient(to top, #00c6fb 0%, #005bea 100%);'>
        <div style=" padding:90px;">
            <h1 class="head">Welcome Admin </h1>
        </div>

        <div style="margin-left: 10%;" class="row">
            <?php
      include('../db.php');
      $students = mysqli_query($con, "select * from users");
      $companies = mysqli_query($con, "select * from company_login");
      $industries = mysqli_query($con, "select * from category");
      $jobs = mysqli_query($con, "select * from jobs");
      ?>
            <div class="card col-3" style="width:20rem;">
                <div class="card-body">
                    <h5 class="card-title">Total Number Of Students</h5>
                    <p class="card-text"><?php echo mysqli_num_rows($students); ?></p>
                    <a href="students.php" class="btn btn-primary">View</a>
                </div>
            </div>

            <div class="card col-3" style="width:20rem;margin-left: 5px;">
                <div class="card-body">
                    <h5 class="card-title">Total Number Of Companies</h5>
                    <p class="card-text"><?php echo mysqli_num_rows($companies); ?></p>
                    <a href="companies.php" class="btn btn-primary">View</a>
                </div>
            </div>

            <div class="card col-3" style="width:20rem;margin-left: 5px;">
                <div class="card-body">
                    <h5 class="card-title">Total Number Of Industries</h5>
                    <p class="card-text"><?php echo mysqli_num_rows($industries); ?></p>
                    <a href="job_category.php" class="btn btn-primary">View</a>
                </div>
            </div>

            <div class="card col-3" style="width:29rem;margin-left: 5px;">
                <div class="card-body">
                    <h5 class="card-title">Total Number Of Job Applications</h5>
                    <p class="card-text"><?php echo mysqli_num_rows($jobs); ?></p>
                    <a href="jobs.php" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>