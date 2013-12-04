\begin{section}{SIGNIFICANT DATA STRUCTURES - ANDROID}

    The main classes in our design are the Route class, and the Waypoint class. 

    \subsection{Route}
    The Route class is responsible for storing and processing all the information for one particular route. It does this by storing basic route information, plus a LinkedList of Waypoints. We chose a LinkedList as its size is not fixed, meaning that we are not limited in terms of how many waypoints we can have. We chose a LinkedList over an ArrayList, as an ArrayList would be inefficient and slow, due to the processes involved when adding new items.

    \subsection{Waypoint}
    The Waypoint class is responsible for storing and processing the data for each waypoint along the route. It does this by storing basic route information, plus a linked list of co-ordinates between the previous Waypoint and the current Waypoint. The timestamp is generated when the waypoint is constructed. The class can also store an optional image, if the user so wishes to add one.

    \subsection{android.location.Location}
    The Android application will use the Android built-in Location class to store coordinates.
\end{section}
