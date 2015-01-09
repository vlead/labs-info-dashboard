<?php
$con = mysqli_connect('localhost','root','thinklikeengineers','vlabs_database');
if (!$con) {
  echo "<br><font color='red'>";
  die('Could not connect ' . mysqli_error($con)."to database");
  exit();
}
mysqli_select_db($con,"vlabs_database");
?>
