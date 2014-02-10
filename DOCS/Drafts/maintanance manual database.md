Program Description
-------------------------
The system use a database to store details on the tours captured using the android app. The details stored in the database are then displayed on the website using a combination of SQL commands and PHP scripts. The database itself contains three tables, all storing different information on the tours. The tables store information on each walk, their location and also the path for each walk.


Program Structure
----------------------
The first table is used to store the walks, it holds information on the title stored as a varchar, short description stored as a varchar , long description stored as a varchar, time taken stored as a float and distance also as a float. The primary key is used to reference the other details of each tour in the other tables. 
The next table used contains details on each location for a walk. The table stores each locations title, short description, long description all as a varchar, longitude, latitude and a time stamp as a float and finally an image stored as long text due to the images being base 64 encoded.. The table also has an ID as a primary key, as well as a foreign key which links the location to a walk in the walks table.  
The final table used in the database stores a path for each walk. Therefore it has a foreign key integer which references to the walk it represents, a value for the longitude and latitude which are both stored as floats. 
