<!DOCTYPE html>
<html>

<head>
    <title></title>

</head>

<body>
    <?php  
	  include 'menu.php';
	  include 'header.php';
	?>
    <div style="background-color: whitesmoke; width:1030px;height: 700px;margin-left: 230px;">
        <div style=" padding:90px;">
            <h1 style="text-align: center; font-family: 'Lobster', cursive;color: #333"> Company Regristration Requests
            </h1><br />
            <?php include('../db.php');
            $res=mysqli_query($con, "select * from company_login where status='Pending'");
              if(mysqli_num_rows($res)>0)
              {
                echo "<table class='table table-striped table-bordered'>";
                  echo "<tr class='success'>";
                    echo "<th>"."Company Name"."</th>";
                    echo "<th>"."Email Id"."</th>";
                    echo "<th>"." Contact"."</th>";
                    echo "<th>"." About Company"."</th>";
                    echo "<th>"." Current Status"."</th>";
                    echo "<th>"." Confirm "."</th>";
                  echo "</tr>";
              	 while($r=mysqli_fetch_assoc($res))
              	 {
                  echo "<tr>";
              	    echo "<td>". $r['name']."</td>";
              	 	  echo "<td>".$r['email']."</td>";
                    echo "<td>".$r['phone']."</td>";
                    echo "<td>".$r['about']."</td>";
                    echo "<td>".$r['status']."</td>";
              	    echo   "<td>". "<a class='btn btn-success' href='confirm-company.php?id=".$r['id']."'> Confirm </a>"."</td>";
              	  echo "</tr>";
              	 }
                echo "</table>";
              }
            ?>
        </div>
    </div>
</body>

</html>
<style>
body {
    background-color: whitesmoke;
}
</style>