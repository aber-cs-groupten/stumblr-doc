<?php
$walkID = 1;
if(isset($_POST['tour'])){
	$walkID = $_POST['tour'];
}
else{
}
$con=mysqli_connect("db.dcs.aber.ac.uk","admcsgp10","73GRlj5m","csgp10_13_14");
$db = mysql_select_db('csgp10_13_14', $con) or die(mysql_error());
$tour=mysqli_query ($db, "select * from walks where id is $walkID");


$marker[] = 0;
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
	<title>Walking Tour Viewer</title>
	    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
	  <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?sensor=true">
    </script>
	<script type="text/javascript">

	
      function initialize() {
		
			var mapOptions = {
			  center: new google.maps.LatLng(52.414265,-4.081807),
			  zoom: 16
			};
			var map = new google.maps.Map(document.getElementById("map-canvas"),
			    mapOptions);
		
			var marker = new google.maps.Marker({
		    	position: new google.maps.LatLng(52.416693,-4.081102),
		   	map: map,
			title:'Scholars'
			});
			var contentString = '<div id="content">'+'<p><b>Scholars</b></p>'+'<p>A great place to hav a drink. "Does the best pint of fosters in aberystwyth" - Stephen Mcfarlane</p>';		
			var infowindow = new google.maps.InfoWindow({
				content: contentString
			});
			google.maps.event.addListener(marker, 'click',function(){
				infowindow.open(map,marker);
			});
		//}
	
	
	var pathco = [
		new google.maps.LatLng(52.416693,-4.081102),
		new google.maps.LatLng(52.416745,-4.081153),
		new google.maps.LatLng(52.416032,-4.082891),
		new google.maps.LatLng(52.415953,-4.083277),
		new google.maps.LatLng(52.415855,-4.083459),
		new google.maps.LatLng(52.416889,-4.084779),
		new google.maps.LatLng(52.416117,-4.085745),
		new google.maps.LatLng(52.415711,-4.08641),
		new google.maps.LatLng(52.415528,-4.087139)];
		
	var path = new google.maps.Polyline({
		path: pathco,
		geodesic: true,
		strokeColor: '#FF0000',
		strokeOpacity: 0.7,
		strokeWeight:2});
	path.setMap(map);
}
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>


<link rel="shortcut icon" href="images/favicon.ico"> 
</head>
<body style="margin:0px; padding:0px;" onload="initialize()">
<div id="header">
<h1>Stumblr</h1>	
    </div>	
<div id="divwrapper">
	<div id="divbody">
		<h2>Walking Tour Viewer</h2>
	
	<?php 

		while ($a = mysqli_fetch_array($tour)){
			echo "<fieldset>";
			echo "<p>Tour name: ".$a["title"]."</p>";
			echo "<p>".$a["shortDesc"]."</p>";			
			echo "<p>".$a["longDesc"]."</p>";
			echo "<p>Hours: ".$a["hours"]."</p>";
			echo "<p>Distance: ".$a["distance"]."</p>";
			echo "</fieldset>";		
		}

	?>
	<table border="1"> 
      <tr> 
	<td valign="top" style="width:250px; text-decoration: underline; color: #4444ff;"> 
	<div id="side_bar2"></div> 
	
	<form class='tourform' method='post' action='index.php' id='tourSelector' >
	<input type='checkbox' name="Pubs" value="1">Pubs</br>
	<input type='checkbox' name="Seafront" value="2">Seafront</br>
	<input type='checkbox' name="University" value="3">University
	<p></p>
	<input type="submit" name="setTour"  /> 
	</form>
	
	</td>
        <td> 
           <div id="map-canvas"></div> 
        </td> 
        
      </tr> 
    </table> 
</div>
	<div id="divfooter">
	The information provided on this and other pages by me, Stephen Mcfarlane (stm26@aber.ac.uk), is
under my own personal responsibility and not that of Aberystwyth University. Similarly,
any opinions expressed are my own and are in no way to be taken as those of A.U.      
	Website by Stephen McFarlane 2013
	</div>
</body>
</html>
