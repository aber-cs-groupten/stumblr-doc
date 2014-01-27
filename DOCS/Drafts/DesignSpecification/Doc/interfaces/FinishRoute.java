package uk.ac.aber.cs.group10.stumblr;

import android.os.Bundle;

import uk.ac.aber.cs.group10.stumblr.data.Route;

public abstract class FinishRoute extends AbstractActivity {
    
    public void stumblrOnCreate(Bundle savedInstanceState) {}
     
    public abstract void uploadRoute(Route r);
}
