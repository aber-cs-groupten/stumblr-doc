<?php
$walkID = 0;
if(isset($_POST['tour'])){
	$walkID = $_POST['tour'];
}
else{
}
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED );
$con = mysql_connect ("db.dcs.aber.ac.uk", "admcsgp10", "73GRlj5m");
$db = mysql_query("USE csgp10_13_14", $con);
$res = mysql_query ("select * from walks where id='$walkID'");
$query = mysql_query ("SELECT * FROM location WHERE walkID='$walkID'");
$query2 = mysql_query ("SELECT * FROM description WHERE walkID='$walkID'");


$marker[] = 0;
 ?>


//
//    HTML code that generates webpage
//    HTML includes the google map functionality
//


<?php
while ($a = mysql_fetch_array ($res))
{
	echo "<p>" . $a["id"] . "</p>";
echo "<p>" . $a["title"] . "</p>";
echo "<p>" . $a["shortDesc"] . "</p>";
echo "<p>" . $a["longDesc"] . "</p>";
}
while ($a = mysql_fetch_array ($query)){
	echo "<p>" . $a["id"] . "</p>";
echo "<p>" . $a["latitude"] . "</p>";
echo "<p>" . $a["longitude"] . "</p>";

}
while ($a = mysql_fetch_array ($query2)){
	echo "<p>" . $a["id"] . "</p>";

echo "<p>" . $a["description"] . "</p>";
}
?>

//
//	HTML code that generates table to structure the page
//
//

	
