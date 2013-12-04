Website Interface Specification
=========

This website will use all of these classes to create a page that will load in a database of tours that you will be able to view locations by the map from Google maps. You will also be able to choose from a range of tours provided right next to the map. 

###The Page
>The page class is the web page that will hold the map and database interaction. This class will be the way the interface is shown by using CSS. This class will hold the map class and the database interaction class. The page class will be done in HTML and it will validate to XHTML 1.0 Strict.The code in this class will hold the banner for the website and center all the page to 70% of the screen. The code will also contain a table that will hold the selection of tours then the Google map created by the map class and another side bar to contain all the locations of a certain tour to link to an information box, that when clicked will pop up on the map.


###The Map
>The map class is the class which holds the Google maps API which will be in JavaScript. This class holds functions that are provided from the Google maps API website that initialize the maps and the pointers on the map. There also other function such as myclick() which records when you click on the map. Also there is a createMarker() function which will create an info box for each point provided this is were we will provide the information for each place by using the database interaction here to create all the pointers.
Here are the functions and JavaScript I will using from the Google Maps API website that will be working with the database interaction.

<!-- language: lang-js -->
      <script type="text/javascript"> 
          var side_bar_html = ""; 
          var gmarkers = []; 
          var map = null;
      //initializes the Google Map.
      function initialize() {
      // create the map
      var myOptions = {
        zoom: 15,
        //sets the map to Aberytwyth
        center: new google.maps.LatLng(52.4140,-4.0810),
        mapTypeControl: true,
        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
        navigationControl: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      map = new google.maps.Map(document.getElementById("map_canvas"),
                                    myOptions);
     
      google.maps.event.addListener(map, 'click', function() {
            infowindow.close();
            });
    
      create pointer
      //cretates pointers this will be used with the database interaction class to load 
      //in each place in the tour and its information
      var point = new google.maps.LatLng(,);
      var marker = createMarker(point,"NAME","DESCRIPTION")
    
      document.getElementById("side_bar").innerHTML = side_bar_html;
      }
       //creates the map and set the size of the map.
      var infowindow = new google.maps.InfoWindow(
        { 
          size: new google.maps.Size(200,75)
        });
          
      
      function myclick(i) {
        google.maps.event.trigger(gmarkers[i], "click");
      }
      
      
      function createMarker(latlng, name, html) {
          var contentString = html;
          var marker = new google.maps.Marker({
              position: latlng,
              map: map,
              zIndex: Math.round(latlng.lat()*-100000)<<5
              });
      
          google.maps.event.addListener(marker, 'click', function() {
              infowindow.setContent(contentString); 
              infowindow.open(map,marker);
              });
          
          gmarkers.push(marker);
          side_bar_html += '<a href="javascript:myclick(' + (gmarkers.length-1) + ')">' + name + '<\/a><br>';
      }
      </script>

###Database Interaction
>The database interaction class is where the web page will connect to the databases then It will use jquery to get all the points on the tour that you choose. It will present the tours as links to the left of the map which when clicked will connect to that database and load in all the points to the map and load pointer to the right of the map. The map will have information boxes for each point on the map which have had information put in them by using Jquery as the information for each point is save alongside the coordinates. A thumbnail of an image of the location will also be in these information boxes and when clicked on a bigger image will show at the centre of the page.
The code that will be used for this class will be in PHP. The code for this class would be the connection to the tours database which will then read in the first tour as a default tour.The code for this class will also allow you to choose the tour by selecting one on the sidebar which will set a variable then refresh the page to load in the tour. The code for this class will also add the information from the database to the information boxes on the map by creating an info box for each place in the tour by reading the coordinates in from the database. Then the information box will be populated with information by reading in from the database such as name, description and an image. 


