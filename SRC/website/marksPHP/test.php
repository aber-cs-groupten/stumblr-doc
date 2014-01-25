<?
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED );
$con = mysql_connect ("db.dcs.aber.ac.uk", "admcsgp10", "73GRlj5m");
$db = mysql_query("USE csgp10_13_14", $con);
//$db = mysql_select_db('csgp10_13_14', $con) or die(mysql_error());
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<head>
<title>Test</title>
<div id="header">
<h1>Stumblr</h1>
</div>
</head>
<body>
<div id="divwrapper">
	<div id="divbody">

<?php
$res = mysql_query ("select * from walks");



echo "<table border='2'>";
echo "<th>Title</th><th>Short Description</th><th>Long Description</th>";
while ($a = mysql_fetch_array ($res))
{
echo "<tr>";

echo  " <form id=\"viewmore\" method=\"post\" action=\"details.php\"><tr>";
echo "<td>" . $a["id"] . "</td>";
echo "<td>" . $a["title"] . "</td>";
echo "<td>" . $a["shortDesc"] . "</td>";
echo "<td>" . $a["longDesc"] . "</td>";
echo "<td><button value =".$a['id']." name=\"more\">View Tour</button></td></form>";


echo "</tr>";

}
echo "</table>";



    ?>
</div>

</body>
</html>
