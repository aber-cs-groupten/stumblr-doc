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
        zoom: 15,
        mapTypeId: 'roadmap'
      });
      var infoWindow = new google.maps.InfoWindow;

	downloadUrl("XMLcreator.php", function(data) {
	  var xml = data.responseXML;
	  var markers = xml.documentElement.getElementsByTagName("marker");
	
	  for (var i = 0; i < markers.length; i++) { 
		
	    var id = (markers[i].getAttribute("id"));
	    var walkID = parseInt(markers[i].getAttribute("walkID"));
	    var title = markers[i].getAttribute("title");
            var description = markers[i].getAttribute("description");
	    var point = new google.maps.LatLng(
		parseFloat(markers[i].getAttribute("latitude")),
		parseFloat(markers[i].getAttribute("longitude")));
	    var html = "<b>"+title+"</b><p>"+description+"</p>";
	    
	      var marker = new google.maps.Marker({
	      map: map,
	      position: point,
	    icon: "images/mapiconscollection-numbers-fa0505-classic/number_"+i+".png",
		
	      });
	    bindInfoWindow(marker, map, infoWindow,html);
	/*var path = new Array();
	for(var j = 0; j < markers.length; j++){
	var point = new google.maps.LatLng(
		parseFloat(markers[j].getAttribute("latitude")),
		parseFloat(markers[j].getAttribute("longitude")));
	path[j] = point;
	}		
	var pathco = [
	for(var e = 0; e <markers.length; e++){
	new google.maps.LatLng(path[e]),	
	}];
	*/
	}
	
	});
	
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
		<p>This is a walking tour viewer for tours that have been created by our android app stumblr.</p>
		<p>To load a tour select one from the dop down box the left of the map and click load it will load information on that tour and markers and the route on the map.</p>		
		<p>Below is our tour viewer where you can see the route we took to create the root, if you click a marker it will show you information on that place including an image.</p>
<div id="tour">
<?php
while ($a = mysql_fetch_array ($res))
{
echo "<p><b>" . $a["title"] . "</b></p>";
echo "<p>" . $a["shortDescription"] . "</p>";
echo "<p>" . $a["longDescription"] . "</p>";
}
?>
</div>
	<table border="1"> 
      	<tr> 
	<td valign="top" style="width:250px; text-decoration: underline; color: #4444ff;"> 
	<div id="side_bar2"></div> 
	<form class='tourform' method='post' action='home.php'>
	<select name="tours">
	<option value="">Select a tour :</option>
	<?php
	while ($a = mysql_fetch_array ($tours)){
	echo"<option value=" .$a["id"]. ">". $a["title"] ."</option>";
	}?>
	</select>	
	<p></p>
	<input type="submit"/> 
	</form>
	</td>
        <td> 
            <div id="map" style="width: 800px; height: 600px"></div>
        </td> 
      </tr> 
    </table> 
<br/>
<br/>
<br/>	
</div>
<br/>
</div>
<br/>
</body>
</html>
