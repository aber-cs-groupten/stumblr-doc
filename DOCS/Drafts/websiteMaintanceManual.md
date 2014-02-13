Website Maintenance Manual
==================================

This maintenance manual should be able to provide you with answers to most of your questions or point you to parts of the code likely to hold the answer.

Website description
---------------------------------
This website is a walking tour viewer, it pulls data from a database which is provided by the android application Stumblr. It then uses this data in conjunction with the Google maps API on the website to display the tour on the map, including information on the locations visited on the route. It also provides a gallery bar of all the images of the tour selected if there are any.
The system uses a database to store details on the tours captured using the Android app. The details stored in the database are then displayed on the website using a combination of SQL commands and PHP scripts. The database itself contains three tables, all storing different information on the tours. The tables store information on each walk, their location and also the path for each walk. 

Website structure
---------------------
I will show the structure of this website in two ways; first I will provide you with the flow of the website to show you how it works then, I will go through the code saying what the methods and sections of the code do.

There are four main components to the websites; HTML, JavaScript, PHP and the database. All of  these all work together to create the web page Stumblr. 

HTML
The HTML is what I have used for the design such as having the body of the web page centred using a div called divwrapper which has been set to be 80% width of the browser screen. The HTML includes the divs tour, map and bar. The tour div is where information of the tour is presented when the tour is loaded this will contain the name and description of the tour plus any other information held in the database. The map div is used to hold the Google map which is created by the JavaScript this is set to the width of the body. The bar div is where the gallery of images is shown as a scrollable list of images with their title and description. The HTML also has the form which is used to select and load a tour which it does by sending the ID of the tour back to the page using POST. It gets the ID and title of the tour in this from by using php to get the information from the database.

JavaScript
The JavaScript is used to create the map and gather information from the database to populate that map. The JavaScript in this web page has 3 functions downloadUrl(), bindfInfoWindow() and load() which I will talk about now :

downloadUrl() - this function is just a basic download function to download a url, in this case we are using it to download an XML file. The XML file contains all the details of the selected tour. 

load() - this function loads up the google map, by default it displays nothing as no tour is selected. If a tour is selected it will display on the map. First it creates a variable called map which is a new Google map, the next few variables are first where the map should be centred which is the co-ordinates of the centre of Aberystwyth town, next is the zoom level of the map which controls the level of zoom on the co-ordinates and the last one is the map type which is roadmap so people can see the roads and also use Google street-view. Next the downloadUrl() function is called to download XMLcreator.php. This contains the details of the tour. Next the variable markers are created by getting information from the XML document. A loop is used to set the variables for information to be displayed as a marker, below is the code for a marker:

var marker = new google.maps.Marker({map: map, position: point,
icon: "images/mapiconscollection-numbers-fa0505-classic/number_" + i + ".png"});
bindInfoWindow(marker, map, infoWindow, html);
Then info window is also added here using the information from the tour as you can above.

The next part is where the function downloads the xmlpath.php file that is used to create a route between the markers on the map. This works a little like the inner function that creates the markers and info windows as it uses a variable paths instead of markers but this function also uses a variable pathco which is an array to hold all the co-ordinates of the path to be used later. The loop gets the length of the route from the XML file, it then gets the co-ordinates of the route taken and sets them to a variable called point. This variable is then pushed to the pathco variable using the following code:    pathco.push(point);    this is used to push all the variables to this array to create an array of the path co-ordinates. Below this you will see the path options being set such as the path variable being set to the pathco array, and other options such as strokeColor, opacity and weight which can be altered to create a different route look, then below the path is set to the map.

bindInfoWindow() -  This function is used to tie all the markers and infoboxes to the map and where a listener is added that when markers have been clicked  they open an infobox with the information in the html variable.

PHP
The php used in this website is mostly used to get information from the database but there are a few lines that are used for other things.
At the top of the page you will see:     session_save_path('');           session_start();    this is used to set where sessions will be saved to a tmp folder as most browsers will save it to a tmp folder if the path is an empty string. Then it starts off the session using the session_start().
Then the variable $walkID is created and set to zero so when first opened the web page will come up with a default map instead of a tour. Then if somebody loads up a tour it will send a POST back to the page which is why the next line is the variable being set to $_POST['tours'] so $walkID will be equal to the tour that has been selected. Then a session variable is created which is also equal to the POST which is used in the XML files to get the correct tour for the Google map. 
Then the next few lines are used to connect to the database and then query tables in that database to get information which is to be used on the webpage. Next there is an IF statement just encase there are problems connecting to the server, including the error message "Failed to connect to MySQL: ".
PHP is next used to create a drop down box that contains the names of all the tours on the database, it uses a query that is created at the top of the page to get the information from the database.
Then the information about the tour that is loaded tis display above the map. This includes the tour's title, long description, short description, time and distance.
Finally there is the gallery where we use the same query used above to display the images for each tour. The image is base64 encoded and must be decoded before being displayed. It is displayed along with a title and description.

