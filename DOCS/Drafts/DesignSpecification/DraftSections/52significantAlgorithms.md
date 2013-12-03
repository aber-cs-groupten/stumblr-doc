5.2 Significant algorithms
==========================

Upload Data
-----------
  1 Bundle Data
  2 Cache Bundle
  3 Send Bundle To Server
  4 Display Progress bar in android drop down menu
  5 Wait for confirmation
  6 If after 1 minute no confirmation if recieved
    6a Resend Bundle

Bundle Data
-----------
  1 Base 64 encode all images
  2 Colate data for each waypoint into JSON
  3 Colate every waypoint + general route data into JSON

Validate Inputs
-----------
  1 Check if empty
  2 Check if contains un-necissary/insecure characters !<>#^
  3 Check image sizes

Change Screen
-----------
  1 Validate Inputs
  2 Cache data
  3 Display next screen
