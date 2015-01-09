<link rel="stylesheet" href="test.css" type="text/css">
<?php
include('config.php');
$a=$_GET['id'];
$b=substr($a,1);
$c=strrev($b);
$d=substr($c,1);
$e=strrev($d);
?>
<a href="javascript:goBack()" class="myButton">Back</a>

<script>
function goBack()
{
    window.history.back()
}
</script>
<link rel="stylesheet" href="test.css" type="text/css">
<?php
include("config.php");
mysqli_select_db($con,"vlabs_database");
$sql="SELECT * FROM labs WHERE discipline_id IN (select id from disciplines where discipline_name='$e')";

$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);
//echo "Total Number Of Institutes:".$two;
echo "<br><br>";
echo "<table border='1' style='width:38%'>";
echo "<span class='tab'> Total number of labs in <font color='blue'>$e </font> discipline : " .$two."</span><br><br><br>";
echo "<tr><th>LAB ID</th><th>LAB NAME</th></tr>";

while($row = mysqli_fetch_array($result))
{
 echo "<tr align='left'><td>$row[lab_id]</td><td><a href='test1.php?id=\"$row[lab_name]\"'  value=\"$row[lab_name]\">".$row[lab_name]."</a></td></tr>";
  
}
echo "</table><br><br>";
mysqli_close($con);
?> 
