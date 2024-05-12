<!DOCTYPE html>
<html>

<head>
<title></title>
<style>
.no-notification 
{
  text-align: center;
}
</style>
</head>

<body>
  <?php include('header-stu.php');
  include('menu.php');  ?>

  <div class="container" style="margin-top: 50px;margin-bottom:50px; padding-left: 300px;">
    <table class="table table-bordered">
      <thead>
        <tr class="bg-primary">
          <th>Message</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <form method="GET" action="">
            <?php
            $res = mysqli_query($con, "SELECT * FROM users WHERE id='" . $_SESSION['userLogin'] . "' AND notification IS NOT NULL");
            if (mysqli_num_rows($res) > 0) {
              $data = mysqli_fetch_assoc($res);
              echo "<td>" . $data['notification'] . "</td>";
              echo "<td>" . "<a class='btn btn-danger' href='readnotification.php?id=" . $_SESSION['userLogin'] . "'>Read</a>" . "</td>";
            } else {
              echo "<td colspan='2' class='no-notification'>No Notifications Pending</td>";
            }
            ?>
          </form>
        <tr>
      </tbody>
    </table>
  </div>

</body>

</html>