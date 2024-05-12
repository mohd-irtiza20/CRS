<?php

$con = mysqli_connect('localhost', 'root', '', 'campus');

// Check connection
if (!$con) {
  die('Connection failed: ' . mysqli_connect_error());
}

// Connection successful, you can proceed with your queries
