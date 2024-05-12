<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

  <body>

    <?php
     session_start();
	   if(!isset($_SESSION['userLogin']))
     {
    ?>

    <script>
    alert('Please Login First');
    document.location = ("index.php");
    </script>

      <?php }
       else
       {
        include('db.php');
        mysqli_query($con, "insert into applications (user_id,job_id) values ('".$_SESSION['userLogin']."', '".$_GET['id']."')"); 
      ?>

    <script>
    alert('Thank for applying for this job. You will get a call from our side very soon...!');
    document.location = ("my-account.php");
    </script>

    <?php } ?>
  </body>

</html>