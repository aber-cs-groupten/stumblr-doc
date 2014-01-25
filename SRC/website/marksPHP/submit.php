
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
<h2>New Walk</h2>
<form action="insertWalk.php" method="post">
Walk id: <input type="text" name="id">
Title: <input type="text" name="title">
Short description: <input type="text" name="shortDesc">
Long description: <input type="text" name="shortDesc">
Hours: <input type="text" name="hours">
Distance<input type="text" name="distance">
<input name="submit walk" type="submit">
</form>
<?
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



?>


<h2>New Location</h2>
<form action="insertLocation.php" method="post">
location id: <input type="text" name="id">
walk id: <input type="text" name="walkid">
latitude: <input type="text" name="latitude">
longitude: <input type="text" name="longitude">
<input name="submit location" type="submit">
</form>
<?
$res1 = mysql_query ("select * from location");



echo "<table border='2'>";
echo "<th>ID</th><th>WalkID</th><th>Latitude</th><th>Longitude</th>";
while ($a = mysql_fetch_array ($res1))
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
<h2>New Description</h2>
<form action="insertDescription.php" method="post">
description id: <input type="text" name="id">
location id: <input type="text" name="title">
description: <input type="text" name="shortDesc">
<input name="submit description" type="submit">
</form>
<?php
$res2 = mysql_query ("select * from description");



echo "<table border='2'>";
echo "<th>ID</th><th>locationID</th><th>Description</th>";
while ($a = mysql_fetch_array ($res2))
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
</body>

</html>


