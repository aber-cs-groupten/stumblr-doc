Interface description for index.php
-----------------------------------

javascript functions

downloadUrl(url,callback){
used to download the XMLcreator and XMLpath files to get information from the database to the google map.
}


load(){
This is used to set the variable and information to the map using the downloadUrl() and bindInfoWindow() functions
}

function bindInfoWindow(marker,map,infowindow,html){
sets a listener to the marker on the map to open up an infobox which contains the information which is set to the infobox using the html variable.
}
