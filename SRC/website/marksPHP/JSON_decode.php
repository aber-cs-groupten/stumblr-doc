<?php

error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
$con = mysql_connect("db.dcs.aber.ac.uk", "admcsgp10", "73GRlj5m");
$db = mysql_query("USE csgp10_13_14", $con);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$json = file_get_contents('php://input');
$obj = json_decode($json);
//echo $obj;
//echo $json;
//setting variables to add to db-WALK
$title = $obj->{'walkTitle'};
$shortDescription = $obj->{'shortDescription'};
$longDescription = $obj->{'longDescription'};
$hours = $obj->{'walkHours'};
$time = $obj->{'startTime'};
$distance = $obj->{'totalDistance'};

//putting in db
$sql = "INSERT INTO walks (title,shortDescription,longDescription,hours,distance)
VALUES
('$title','$shortDescription','$longDescription','$hours','$distance')";

if (!mysql_query($sql)) {
    //die('Error: ' . mysql_error($con));
}
//echo "1 record added";


$walkID = mysql_insert_id();
//WAYPOINTS
$waypoint = $obj->{'waypoints'};
foreach ($waypoint as $key => $value) {
    $waypointTitle = $value->{'title'};
    $waypointDescription = $value->{'description'};
    $timestamp = $value->{'timestamp'};
    $waypointLat = $value->{'latitude'};
    $waypointLong = $value->{'longitude'};
    $waypointImage = $value->{'image'};
    
    // file_put_contents('json.txt', $waypointTitle);
    //putting data in db
    $sqlWaypoint = "INSERT INTO location (walkID,latitude,longitude,title,description,timestamp,image)
    VALUES
    ('$walkID','$waypointLat','$waypointLong','$waypointTitle','$waypointDescription','$timestamp','$waypointImage')";

    if (!mysql_query($sqlWaypoint)) {
        //die('Error: ' . mysql_error($con));
        file_put_contents('json.txt', $waypointTitle, FILE_APPEND);
        file_put_contents('json.txt', $waypointDescription, FILE_APPEND);
        file_put_contents('json.txt', $timestamp, FILE_APPEND);
        file_put_contents('json.txt', $waypointLat, FILE_APPEND);
        file_put_contents('json.txt', $waypointLong, FILE_APPEND);
    }
}

//Path
$coordinates = $obj->{'walkCoordinates'};
foreach ($coordinates as $currentCoord){
    $coordLat =$currentCoord->{'latitude'};
    $coordLong =$currentCoord->{'longitude'};
    
     $sqlWaypoint = "INSERT INTO path (walkID,latitude,longitude)
    VALUES
    ('$walkID','$coordLat','$coordLong')";
    
     if (!mysql_query($sqlWaypoint)) {
        //die('Error: ' . mysql_error($con));
        file_put_contents('json.txt', $coordLat, FILE_APPEND);
        file_put_contents('json.txt', $coordLong, FILE_APPEND);
    }
     
}




//mysql_close($con);
//file_put_contents('json.txt', $startTime );

/*
  
  walkCoordinates[]
  latitude
  longitude

 

 */
?>