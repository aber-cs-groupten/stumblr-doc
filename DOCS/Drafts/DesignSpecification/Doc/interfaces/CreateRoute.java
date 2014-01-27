package uk.ac.aber.cs.group10.stumblr;

import android.os.Bundle;

import uk.ac.aber.cs.group10.stumblr.data.Route;

public abstract class CreateRoute extends DataEntryActivity {
    
    @Override
    public void stumblrOnCreate(Bundle savedInstanceState) {}
    
    public abstract void createNewRoute();

    public abstract void startWaypointListIntent(Route r);
}
