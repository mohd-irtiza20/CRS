<html>

<head>
    <title></title>
    
    <?php 
    // include('../all.php');
          // include('../validation.php');
    ?>
    <link rel="stylesheet" type="text/css" href="css/header.css">
</head>

<style>
    body {
  margin: 0;
  padding: 0;
}

#top {
  height: 65px;
  background: #003C43;
  position: fixed;
  right: 0;
  left: 0;
  padding: 10px;
}

#span_txt_top {
  display: flex;
  justify-content: center;
  margin-left: 40px;
  color: white;
  word-spacing: 7px;
  font-size: 30px;
  font-weight: 700;
  letter-spacing: 4px;
}

#logout_a {
  border-radius: 10px;
  text-decoration: none;
  float: right;
  margin-top: -42px;
  font-size: 12pt;
  font-weight: 400;
  color: white;
  background-color: rgb(0, 115, 255);
  padding: 10px 20px;
}

#logout_a:hover {
  color: #1abc9c;
}
</style>

<body>
    <div id="top" style='background-color: #003C43'>
        <span id="span_txt_top">Campus Placement System </span>
        <a href="logout.php" id="logout_a">Logout</a>
    </div>
</body>

</html>