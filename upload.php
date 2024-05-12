<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php 
require_once('header-stu.php');
require_once('menu.php');


if (!isset($_SESSION['userLogin'])) {
    header('location:index.php');
    exit(); // Stop executing further code
}

require_once('db.php');

$res = mysqli_query($con, "SELECT resume FROM users WHERE id = '" . $_SESSION['userLogin'] . "'");
$r = mysqli_fetch_assoc($res);

?>

<div class='container' style='padding-top:70px; min-height:400px; padding-left: 300px; '>

    <?php if (empty($r['resume'])): ?>

        <label class='alert alert-warning'> You have Not uploaded the resume yet! </label>
        <br>
        <form method='post' enctype='multipart/form-data'>
            <div class='form-group'>
                <input type='file' required class='form-control' name='file'>
            </div>
            <div class='form-group'>
                <input type='submit' class='btn btn-success' value='Upload resume' name='btn'>
            </div>
        </form>

    <?php else: ?>

        <label class='alert alert-success'> You have already uploaded the resume! </label>
        <br>
        <a href='<?php echo $r['resume']; ?>' class='btn btn-primary'> Download Resume </a>

    <?php endif; ?>

    <?php 
    if (isset($_POST['btn'])) {
        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        if (in_array($ext, ['pdf', 'doc', 'docx'])) {
            $n = $_FILES['file']['name'];
            $destination = 'resumes/' . rand() . time() . $n;
            $source = $_FILES['file']['tmp_name'];
            if (move_uploaded_file($source, $destination)) {
                mysqli_query($con, "UPDATE users SET resume='$destination' WHERE id = '" . $_SESSION['userLogin'] . "' ");
                echo "<div class='alert alert-success'>Resume Uploaded Successfully</div>";
            } else {
                echo "<div class='alert alert-danger'>Failed to upload resume. Please try again.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Please upload PDF or Word documents only.</div>";
        }
    }
    ?>

</div>

</body>
</html>
