<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <?php 
      include ('header.php');
      include('db.php');
      $res=mysqli_query($con,"select * from company_login where id='".$_GET["id"]."'");
      $r=mysqli_fetch_assoc($res);
    ?>

    <div class="head">
        <h1>Company Details</h1>
    </div>

    <div class="contain" style="background-color: white; height: auto; padding: 20px;padding-bottom: 70px; margin-top: 60px;margin-bottom: 60px;"><br />
        <div style="padding: 0px 60px 0px 60px;">
            <?php  
              echo "<span style='color:#333;font-size:18px;'>". "Company Name"."</span>". "<br/>";
              echo "<span class='s_name' style='color: #666666;line-height:35px; '>" . $r["name"]." </span>"."<br/>";
            ?>

            <span style="color: #333;font-weight: 400;font-size:18px;">Company Description</span><br />
            <p style="color: #666666;text-align: justify;"> <?php echo $r['about']; ?></p>

            <span style="color: #333;font-weight: 400;font-size:18px;">Email </span><br />
            <p style="color: #666666;text-align: justify;"> <?php echo $r['email'] ?></p>

            <span style="color: #333;font-weight: 400;font-size:18px;"> Contact </span><br />
            <p style="color: #666666;text-align: justify;"> <?php echo $r['phone'] ?></p>

            <h2 style="text-align: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:#17a2b8"> Jobs </h2>
            <?php  
              $res=mysqli_query($con, "select * from jobs where company_id = '".$_GET['id']."' and approved ='Posted'");
               
                echo "<table class='table table-hover table-bordered' style='border: 1.5px solid #1488cc;  width: 80%;'>";
				  echo "<tr class='info'>";
				  echo "<td style='font-size:20px; letter-spacing:2px; border: 1.5px solid #1488cc; background-color: #17a2b8;'> Job title</td>";
				  echo "<td style='font-size:20px; letter-spacing:2px; border: 1.5px solid #1488cc; background-color: #17a2b8;'> Company Info</td>";
				  echo "</tr>";

				  while($record=mysqli_fetch_assoc($res))       
                  {
				  	echo "<tr>";
				    echo "<td  style='border: 1.5px solid #1488cc'> ".  $record["title"] ."</td>";
				    echo "<td>"."<a href='job-details.php?id=".$record['id']."'>  Details</a>"."</td>";
				    echo "</tr>";
				   }
				echo "</table>";
           ?>
        </div>
    </div>

</body>

<style type="text/css">
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #1488cc, #2b32b2);
    margin: 0;
    padding: 0;
}

.contain {
    background-color: #fff;
    padding: 20px;
    margin: 60px auto;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    max-width: 65%;
    animation: fadeIn 1s ease-out;
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

div h1 {
    text-align: center;
    font-size: 36px;
    color: white;
    display: flex;
    justify-content: center;
    margin-top: 50px;
}

h2 {
    font-size: 30px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #17a2b8;
    text-align: center;
    letter-spacing: 1px;
}

.info {
    background-color: #17a2b8;
    color: #fff;
}

table {
    width: 80%;
    border-collapse: collapse;
    margin-left: 60px;
}

.info td {
    font-size: 20px;
    font-weight: 600;
}

table td,
table th {
    padding: 10px;
    text-align: center;
    font-size: 18px;
}

table th {
    background-color: #17a2b8;
    color: #fff;
}

a {
    color: #17a2b8;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

.fadeInUp {
    animation: fadeInUp 1s ease-out;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>