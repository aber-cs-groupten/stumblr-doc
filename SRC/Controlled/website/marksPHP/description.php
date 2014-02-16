<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED );
$con = mysql_connect ("db.dcs.aber.ac.uk", "admcsgp10", "73GRlj5m");
$db = mysql_query("USE csgp10_13_14", $con);
//$db = mysql_select_db('csgp10_13_14', $con) or die(mysql_error());
$desc = $_POST["location"];

?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<head>
<title>Descriptions</title>
<div id="header">
<h1>Stumblr</h1>
</div>
</head>
<body>

<div id="divwrapper">
	<div id="divbody">

<?php

$query = "SELECT * FROM description WHERE locationID='$desc'";
$result = mysql_query($query) or die(mysql_error());




//$res = mysql_query ("select * from location where walkID equals $walk");



echo "<table border='2'>";
echo "<th>Description</th>";
while ($a = mysql_fetch_array ($result))
{
echo "<tr>";
//echo  " <form id=\"viewlocation\" method=\"post\" action=\"description.php\"><tr>";
echo "<td>" . $a["description"] . "</td>";


//echo "<td><button value =".$a['id']." name=\"location\">View Description</button></td></form>";



echo "</tr>";

}
echo "</table>";



  ?>
</div>

</body>
</html>
