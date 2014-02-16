package uk.ac.aber.cs.groupten.stumblr.data;

import android.graphics.Bitmap;
import android.location.Location;
import android.os.Parcel;
import android.os.Parcelable;
import android.util.Log;

public class Waypoint extends StumblrData implements Parcelable {
    // CONSTRUCTORS

    /**
     * Default constructor for Waypoint.
     */
    public Waypoint();

    /**
     * Constructor for a Waypoint object from a Parcel.
     */
    public Waypoint(Parcel in);

    // INSTANCE VARIABLES

    /* title and shortDesc are declared in StumblrData and are accessed through get/set methods */
    /**
     * Arrival timestamp for Waypoint.
     */
    private long timestamp;

    /**
     * Image contained within Waypoint.
     */
    private Bitmap image;

    /**
     * Location for Waypoint
     */
    private Location location;

    /**
     * Helper method for initialising Waypoint objects.
     */
    private void initWaypoint();

    /**
     * Sets timestamp.
     *
     * @param l The timestamp.
     */
    public void setTimestamp(long l);

    /**
     * Returns timestamp.
     *
     * @return The timestamp.
     */
    public long getTimestamp();

    /**
     * Sets the current location.
     *
     * @param l The current location to set.
     */
    public void setLocation(Location l);


    /**
     * Sets the current location.
     *
     * @param l The current location to set.
     */
    public Location getLocation();

    /**
     * Returns current Bitmap.
     *
     * @return The current Bitmap that the Waypoint has,
     */
    public Bitmap getImage();

    /**
     * Sets the current Bitmap.
     *
     * @param b The current Bitmap.
     */
    public void setImage(Bitmap b);
    
    /**
     * Returns a String with the title.
     *
     * @return The title string.
     */
    public String toString();

    /**
     * Writes the Waypoint into a Parcel for moving between Activities.
     *
     * @param parcel The parcel to be written to.
     * @param i      Flags.
     */
    @Override
    public void writeToParcel(Parcel parcel, int i);

    /**
     * Reads Route data from a parcel.
     *
     * @param inParcel
     */
    public void readFromParcel(Parcel inParcel);

    public static final Parcelable.Creator<Waypoint> CREATOR = new Parcelable.Creator<Waypoint>();
        public Waypoint createFromParcel(Parcel in);

        /**
         * @param size pass in size of new array.
         * @return Waypoint type array with passed in size.
         */
        public Waypoint[] newArray(int size);
    };

   @Override // Unused
   /**
    * Unused method. Required for parcelable implementation.
    */
   public int describeContents();
}
