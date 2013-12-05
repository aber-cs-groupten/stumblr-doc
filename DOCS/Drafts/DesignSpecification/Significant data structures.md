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


{
	"Walk": {
		"walkTitle": "Road Rummer",
		"shortDescription": "meep meep!",
		"longDescription": "meep meep meep meep!",
		"walkHours": "42",
		"walkDistance: "42",
		"Locations": [
			{
				"LocationTitle",
				"GPStraces" : [
					{
						"latitude": 42.00000,
						"longitude": 42.00000
					}
				],
				"timestamp": 16:20,
				"locationDescription": "This is a bar, can you say bar?",
				"Photo": {
					"photoName": "Photo of Rummers",	
					"64bitPhoto": "gfkfhjfhkhfctyb7r67tny8b6n756"
				}
			}
		]
	}
}
