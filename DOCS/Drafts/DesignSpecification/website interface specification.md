Website Interface Specification
=========

This website will use all of these classes to create a page that will load in a database of tours that you will be able to view locations by the map from Google maps. You will also be able to choose from a range of tours provided right next to the map. 

###The Page
>The page class is the web page that will hold the map and database interaction. This class will be the way the interface is shown by using css. This class will hold the map class and the database interaction class.

###The Map
>The map class is the class which holds the Google maps API which will be in JavaScript. This class holds functions that are provided from the google maps API website that initialize() the maps and the pointers on the map. There also other function such as myclick() which records when you click on the map. Also there is a createMarker() function which will create an info box for each point provided this is were we will provide the information for each place by using the database interaction here to create all the pointers.

###Database Interaction
>The database interaction class  is where the web page will connect to the databases then It will use jquery to get all the points on the tour. It will present the tours as links to the left of the map which when clicked will connect to that database and load in all the points to the map and load pointer to the right of the map. The map will have information boxes for each point on the map which have had information put in them by using Jquery as the information for each point is save alongside the coordinates. A thumbnail of an image of the location will also be in these information boxes and when clicked on a bigger image will show at the centre of the page.
