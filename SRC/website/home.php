 <?php
session_save_path('');
session_start();
/* This is where we save the session we are gunna use to get the tour ID to get a tours information from the server. The save path is empty because servers read this and store it in the tmp folder.*/

$walkID = 0;
$walkID = $_POST['tours'];
$_SESSION['walkID'] = $_POST['tours'];
/* These are the variables that will be used to get information from the server as when a tour is selected the tour ID of that tour is then set to a session which is then used in the XMLcreator file to get the correct tour information. */

error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
$con = mysql_connect("db.dcs.aber.ac.uk", "admcsgp10", "73GRlj5m");
$db = mysql_query("USE csgp10_13_14", $con);
$tours = mysql_query("select * from walks");
$res = mysql_query("select * from walks where id='$walkID'");
$query = mysql_query("SELECT * FROM location WHERE walkID='$walkID'");
/* These are used to connect to the database and then there are queries to get the database then there are queries to get certain information such as locations. */


if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}/* This prints out an error message if it fails to connect to MySQL. */
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
            
function downloadUrl(url, callback) {
    var request = window.ActiveXObject ?
        new ActiveXObject('Microsoft.XMLHTTP') :
        new XMLHttpRequest;

    request.onreadystatechange = function () {
        // if (request.readyState == 4)
        if (request.readyState === 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
        }
    };

    request.open('GET', url, true);
    request.send(null);
}
// <!--This function is used to get information off the XMLcreator page to be used for the google map below.-- >
//<![CDATA[

var data;
function load() {
    var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(52.4141, -4.08262),
        zoom: 14,
        mapTypeId: 'roadmap'});
    /* This is where the Google map is defined and where the center of the map should be using co-ordinates these point to the middle of aberystwyth */

    var infoWindow = new google.maps.InfoWindow;
    downloadUrl("XMLcreator.php",
        function (data) { // function(data) below is an inner function of this method.
            var xml = data.responseXML;
            
            /*This is were all the information for the map comes from.*/
            var markers = xml.documentElement.getElementsByTagName("marker");

            for (var i = 0; i < markers.length; i++) {
                var id = (markers[i].getAttribute("id"));
                var walkID = parseInt(markers[i].getAttribute("walkID"));

                var title = markers[i].getAttribute("title");
                var description = markers[i].getAttribute("description");
                var image = markers[i].getAttribute("image");

                var point = new google.maps.LatLng(
                    parseFloat(markers[i].getAttribute("latitude")),
                    parseFloat(markers[i].getAttribute("longitude")));

                if (image === "") {
                    var html = "<b>" + title + "</b><p>" + description + "</p>";
                } else {
                    var html = "<b>" + title + "</b><p>" + description + "</p><img src=" + "\"data:image/gif;base64," + image + "\"></img>";
                }

                if (i === 3) {
                    map.setCenter(point);
                }

                var marker = new google.maps.Marker({map: map, position: point,
                    icon: "images/mapiconscollection-numbers-fa0505-classic/number_" + i + ".png"});
                bindInfoWindow(marker, map, infoWindow, html);
            }
        }
    );
    
    /* This loop goes through all the information from the XML creator file such 
        * as title, description, latitude and longitude and sets it to markers and infoboxes 
        * on the Google map. The image that is contained on the server is used in the info 
        * boxes as it is a base64 image which the html decodes and provides an image in the infobox. */
        
    downloadUrl("xmlpath.php", // function(data) below is an inner function of this method.
        function (data) {
            var xml = data.responseXML;
            var paths = xml.documentElement.getElementsByTagName("path");

            var pathco = [];
            for(var j = 0;j < paths.length; j++){
               var lat = parseFloat(paths[j].getAttribute("latitude"));
               var lng = parseFloat(paths[j].getAttribute("longitude"));
               var point = new google.maps.LatLng(lat,lng);
               pathco.push(point);
            }

             var path = new google.maps.Polyline({
                path: pathco,
                geodesic: true,
                strokeColor: '#FF0000',
                strokeOpacity: 0.7,
                strokeWeight:3
             });

             path.setMap(map);
        } ); }

                        
/* This creates a path between each of the markers to show where the person walked when recording the tour this is done by get a list of coordinates that are recored by the app when running. */

    function bindInfoWindow(marker, map, infoWindow, html) {
        google.maps.event.addListener(marker, 'click',
            function() {
                infoWindow.setContent(html);
                infoWindow.open(map, marker);
            });
    }
   
    /*The information and image are set as the content of the info window here and add a action listner so when a marker clicked it will open the infobox. */

   function doNothing() {}

   //]]>
        </script>

        <link rel="shortcut icon" href="images/favicon.ico"/> <!-- This sets the tab of a browser with our logo-->
    </head>
    <body style="margin:0px; padding:0px;" onload="load()"> <!--When this loads up it does the load func from above. -->
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
                            while ($a = mysql_fetch_array($tours)) {
                                echo"<option value=" . $a["id"] . ">" . $a["title"] . "</option>";
                            }
                            ?>
                        </select><br />
                        <input type="submit" value="Load Tour" style="text-align: center; float: left" /> 
                    </form>
                    <!--This form is used to get what tour you want to look at and then it sends it back to page where it changes the session variable at the top in the php.
			It gets the tour titles and ID's by looping and using the $tours query. -->

                </div>
                <div id="tour">
                    <?php
                    while ($a = mysql_fetch_array($res)) {
                        echo "<p><b>Title: </b>" . $a["title"] . "</p>";
                        echo "<p><b>Short Description: </b>" . $a["shortDescription"] . "</p>";
                        echo "<p><b>Long Description: </b>" . $a["longDescription"] . "</p>";
                        echo "<p><b>Distance: </b>" . round($a["distance"], 0) . " metres" . "</p>";
                        
                        $hours = $a["hours"];
                        $minutes = $hours * 60;
                        echo "<p><b>Time Taken : </b>" . round($minutes, 0) . " minutes" . "</p>";
                    }
                    ?>
                </div>
                <!--This part provides information on the tour you have loaded up above the map such as the title, short description, long description, distance and timestamp. -->

                <div class="clear"></div>
                <div id="map" style="width: 100%; height: 600px; border: 2px solid #000;"></div> <!--This is the div that the map is loaded into by using the id. -->

                <br/>
                <br/>
                <div id="bar">
                    <?php
                    while ($a = mysql_fetch_array($query)) {
                        echo "<div id=pic>";
                        echo "<b class='gallery'>" . $a["title"] . "</b>";
                        echo "<p class='gallery'>" . $a["description"] . "</p>";
                        $data = $a["image"];
                        if ($data != '') {
                            echo '<img src="data:image/gif;base64,' . $data . '" />';
                        }
                        echo "</div>";
                    }
                    ?>
                </div> 
                <!--This is the gallary of all the images that are in the tour selected it loads the titles, 
		    decription and images of each marker in the tour loaded. This is done by getting the 
		    information using a query $query.-->
                <br/>	
            </div>
            <br/>
        </div>
        <br/>
    </body>
</html>
