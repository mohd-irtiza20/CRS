<!DOCTYPE html>
<html lang="en">

<head>
	<title>Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<style>
/* Resetting default margin and padding */
body, h1, h4, p {
    margin: 0;
    padding: 0;
}

/* Styling container */
.container {
    background-color: #f9f9f9;
    width: 100%;
    max-width: 1300px;
    margin: 0 auto;
    padding: 50px;
}

/* Styling headings */
h1 {
    text-align: center;
    color: #333;
    margin-top: 50px;
    font-size: 2.5rem;
}

h4 {
    text-align: center;
    margin-top: 20px;
    font-size: 1.5rem;
}

/* Styling card */
.card {
    width: 300px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin: 30px;
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
}

.card-body {
    padding: 20px;
}

.card-title {
    font-size: 1.7rem;
    color: #333;
}

.card-text {
    font-size: 1.9rem;
    color: #333;
    font-weight: bold;
}

/* Styling buttons */
.btn {
    display: inline-block;
    padding: 10px 20px;
    /* margin-top: 20px; */
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;

}

.btn:hover {
    background-color: #0056b3;
}


	</style>
</head>

<body>
	<?php
	include 'menu.php';
	include 'header-stu.php';
	?>
	<div style="background: linear-gradient(to right, #1488cc, #2b32b2); width:1040px;height: 600px; margin-left: 230px">
		<div style="padding: 70px;">
			<h1 style="text-align: center; color:#333; margin-top: 80px;"><span style='color: lightsalmon'>Welcome</span> <?php echo $_SESSION['userName']; ?></h1>
		</div>

	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>