<?php
$user = 'root';
$pass = '123456';
echo '<pre>';

$con = mysqli_connect("mysql",$user,$pass);
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

// some code

mysqli_close($con);


?>