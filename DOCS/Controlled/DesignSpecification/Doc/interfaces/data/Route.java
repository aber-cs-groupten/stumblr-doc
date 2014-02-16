package uk.ac.aber.cs.groupten.stumblr.data;

import android.location.Location;
import android.os.Parcel;
import android.os.Parcelable;
import android.util.Log;

import java.util.LinkedList;
import java.util.Stack;

public class Route extends StumblrData implements Parcelable {

    /**
     * startTime used for timestamp of start of the walk.
     */
    private long startTime;

    /**
     * lengthTime used for timestamp for length of walk.
     */
    private long lengthTime;

    /**
     * longDesc
     * A slightly longer description of the contents of the route. Set by the user when
     * they create a Route.
     */
    private String longDesc;

    /**
     * The list of Location objects that reflect the coordinates of the walk.
     */
    private Stack<Location> coordinates;

    /**
     * A LinkedList of Waypoint objects that the Route comprises of.
     */
    private LinkedList<Waypoint> route;

    /**
     * Constructor. Calls initRoute() to initialise route.
     */
    public Route();

    /**
     * Helper method for constructor. Calls initLists() to initialise the list and stack.
     */
    private void initRoute();

    /**
     * List and stack initializer method.
     */
    private void initLists();

    /**
     * Initialise Route object from a Parcel.
     */
    public Route(Parcel p);

    /**
     * @return The LinkedList of Waypoint objects.
     */
    public LinkedList<Waypoint> getWaypointList();

    /**
     * @return The list of coordinates.
     */
    public Stack<Location> getCoordinateList();

    /**
     * Adds an item to the list of coordinates.
     * @param location The Location object to add.
     */
    public void addCoordinate(Location location);

    /**
     * Returns the long description of the Route.
     * @return The long description of the Route.
     */
    public String getLongDesc();
    /**
     * Sets the long description.
     *
     * @param longDesc A longer description of the Route.
     */
    public void setLongDesc(String longDesc) {
        this.longDesc = longDesc;
    }


    /**
     * Method loops through coordinate list.
     *
     * If list is empty, return 0.0f. Sets current location by calling getLatitude()
     * and getLongitude() methods. On each loop, increment i and set currentLoc to coordinates
     * held in position i of coordinates list. Do same for nextLoc but add 1 so it retrieves the
     * coordinates of the position in front of current location. Using distanceBetween() it
     * calculates distance between the two locations and add results to distance variable.
     *
     * @return returns the route distance.
     */
    public float getDistance();

    /**
     * Describes contents of parcel.
     * @return Description
     */
    @Override
    public int describeContents();

    /**
     * Writes the Route into a Parcel for moving between screens.
     *
     * @param parcel The parcel to be written to.
     * @param i      Flags.
     */
    @Override
    public void writeToParcel(Parcel parcel, int i);

    /**
     * Reads Route data from a parcel.
     *
     * @param inParcel The parcel to read the Route from.
     */
    public void readFromParcel(Parcel inParcel);

    /**
     * Private class that helps create a Parcelable.
     */
    public static final Parcelable.Creator<Route> CREATOR = new Parcelable.Creator<Route>();

    /**
     * @return startTime of the walk
     */
    public long getStartTime();

    /**
     * startTime gets set to current time.
     */
    public void setStartTime();

    /**
     * @param start pass in start time
     */
    public void setStartTime(long start);

    /**
     * @return lengthTime variable
     */
    public long getLengthTime();

    /**
     * @param l pass in length time and set lengthTime to it.
     */
    public void setLengthTime(long l);

    /**
     * @return lengthTime as a casted float divided to be hours.
     */
    public float getLengthTimeHours();
}
