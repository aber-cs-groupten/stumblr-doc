 <?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED );
$con = mysql_connect ("db.dcs.aber.ac.uk", "admcsgp10", "73GRlj5m");
$db = mysql_query("USE csgp10_13_14", $con);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO description (id,locationID,description)
VALUES
('$_POST[id]','$_POST[locationID]''$_POST[description]')";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error($con));
  }
echo "1 record added";

mysql_close($con);



$res = mysql_query ("select * from description");



echo "<table border='2'>";
echo "<th>ID</th><th>LocationID</th><th>Description</th>";
while ($a = mysql_fetch_array ($res))
{
echo "<tr>";
echo "<td>" . $a["id"] . "</td>";
echo "<td>" . $a["locationID"] . "</td>";
echo "<td>" . $a["description"] . "</td>";
echo "</tr>";

}
echo "</table>";


mysql_close($con);
?>



