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
    <div style="background-color: whitesmoke; width:1200px;height: 1000px;margin-left: 230px;">
        <div style=" padding:90px;">
            <div style="height: 70px;"></div>
            <h1 style="text-align: center;">Change Job Post Status</h1><br />
            <form method='post'>
                <select name='status'>
                    <option value='Posted'>Posted</option>
                    <option value='Pending'>Pending</option>
                </select>
                <input type="submit" name="btn" value='Change Status' class='btn btn-success'>
            </form>
        </div>
    </div>
</body>
<!-- Here i made change -->
<?php include('../db.php');
	if(isset($_POST['btn'])) 
   {
    	mysqli_query($con, "update  jobs set approved='".$_POST['status']."' where id ='".$_GET['id']."'");
    	header('location:jobs.php');
    }
?>

</html>
<style>
body {
    background-color: whitesmoke;
    text-transform: capitalize;
}

select {
    height: 35px;
    width: 450px;
    padding: 6px;
    text-indent: 12px;
    outline: none;
    font-size: 13px;
    border-radius: 2px;
    border: 1px solid #cecece;
    margin-top: 9px;
    margin-left: 20%
}
</style>