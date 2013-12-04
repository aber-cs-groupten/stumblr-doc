Significant Data Structures
===========================
The main classes in our design are the Route class, and the Waypoint class. 

Route
----------------------------
The route class is responsible for storing and processing all the information for one particular route.
It does this by storing basic route information, plus a linked list of waypoints. 
We chose a linked list, as it's size is not fixed, meaning that we are not limited in terms of how many waypoints we can have.
We chose a linked list over an arraylist, as an arraylist would be innefficeint and slow, due to the processes involved when adding new items.

Waypoint
----------------------------
The waypoint class is responsible for storing and processing the data for each waypoint along the route.
It does this by storing basic route information, plus a linked list of co-ordinates between the current waypoint and the previous waypoint.
The timestamp is also generated when the waypoint is constructed.
It can also store an optional image, if the user so wishes to add one.

Co-ordinates
-----------------------------
A co-ordinate is a storing method for a latitude and a longitude.

JSON
------------------------------

//As this is a draft I have used arbitary data

Walk

"Walk": {
    "walkTitle": "Road Rummer",
    "shortDescription": "meep meep!",
	"longDescription": "meeeeeeeeeeeeeeep meeeeeeeeeeeeeeeeeep!",
	"walkHours": "42",
	"walkDistance: "42"
}

Location

"Location": {
    "latitude": 0000042,
    "longitude": 0000042,
    "timestamp": 16:20,
}

placeDescription

"placeDescription": {
    "placeDescriptionText": "This is a bar, can you say bar?",
}

Photo

"Photo": {
    "photoName": "Photo of Rummers",
}
