<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        Dashboard
    </title>
    <meta charset="utf-8">
</head>

<body>
    <div class='container-fluid'>
        <?php require_once( 'header.php') ?>
        <div class='row' style='margin-top: 70px;'>
            <div style='float: left'>
                <?php require_once( 'menu.php') ?>
            </div>
            <div style='width:80%;background-color: #fff;height: auto; float: right;padding: 20px; '>
                <div>
                    <h1 style='padding: 10px; text-align: center;'>Add New Job Industry/Category</h1>
                </div>
                <form method="post">
                    <div class="form-group">
                        <label>
                            Industry Name
                        </label>
                        <input type="text" name="cname" class="form-control">
                    </div>
                    <input type="submit" name="btn" value="Add Industry">
                </form>
                <?php if (isset($_POST[ 'btn'])) { require_once( '../db.php'); mysqli_query($con,
						"insert into category (name) values('" . $_POST[ 'cname'] . "')"); echo "<div>" . "Added Successfully" .
						"</div>"; } ?>
            </div>
        </div>
    </div>
</body>
</html>
