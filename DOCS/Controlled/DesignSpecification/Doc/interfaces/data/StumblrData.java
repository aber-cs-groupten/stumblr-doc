package uk.ac.aber.cs.groupten.stumblr.data;

import android.os.Parcelable;

import java.util.Calendar;

/**
 * Abstract class containing basic common structure for all Stumblr data formats.
 */
public abstract class StumblrData implements Parcelable {
    public static final String TAG = "STUMBLR";

    /**
     * The title of the given piece of data. This can be extended to Waypoints, Routes
     * and any other piece of relevant data inside the structure of Stumblr.
     */
    private String title;

    /**
     * The short description pertaining to the given piece of data. This will also be
     * extended to other component classes of StumblrData
     */
    private String shortDesc;

    /**
     * Default constructor
     */
    public StumblrData() {
        // do nothing
    }

    /**
     * @param title     The title to set.
     * @param shortDesc The short description to set.
     */
    public StumblrData(String title, String shortDesc);

    /**
     * Checks the StumblrData item for validity. Returns a boolean. (true = valid)
     *
     * @return Whether the data is valid or not. (true = valid)
     * <p/>
     * MUST be implemented in any subclasses.
     */
    public static boolean isValidData(String s);

    /**
     * Returns current time.
     *
     * @return The current time.
     */
    public long getCurrentTime();

    /**
     * Returns the title.
     *
     * @return this.title
     */
    public String getTitle();
    
    /**
     * Sets the current title.
     *
     * @param title The title to set.
     */
    public void setTitle(String title);

    /**
     * Returns the short description.
     *
     * @return shortDesc
     */
    public String getShortDesc();
    
    /**
     * Sets the short description.
     *
     * @param shortDesc
     */
    public void setShortDesc(String shortDesc);

    /**
     * Sanitises given text by removing prohibited characters.
     *
     * @param input The text to sanitise.
     * @return The sanitised string.
     */
    public String sanitiseStringInput(String input);
}
