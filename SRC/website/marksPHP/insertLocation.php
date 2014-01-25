 <?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED );
$con = mysql_connect ("db.dcs.aber.ac.uk", "admcsgp10", "73GRlj5m");
$db = mysql_query("USE csgp10_13_14", $con);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO location (id, walkID, latitude, longitude)
VALUES
('$_POST[id]','$_POST[walkID]','$_POST[latitude]','$_POST[longitude]')";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>

