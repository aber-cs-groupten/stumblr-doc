<?php

$conn=mysqli_connect("host=db.dcs.aber.ac.uk port=5432 dbname=csgp10_13_14 user=admcsgp10 password=73GRlj5m");
$res = mysql_query ($conn, 'select * from walks');



echo "<table border='2'>";
//echo "<th>Manufacturer</th><th>Model</th><th>Price</th>";
while ($a = pg_fetch_array ($res))
{
echo "<tr>";

echo  " <form id=\"viewmore\" method=\"post\" action=\"details.php\"><tr>";
echo "<td>" . $a["title"] . "</td>";
echo "<td><button value =".$a['ref']." name=\"more\">View Details</button></td></form>";


echo "</tr>";

}
echo "</table>";



    ?>





