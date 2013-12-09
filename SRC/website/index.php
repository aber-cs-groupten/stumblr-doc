<?php
print($_POST['form']);
if(isset($_POST['form'])){
$TOUR_ID = $_POST['form'];
}
else{
}
$lat = '52.4140';
$lng = '-4.0810';
$name = 'scholars';
$descr = 'hello';
	//mysql_connect("localhost", "xxxxx_xxx", "xxxx") or
	//die("Could not connect: " . mysql_error());
	//mysql_select_db("xxxxx_xxxx");
	
	//$result = mysql_query("SELECT * FROM `tours`");
	
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
			
	var contentString = '<div id="content">'+'<p><b>Scholars</b></p>'+'<p>A great place to hav a drink. "Does the best pint of fosters in aberystwyth" - Stephen Mcfarlane</p>';		
	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});
			

	var marker = new google.maps.Marker({
    position: new google.maps.LatLng(52.416693,-4.081102),
    map: map,
	title:'Scholars'
	});
	var marker2 = new google.maps.Marker({
    position: new google.maps.LatLng(52.416045,-4.083872),
    map: map,
	title:'varsity'
	});
	var marker3 = new google.maps.Marker({
    position: new google.maps.LatLng(52.415528,-4.087139),
    map: map,
	title:'varsity'
	});
	google.maps.event.addListener(marker, 'click',function(){
		infowindow.open(map,marker);
	});
	google.maps.event.addListener(marker2, 'click',function(){
		infowindow.open(map,marker2);
	});
	google.maps.event.addListener(marker3, 'click',function(){
		infowindow.open(map,marker3);
	});
	
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
		<h2>Home</h2>
	<table border="1"> 
      <tr> 
	<td valign="top" style="width:250px; text-decoration: underline; color: #4444ff;"> 
	<div id="side_bar2"></div> 
	<form method='post' action='index.php' id='tourSelector' name='form'>
	<?php
	echo"<input value='Tour 1 - Pubs' type='submit' name='1'/></br>";
	echo"<input value='Tour 2 - Seafront' type='submit' name='2'/></br>";
	echo"<input value='Tour 3 - University' type='submit' name='3'/></br>";
	?>
	</form>
	</td>
        <td> 
           <div id="map-canvas" style=" width: 1200px; height: 800px"></div> 
        </td> 
        
      </tr> 
    </table> 
	 
</script> 
</div>

	
	

	
	<div id="divfooter">
	The information provided on this and other pages by me, Stephen Mcfarlane (stm26@aber.ac.uk), is
under my own personal responsibility and not that of Aberystwyth University. Similarly,
any opinions expressed are my own and are in no way to be taken as those of A.U.      
	Website by Stephen McFarlane 2013
	</div>
	
</body>


</html>
