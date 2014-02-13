<?php 
session_save_path('');
session_start();
 
$walk = $_SESSION["walkID"];



// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("path");
$parnode = $dom->appendChild($node); 

// Opens a connection to a MySQL server

 error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED );
$con = mysql_connect ("db.dcs.aber.ac.uk", "admcsgp10", "73GRlj5m");
$db = mysql_query("USE csgp10_13_14", $con);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Select all the rows in the markers table

$query = "SELECT * FROM path where walkID = '$walk'";
$result = mysql_query($query);
if (!$result) {  
  die('Invalid query: ' . mysql_error());
} 


header("Content-type: text/xml"); 

// Iterate through the rows, adding XML nodes for each

while ($row = @mysql_fetch_assoc($result)){  
  // ADD TO XML DOCUMENT NODE  
  $node = $dom->createElement("path");  
  $newnode = $parnode->appendChild($node);   
  $newnode->setAttribute("WalkID", $row['walkID']);  
  $newnode->setAttribute("latitude", $row['latitude']);  
  $newnode->setAttribute("longitude", $row['longitude']);

} 

echo $dom->saveXML();

   
?>
