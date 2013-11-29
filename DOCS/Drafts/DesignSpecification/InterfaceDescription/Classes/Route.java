package uk.ac.aber.cs.group10.stumblr.data;

import java.net.URL;
import java.util.LinkedList;

/**
 * Created by charles on 29/11/13.
 */
public class Route extends StumblrData {
    /**
     *
     */
    private String longDesc;

    /**
     *
     */
    private LinkedList<Waypoint> route;

    /**
     * Checks if the data in the Route is valid or not, and returns a boolean.
     * @return If the data is valid or not. (true = valid)
     */
    public boolean isValidData() {

        return false;
    }

    public Route(String title, String shortDesc, String longDesc) {
        super(title, shortDesc);

    }

    /**
     * To be implemented. Will return a URL containing filesystem location of bundled Route file
     * (ready for upload to server)
     * @return The URL of the bundle
     */
    public URL bundle() {
        return null;
    }
}
