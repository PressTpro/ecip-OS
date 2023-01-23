<?php
include 'mustlogin.php';
include 'css.php';

$link = mysqli_connect("localhost", "root", "", "ecipos");

$user = mysqli_real_escape_string($link, $_POST['username']);
$pass = mysqli_real_escape_string($link, $_POST['password']);

$create = mysqli_query($link, "INSERT INTO accounts (`username`, `password`) VALUES ('$user', '$pass')");

if($create){
  echo "Record created successfully";
  echo "<a href='settings.php'>Return to Settings</a>"
} else {
  echo "Error: " . mysqli_error($link);
}
?>
