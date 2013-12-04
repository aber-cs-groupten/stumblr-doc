Website Interface Specification
=========

This website will use all of these classes to create a page that will load in a database of tours that you will be able to view locations by the map from Google maps. You will also be able to choose from a range of tours provided right next to the map. 

###The Page
>The page class is the web page that will hold the map and database interaction. This class will be the way the interface is shown by using css. This class will hold the map class and the database interaction class. The page class will be done in HTML and it will validate to XHTML 1.0 Strict. 


###The Map
>The map class is the class which holds the Google maps API which will be in JavaScript. This class holds functions that are provided from the google maps API website that initialise the maps and the pointers on the map. There also other function such as myclick() which records when you click on the map. Also there is a createMarker() function which will create an info box for each point provided this is were we will provide the information for each place by using the database interaction here to create all the pointers.
>Here are the functions and javacript I will using from the Google Maps API website that will be working with the database interaction.

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
>PHP code will be used to read in the databases of tours which will contain each tours the code will create links on the left of the map to bring up a new tour and load in the poiner.The PHP code used  will mostly be in the create pointer part of the map class where it will create pointer for each entry in the database which will then create a link on the right of the map to link to each pointer on the map.

