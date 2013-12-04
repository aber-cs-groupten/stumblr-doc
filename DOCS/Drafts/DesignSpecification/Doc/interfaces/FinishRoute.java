package uk.ac.aber.cs.group10.stumblr;

import android.os.Bundle;

import uk.ac.aber.cs.group10.stumblr.data.Route;

public abstract class FinishRoute extends AbstractActivity {
    /**
     * Loads the activity on creation (using a bundle if one is present)
     * @param savedInstanceState The bundle containing the saved instance state.
     */
    public void stumblrOnCreate(Bundle savedInstanceState) {
        // Called by super().onCreate
        setContentView(R.layout.activity_abstract);

        if (savedInstanceState == null) {
            getSupportFragmentManager().beginTransaction()
                    .add(R.id.container, new PlaceholderFragment())
                    .commit();
        }
    }

    /**
     * Will package and upload the current Route object.
     */
    public abstract void uploadRoute(Route r);
}
