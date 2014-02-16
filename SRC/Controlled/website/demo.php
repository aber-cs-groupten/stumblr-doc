<?php
$walkID = 0;
if(isset($_POST['tour'])){
	$walkID = $_POST['tour'];
}
else{
}
	
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
	var side_bar_html = "";
	var styleIcon = new StyledIcon(StyledIconTypes.BUBBLE,{color:"#ff0000",text:"Stop"});
	
 
      function initialize() {
		var walkID = <?php echo $walkID;?>
		
		var mapOptions = {
		  center: new google.maps.LatLng(52.414265,-4.081807),
		  zoom: 14
		};
		var map = new google.maps.Map(document.getElementById("map-canvas"),
		    mapOptions);
	if(walkID == 1){
		var mapOptions = {
		  center: new google.maps.LatLng(52.414265,-4.081807),
		  zoom: 16
		};
		var map = new google.maps.Map(document.getElementById("map-canvas"),
		    mapOptions);
		var marker = new google.maps.Marker({
		position: new google.maps.LatLng(52.416693,-4.081102),
	   	map: map,
		icon: 'images/blue_MarkerA.png',
		animation: google.maps.Animation.DROP,
		title:'Scholars'
		});
		var contentString = '<div id="content">'+'<p><b>Scholars</b></p>'+'<p>A great place to have a drink. "Does the best pint of fosters in aberystwyth" - Stephen Mcfarlane</p>';		
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		google.maps.event.addListener(marker, 'click',function(){
			infowindow.open(map,marker);
		});
		google.maps.event.addListener(marker, 'click', toggleBounce);

		var marker2 = new google.maps.Marker({
	    	position: new google.maps.LatLng(52.416102,-4.083927),
	   	map: map,
		title:'Varsity'
		});
		var contentString2 = '<div id="content">'+'<p><b>Varsity</b></p>'+'<p>A good place for food and drink but quite exspensive for students.</p>';		
		var infowindow2 = new google.maps.InfoWindow({
			content: contentString2
		});
		google.maps.event.addListener(marker2, 'click',function(){
			infowindow2.open(map,marker2);
		});
		var marker3 = new google.maps.Marker({
	    	position: new google.maps.LatLng(52.415603,-4.087259),
	   	map: map,
		title:'inn on'
		});
		var contentString3 = '<div id="content">'+'<p><b>Inn on the pier</b></p>'+'<p>A great place for a drink, great atmosphere for sports.<p>'+'<img src="images/pier.jpg" alt="inn on">';		
		var infowindow3 = new google.maps.InfoWindow({
			content: contentString3
		});
		google.maps.event.addListener(marker3, 'click',function(){
			infowindow3.open(map,marker3);
		});
	
	
		var marker4 = new google.maps.Marker({
	    	position: new google.maps.LatLng(52.413924,-4.086454),
	   	map: map,
		title:'Academy'
		});
		var contentString4 = '<div id="content">'+'<p><b>Academy</b></p>'+'<p>Do some great shots and some good pints.</p>';		
		var infowindow4 = new google.maps.InfoWindow({
			content: contentString4
		});
		google.maps.event.addListener(marker4, 'click',function(){
			infowindow4.open(map,marker4);
		});
		var marker5 = new google.maps.Marker({
	    	position: new google.maps.LatLng(52.41397,-4.086856),
	   	map: map,
		title:'Angel'
		});
		var contentString5 = '<div id="content">'+'<p><b>Angel</b></p>'+'<p>Do some great house music nights</p>';		
		var infowindow5 = new google.maps.InfoWindow({
			content: contentString5
		});
		google.maps.event.addListener(marker5, 'click',function(){
			infowindow5.open(map,marker5);
		});
		var marker6 = new google.maps.Marker({
	    	position: new google.maps.LatLng(52.411951,-4.085285),
	   	map: map,
		title:'Rummers'
		});
		var contentString6 = '<div id="content">'+'<p><b>Rummers</b></p>'+'<p>great pub near the harbour</p>';		
		var infowindow6 = new google.maps.InfoWindow({
			content: contentString6
		});
		google.maps.event.addListener(marker6, 'click',function(){
			infowindow6.open(map,marker6);
		});
		var marker7 = new google.maps.Marker({
	    	position: new google.maps.LatLng(52.41422,-4.082302),
	   	map: map,
		icon: 'images/blue_MarkerB.png',
		title:'Cambrian'
		});
		var contentString7 = '<div id="content">'+'<p><b>Cambrian</b></p>'+'<p>Do Some great cocktails</p>'+'<p>You have to try the deathstar cocktail</p>';		
		var infowindow7 = new google.maps.InfoWindow({
			content: contentString7
		});
		google.maps.event.addListener(marker7, 'click',function(){
			infowindow7.open(map,marker7);
		});
		var pathco = [
		new google.maps.LatLng(52.416693,-4.081102),
		new google.maps.LatLng(52.416745,-4.081153),
		new google.maps.LatLng(52.416032,-4.082891),
		new google.maps.LatLng(52.415953,-4.083277),
		new google.maps.LatLng(52.415855,-4.083459),
		new google.maps.LatLng(52.416093,-4.083761),
		new google.maps.LatLng(52.416102,-4.083927),
		new google.maps.LatLng(52.416133,-4.083804),
		new google.maps.LatLng(52.416889,-4.084779),
		new google.maps.LatLng(52.416117,-4.085745),
		new google.maps.LatLng(52.415711,-4.08641),
		new google.maps.LatLng(52.415528,-4.087139),
		new google.maps.LatLng(52.415603,-4.087259),
		new google.maps.LatLng(52.415328,-4.087001),
		new google.maps.LatLng(52.414961,-4.086594),
		new google.maps.LatLng(52.414186,-4.085907),
		new google.maps.LatLng(52.414097,-4.086004),
		new google.maps.LatLng(52.413947,-4.086561),
		new google.maps.LatLng(52.413924,-4.086454),
		new google.maps.LatLng(52.413947,-4.086561),
		new google.maps.LatLng(52.41397,-4.086856),
		new google.maps.LatLng(52.413947,-4.086561),
		new google.maps.LatLng(52.414097,-4.086004),
		new google.maps.LatLng(52.413774,-4.085784),
		new google.maps.LatLng(52.413031,-4.085612),
		new google.maps.LatLng(52.412046,-4.085161),
		new google.maps.LatLng(52.411951,-4.085285),
		new google.maps.LatLng(52.412087,-4.084904),
		new google.maps.LatLng(52.412561,-4.084067),
		new google.maps.LatLng(52.413654,-4.083321),
		new google.maps.LatLng(52.41422,-4.082302) ];
	}
	if(walkID == 2){
		var mapOptions = {
		  center: new google.maps.LatLng(52.414265,-4.081807),
		  zoom: 14
		};
		var map = new google.maps.Map(document.getElementById("map-canvas"),
		    mapOptions);

		var marker = new google.maps.Marker({
	    	position: new google.maps.LatLng(52.408275,-4.089496),
	   	map: map,
		icon: 'images/blue_MarkerA.png',
		animation: google.maps.Animation.DROP,
		title:'Harbour'
		});
		var contentString = '<div id="content">'+'<p><b>Harbour</b></p>'+'<p>A great view of the sea and the harbour.</p>';		
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		google.maps.event.addListener(marker, 'click',function(){
			infowindow.open(map,marker);
		});
		google.maps.event.addListener(marker, 'click', toggleBounce);

		var marker2 = new google.maps.Marker({
	    	position: new google.maps.LatLng(52.410739,-4.089112),
	   	map: map,
		title:'Beach'
		});
		var contentString2 = '<div id="content">'+'<p><b>Beach</b></p>'+'<p>This is a very nice beach to walk along.</p>';		
		var infowindow2 = new google.maps.InfoWindow({
			content: contentString2
		});
		google.maps.event.addListener(marker2, 'click',function(){
			infowindow2.open(map,marker2);
		});
		var marker3 = new google.maps.Marker({
	    	position: new google.maps.LatLng(52.414011,-4.091596),
	   	map: map,
		title:'view'
		});
		var contentString3 = '<div id="content">'+'<p><b>Coastline view</b></p>'+'<p>From here you can see the whole seafront from the harbour up to constitution hill.</p>';		
		var infowindow3 = new google.maps.InfoWindow({
			content: contentString3
		});
		google.maps.event.addListener(marker3, 'click',function(){
			infowindow3.open(map,marker3);
		});
	
	
		var marker4 = new google.maps.Marker({
	    	position: new google.maps.LatLng(52.415575,-4.087433),
	   	map: map,
		title:'Pier'
		});
		var contentString4 = '<div id="content">'+'<p><b>The Pier</b></p>'+'<p>Lovelly view from the end of the pier.</p>';		
		var infowindow4 = new google.maps.InfoWindow({
			content: contentString4
		});
		google.maps.event.addListener(marker4, 'click',function(){
			infowindow4.open(map,marker4);
		});
		var marker5 = new google.maps.Marker({
	    	position: new google.maps.LatLng(52.417585,-4.084689),
	   	map: map,
		title:'Bandstand'
		});
		var contentString5 = '<div id="content">'+'<p><b>Bandstand</b></p>'+'<p>Its a bandstand.</p>'+'<img src="images/bandstand.jpg" alt="bandstand">';		
		var infowindow5 = new google.maps.InfoWindow({
			content: contentString5
		});
		google.maps.event.addListener(marker5, 'click',function(){
			infowindow5.open(map,marker5);
		});
		var marker6 = new google.maps.Marker({
	    	position: new google.maps.LatLng(52.42204,-4.08488),
	   	map: map,
		icon: 'images/blue_MarkerB.png',
		title:'Constitution hill'
		});
		var contentString6 = '<div id="content">'+'<p><b>Constitution Hill</b></p>'+'<p>End of the coastline in aberytwyth has a path up to the top of constitution hill</p>';		
		var infowindow6 = new google.maps.InfoWindow({
			content: contentString6
		});
		google.maps.event.addListener(marker6, 'click',function(){
			infowindow6.open(map,marker6);
		});
		
		
		var pathco = [
		new google.maps.LatLng(52.408275,-4.089496),
		new google.maps.LatLng(52.409063,-4.089),
		new google.maps.LatLng(52.410778,-4.088721),
		new google.maps.LatLng(52.410739,-4.089112),
		new google.maps.LatLng(52.410778,-4.088721),
		new google.maps.LatLng(52.412061,-4.08967),
		new google.maps.LatLng(52.414011,-4.091596),
		new google.maps.LatLng(52.414096,-4.089675),
		new google.maps.LatLng(52.414456,-4.089085),
		new google.maps.LatLng(52.415254,-4.088474),
		new google.maps.LatLng(52.415575,-4.087433),
		new google.maps.LatLng(52.416524,-4.085373),
		new google.maps.LatLng(52.417585,-4.084689),
		new google.maps.LatLng(52.418807,-4.084526),
		new google.maps.LatLng(52.41971,-4.084601),
		new google.maps.LatLng(52.42204,-4.08488) ];
	}
	if(walkID == 3){
		var mapOptions = {
		  center: new google.maps.LatLng(52.416625,-4.065206),
		  zoom: 16
		};
		var map = new google.maps.Map(document.getElementById("map-canvas"),
		    mapOptions);

		var marker = new google.maps.Marker({
	    	position: new google.maps.LatLng(52.41816,-4.065774),
	   	map: map,
		icon: 'images/blue_MarkerA.png',
		animation: google.maps.Animation.DROP,
		title:'Main entrance'
		});
		var contentString = '<div id="content">'+'<p><b>Main entrance</b></p>'+'<p>The main entrance of Aberystwyth Univerity.</p>'+'<img src="images/mainentrance.jpg" alt="entrance">';		
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		google.maps.event.addListener(marker, 'click',function(){
			infowindow.open(map,marker);
		});
		google.maps.event.addListener(marker, 'click', toggleBounce);

		var marker2 = new google.maps.Marker({
	    	position: new google.maps.LatLng(52.415801,-4.063671),
	   	map: map,
		title:'Hugh owen library'
		});
		var contentString2 = '<div id="content">'+'<p><b>Hugh owen library</b></p>'+'<p>.</p>';		
		var infowindow2 = new google.maps.InfoWindow({
			content: contentString2
		});
		google.maps.event.addListener(marker2, 'click',function(){
			infowindow2.open(map,marker2);
		});
		var marker3 = new google.maps.Marker({
	    	position: new google.maps.LatLng(52.41529,-4.063296),
	   	map: map,
		title:'Students union'
		});
		var contentString3 = '<div id="content">'+'<p><b>Student Union</b></p>'+'<p>A great place to have somthing to eat and have a drink.</p>';		
		var infowindow3 = new google.maps.InfoWindow({
			content: contentString3
		});
		google.maps.event.addListener(marker3, 'click',function(){
			infowindow3.open(map,marker3);
		});
	
	
		var marker4 = new google.maps.Marker({
	    	position: new google.maps.LatLng(52.415925,-4.065667),
	   	map: map,
		title:'Physics building'
		});
		var contentString4 = '<div id="content">'+'<p><b>Physics building</b></p>'+'<p></p>';		
		var infowindow4 = new google.maps.InfoWindow({
			content: contentString4
		});
		google.maps.event.addListener(marker4, 'click',function(){
			infowindow4.open(map,marker4);
		});
		var marker5 = new google.maps.Marker({
	    	position: new google.maps.LatLng(52.416226,-4.065474),
	   	map: map,
		title:'Computer science department'
		});
		var contentString5 = '<div id="content">'+'<p><b>Computer science department</b></p>'+'<p>a great department.</p>';		
		var infowindow5 = new google.maps.InfoWindow({
			content: contentString5
		});
		google.maps.event.addListener(marker5, 'click',function(){
			infowindow5.open(map,marker5);
		});
		var marker6 = new google.maps.Marker({
	    	position: new google.maps.LatLng(52.416547,-4.066407),
	   	map: map,
		icon: 'images/blue_MarkerB.png',
		title:'Institute Of Geography & Earth Sciences'
		});
		var contentString6 = '<div id="content">'+'<p><b>Institute Of Geography & Earth Sciences</b></p>'+'<p></p>';		
		var infowindow6 = new google.maps.InfoWindow({
			content: contentString6
		});
		google.maps.event.addListener(marker6, 'click',function(){
			infowindow6.open(map,marker6);
		});
		
		
		var pathco = [
		new google.maps.LatLng(52.41816,-4.065774),
		new google.maps.LatLng(52.415591,-4.063843),
		new google.maps.LatLng(52.415657,-4.063586),
		new google.maps.LatLng(52.415801,-4.063671),
		new google.maps.LatLng(52.41529,-4.063296),
		new google.maps.LatLng(52.415657,-4.063586),
		new google.maps.LatLng(52.415539,-4.064251),
		new google.maps.LatLng(52.41563,-4.06468),
		new google.maps.LatLng(52.415526,-4.065538),
		new google.maps.LatLng(52.415925,-4.065667),
		new google.maps.LatLng(52.416226,-4.065474),
		new google.maps.LatLng(52.416507,-4.065688),
		new google.maps.LatLng(52.416389,-4.066354),
		new google.maps.LatLng(52.416547,-4.066407) ];
	}
	function toggleBounce() {

		  if (marker.getAnimation() != null) {
		    marker.setAnimation(null);
		  } else {
		    marker.setAnimation(google.maps.Animation.BOUNCE);
		  }
		}

	var path = new google.maps.Polyline({
		path: pathco,
		geodesic: true,
		strokeColor: '#FF0000',
		strokeOpacity: 0.7,
		strokeWeight:2});
		path.setMap(map);
	}
	function myclick(i) {
  google.maps.event.trigger(gmarkers[i], "click");
}
	document.getElementById("side_bar").innerHTML = side_bar_html;

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
		<p>This is a walking tour viewer for tours that have been created by our android app stumblr.</p>
		<p>To load a tour select one from the left of the map and click load it will load information on that tour and markers and the route on the map. The blue markers on 
		the map are the start and the end of the tour the one that bounces when clicked is the start.</p>		
		<p>Below is our tour viewer where you can see the route we took to create the root, if you click 
		a marker it will show you information on that place including an image if there is one only some have images.</p>
	
	<?php
	if($walkID == 1){	
	echo"<fieldset><p><b>Bars of Aberystwyth</b></p>";
	echo"<p>Description :</p>";
	echo"<p>This is a tour of some the bars in Aberystwyth.</p>";
	echo"<p>This tour will take you through aberystwyth and will show you some of the best bars in aberystwyth.</p></fieldset>";
	}
	if($walkID == 2){	
	echo"<fieldset><p><b>Seafront of Aberystwyth</b></p>";
	echo"<p>Description :</p>";
	echo"<p>This is a tour of the seafront in Aberystwyth.</p>";
	echo"<p>This tour will take you along the aberystwyth seafront and will show you some great spots.</p></fieldset>";
	}
	if($walkID == 3){	
	echo"<fieldset><p><b>Univerity of Aberystwyth</b></p>";
	echo"<p>Description :</p>";
	echo"<p>This is a tour of the university of Aberystwyth.</p>";
	echo"<p>This tour will take you around aberystwyth university.</p></fieldset>";
	}
	else{
	}
	?>
	</fieldset>
		
	<table border="1"> 
      <tr> 
	<td valign="top" style="width:200px; text-decoration: underline; color: #4444ff;"> 
	<div id="side_bar2"></div> 
	
	<form class='tourform' method='post' action="<?php $_SERVER['PHP_SELF'] ?>" id='tourSelector' >

	<input type="radio" name="tour" value="1">Pubs</br>
	<input type="radio" name="tour" value="2">Seafront</br>
	<input type="radio" name="tour" value="3">University</br>
	<input type='submit' name='setTour' value="Load Tour"/> 
	</form>

	
	</td>
        <td> 
           <div id="map-canvas"></div> 
        </td> 
        <td valign="top" style="width:200px; text-decoration: underline; color: #4444ff;"> 
           <div id="side_bar"></div> 
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