Database
The first table is used to store the walks, it holds information on the title stored as a varchar, short description stored as a varchar , long description stored as a varchar, time taken stored as a float and distance also as a float. The primary key is used to reference the other details of each tour in the other tables. The next table used contains details on each location for a walk. The table stores each locations title, short description, long description all as a varchar, longitude, latitude and a time stamp as a float and finally an image stored as long text due to the images being base 64 encoded.. The table also has an ID as a primary key, as well as a foreign key which links the location to a walk in the walks table.
The final table used in the database stores a path for each walk. Therefore it has a foreign key integer which references to the walk it represents, a value for the longitude and latitude which are both stored as floats. 


Algorithms
The main algorithm used for this webpage is creating an XML file of information from the database. This is used in both XMLcreator.php and xmlpath.php . They do this by connecting to the database, and then pulling data from the table that the information is in. Next it iterates through the rows adding XML nodes for each part, which is then used in index.php when the function downloadUrl() is called to get this information which it loops through to get all of the information.


Files
---------------
For the website there is an extra file the Cascading Style Sheet, which is used for the design of the page such as the background and how big the body of the website is going to be and also all the sizes of the divs.

In order to access the data in the database three files containing PHP scripts were used. Two of the files where used for converting the data into XML, one for the locations on a tour and another for the path. Then the XML could be used to display the tours in conjunction with Google Maps. The way these scripts work is to first connect to the database, then they use SQL queries to find which data in the database they need depending on which tour is selected. Finally they pull the data from the database and insert it into a new XML file. The final file which is used is another PHP script and this decodes the incoming data in the form of a JSON file and inserts them into the database. Firstly the script establishes a connection to the database, then it takes in the JSON file and decodes it using a PHP function called json_decode. Next it stores the decoded data as variables and these variables are using along with SQL commands to add the data to the database. 

Interfaces
---------------
The main interface with the website is the Google map which I have gone over in some length in the website structure above. If you wanted to know more about this interface then there is a Google Maps API. The only other interface with this website is the drop down box and load tour button which is generated with some PHP and they are located in a form which sends the id of the tour back to the page so it loads that tour up from the database.

Suggestions for Improvements
----------------------------
A few improvements I could suggest would be to improve the look of the gallery bar at the bottom of the page so the titles, pictures and description line up properly, this probably be done with some new divs in the CSS file. Another improvement I could suggest  is the way information about the tour is loaded above the map which could be done with several little things such as a border or the changes to the div and how the information it presented with the <p> tags. Another suggestion would be the background of the web-page as I have seen it tile at the bottom when there is to much information on the page that it makes it tile this could probably be fixed by changing the CSS for the background or you could get a bigger picture.
Another suggestion for improvement would be to add PHP unit tests to website as they are none right now, it would be good to have these so if something goes wrong you will know were the problem is.


Things to Watch When Making Changes
--------------------------------------
There are many things to watch for when making changes I will now go through some with the website and the database.
Website

The thing you most want to watch out for when making changes to the website is the JavaScript as one small change and a whole bunch of problems can happen. I would recommend having a backup of the file working before making changes to see where you might have gone wrong. Another way you could prevent from getting errors with the Google maps JavaScript is to go through their website as they have many example of a working Google map. Also another thing to watch out for when making changes to the website is that you use the right queries for getting information out of the database. Also when testing the website if would use the browsers debugger like Firefox’s this can tell you were you are going wrong.

Database
Changing the overall structure of the database will have knock on effects on the rest of the system. Most of the PHP code used for accessing the database uses variables and statements which rely on the names of columns in the database. The areas that it would affect would include pulling data, decoding the JSON and inserting data into the database. Therefore it is important that if any changes are made to the database they are made to every PHP file. 

Physical limitations of the program
------------------------------------
A physical limitations of our website is that the database is held on a different database to the website which means if it goes down there is now way of using the information on the database with the website. This means if it went down the website would not be able to get any information for the tour leaving it mostly blank and useless.


Rebuilding and testing
---------------------------
There is no need for rebuilding of the website as PHP is an interpreted language so it does not need to be rebuilt.
For testing there are not PHP unit tests in the website so you can only browser test it to make sure that it works on the most popular browsers.
                    

