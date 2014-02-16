
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php
 error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED );
$con = mysql_connect ("db.dcs.aber.ac.uk", "admcsgp10", "73GRlj5m");
$db = mysql_query("USE csgp10_13_14", $con);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<head>
<title>Tour Submit</title>
</head>

<body>
    

<h2>Walk</h2>

<?
$res = mysql_query ("select * from walks");



echo "<table border='2'>";
echo "<th>ID</th><th>Title</th><th>Short Description</th><th>Long Description</th><th>Hours</th><th>Distance</th>";
while ($a = mysql_fetch_array ($res))
{
echo "<tr>";
echo "<td>" . $a["id"] . "</td>";
echo "<td>" . $a["title"] . "</td>";
echo "<td>" . $a["shortDescription"] . "</td>";
echo "<td>" . $a["longDescription"] . "</td>";
echo "<td>" . $a["hours"] . "</td>";
echo "<td>" . $a["distance"] . "</td>";
echo "</tr>";

}
echo "</table>";



?>


<h2>Location</h2>
<?
$res1 = mysql_query ("select * from location");



echo "<table border='2'>";
echo "<th>ID</th><th>WalkID</th><th>Title</th><th>Latitude</th><th>Longitude</th><th>Description</th><th>Timestamp</th><th>Image</th>";
while ($a = mysql_fetch_array ($res1))
{
echo "<tr>";
echo "<td>" . $a["id"] . "</td>";
echo "<td>" . $a["walkID"] . "</td>";
echo "<td>" . $a["title"] . "</td>";
echo "<td>" . $a["latitude"] . "</td>";
echo "<td>" . $a["longitude"] . "</td>";
echo "<td>" . $a["description"] . "</td>";
echo "<td>" . $a["timestamp"] . "</td>";
$data= $a["image"];
echo  "<td>" . '<img src="data:image/gif;base64,' . $data . '" />'. "</td>";
echo "</tr>";

}
echo "</table>";



?>
<h2>Path</h2>
<?
$res2 = mysql_query ("select * from path");



echo "<table border='2'>";
echo "<th>ID</th><th>WalkID</th><th>Latitude</th><th>Longitude</th>";
while ($a = mysql_fetch_array ($res2))
{
echo "<tr>";
echo "<td>" . $a["id"] . "</td>";
echo "<td>" . $a["walkID"] . "</td>";
echo "<td>" . $a["latitude"] . "</td>";
echo "<td>" . $a["longitude"] . "</td>";
echo "</tr>";

}
echo "</table>";



?>
</body>

</html>


