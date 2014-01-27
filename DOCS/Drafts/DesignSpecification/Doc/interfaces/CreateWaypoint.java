package uk.ac.aber.cs.group10.stumblr;

import android.os.Bundle;

import uk.ac.aber.cs.group10.stumblr.data.Route;
import uk.ac.aber.cs.group10.stumblr.data.Waypoint;

public abstract class CreateWaypoint extends DataEntry {
    
    public void stumblrOnCreate(Bundle savedInstanceState) {}
           
    public abstract void createWaypoint();

    public abstract void getImage(Waypoint w);

    public abstract void getTimestamp();

}
