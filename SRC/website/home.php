<?php
session_save_path('');
session_start();
$walkID = 0;
$walkID= $_POST['tours'];
$_SESSION['walkID'] = $_POST['tours'];

error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED );
$con = mysql_connect ("db.dcs.aber.ac.uk", "admcsgp10", "73GRlj5m");
$db = mysql_query("USE csgp10_13_14", $con);
$tours = mysql_query("select * from walks");
$res = mysql_query ("select * from walks where id='$walkID'");
$query = mysql_query ("SELECT * FROM location WHERE walkID='$walkID'");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
	<title>Walking Tour Viewer</title>
	    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
	  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	 <script type="text/javascript">


	function downloadUrl(url,callback) {
	 var request = window.ActiveXObject ?
	     new ActiveXObject('Microsoft.XMLHTTP') :
	     new XMLHttpRequest;

	 request.onreadystatechange = function() {
	   if (request.readyState == 4) {
	     request.onreadystatechange = doNothing;
	     callback(request, request.status);
	   }
	 };

	 request.open('GET', url, true);
	 request.send(null);
	}
    //<![CDATA[
  
    function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(52.4141, -4.08262),
        zoom: 14,
        mapTypeId: 'roadmap'
      });
      var infoWindow = new google.maps.InfoWindow;

	downloadUrl("XMLcreator.php",/*"xmlpath.php",*/ function(data) {
	  var xml = data.responseXML;
	  var markers = xml.documentElement.getElementsByTagName("marker");
	  //var paths = xml.documentElement.getElementsByTagName("path");	
	  for (var i = 0; i < markers.length; i++) { 
		
	    var id = (markers[i].getAttribute("id"));
	    var walkID = parseInt(markers[i].getAttribute("walkID"));
	    var title = markers[i].getAttribute("title");
            var description = markers[i].getAttribute("description");
	    var image = markers[i].getAttribute("image");
	    var point = new google.maps.LatLng(
		parseFloat(markers[i].getAttribute("latitude")),
		parseFloat(markers[i].getAttribute("longitude")));
	if(image == ""){
	 var html = "<b>" + title + "</b><p>" + description + "</p>";
	}   
	else{
	var html = "<b>" + title + "</b><p>" + description + "</p><img src=" + "\"data:image/gif;base64," +  image + "\"></img>";
	}
	if(i==3){
	map.setCenter(point);
	}
	else{
	}
	      var marker = new google.maps.Marker({
	      map: map,
	      position: point,
	    icon: "images/mapiconscollection-numbers-fa0505-classic/number_"+i+".png",
	
	      });
	    bindInfoWindow(marker, map, infoWindow,html);
	}
	//map.setCenter(point);
	 });
	/*var pathco = [];
	for(var j = 0;j < paths.length; j++){
		var lat = parseFloat(paths[j].getAttribute("latitude"));
		var lng = parseFloat(paths[j].getAttribute("longitude"));
		var point = new google.maps.LatLng(lat,lng);
		pathco.push(point);
		
		
	}
	var testpath = [];
	testpath.push(new google.maps.LatLng(52.4141, -4.08262));
	testpath.push(new google.maps.LatLng(52.4159, -4.08279));

	var path = new google.maps.Polyline({
		path: pathco,
		geodesic: true,
		strokeColor: '#FF0000',
		strokeOpacity: 0.7,
		strokeWeight:3
		});
		
	
	});
	path.setMap(map);*/

    }

    function bindInfoWindow(marker, map, infoWindow,html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }
 

    function doNothing() {}

    //]]>
  </script>

<link rel="shortcut icon" href="images/favicon.ico"/> 
</head>
<body style="margin:0px; padding:0px;" onload="load()">
<div id="header">
<h1>Stumblr</h1>	
    </div>	
<div id="divwrapper">
	<div id="divbody">
		<h2>Walking Tour Viewer</h2>
<div id="select" >
<form class='tourform' method='post' action='home.php'>
	<select name="tours">
	<option value="">Select a tour :</option>
	<?php
	while ($a = mysql_fetch_array ($tours)){
	echo"<option value=" .$a["id"]. ">". $a["title"] ."</option>";
	}?>
	</select>	
	<p></p>
	<input type="submit" value="Load Tour"/> 
	</form>
</div>
<div id="tour">
<?php
while ($a = mysql_fetch_array ($res))
{
echo "<p><b>Title : </b>" . $a["title"] . "</p>";
echo "<p><b>Short Decription : </b>" . $a["shortDescription"] . "</p>";
echo "<p><b>long Decription : </b>" . $a["longDescription"] . "</p>";
}
?>
</div>
<div class"clear"></div>
            <div id="map" style="width: 100%; height: 600px; border: 2px solid #000;"></div>

<br/>
<br/>
<div id="bar">
                <?php
                while ($a = mysql_fetch_array($query)) {
                    echo "<div id=pic>";
                    echo "<b class='gallery'>" . $a["title"] . "</b>";
                    echo "<p class='gallery'>" . $a["description"] . "</p>";
                    $data = $a["image"];
                    echo '<img src="data:image/gif;base64,' . $data . '" />';
                    echo "</div>";
                }
                ?>

            </div> 

<br/>	
</div>
<br/>
</div>
<br/>
</body>
</html>
