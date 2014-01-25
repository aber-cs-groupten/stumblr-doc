 <?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED );
$con = mysql_connect ("db.dcs.aber.ac.uk", "admcsgp10", "73GRlj5m");
$db = mysql_query("USE csgp10_13_14", $con);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO walks (id,title,shortDesc,longDesc,hours,distance)
VALUES
('$_POST[id]','$_POST[title]','$_POST[shortDesc]','$_POST[longDesc]','$_POST[hours]','$_POST[distance]')";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error($con));
  }
echo "1 record added";

mysql_close($con);



$res = mysql_query ("select * from walks");



echo "<table border='2'>";
echo "<th>ID</th><th>Title</th><th>Short Description</th><th>Long Description</th><th>Hours</th><th>Distance</th>";
while ($a = mysql_fetch_array ($res))
{
echo "<tr>";
echo "<td>" . $a["id"] . "</td>";
echo "<td>" . $a["title"] . "</td>";
echo "<td>" . $a["shortDesc"] . "</td>";
echo "<td>" . $a["longDesc"] . "</td>";
echo "<td>" . $a["hours"] . "</td>";
echo "<td>" . $a["distance"] . "</td>";
echo "</tr>";

}
echo "</table>";


mysql_close($con);
?>




