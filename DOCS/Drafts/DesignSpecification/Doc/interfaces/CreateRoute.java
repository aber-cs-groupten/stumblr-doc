package uk.ac.aber.cs.groupten.stumblr;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;

import uk.ac.aber.cs.groupten.stumblr.data.Route;
import uk.ac.aber.cs.groupten.stumblr.data.StumblrData;

public class CreateRoute extends AbstractActivity {

    /**
     * Instance of Route.
     */
    private Route route;

    /**
     * Title of route.
     */
    private String title;

    /**
     * Short description of route.
     */
    private String shortDesc;

    /**
     * Long description of route.
     */
    private String longDesc;

    /**
     * Loads the activity on creation (using a bundle if one is present)
     *
     * @param savedInstanceState The bundle containing the saved instance state.
     */
    @Override
    public void stumblrOnCreate(Bundle savedInstanceState);

    /**
     * Get text from fields in the user interface and sanitise inputs.
     */
    public void getTextFromUI();

    /**
     * Start the WaypointList activity (list the current Route).
     * Called when the "next" button is clicked in the UI.
     */
    public void startWaypointListIntent(View v);

    /**
     * On instance saved, call getTextFromUI() and set the strings to appropriate variables.
     * @param savedInstanceState
     */
    @Override
    public void onSaveInstanceState(Bundle savedInstanceState);

    /**
     * Restore instance state to savedInstanceState. Set title, shortDesc and longDesc by getting
     * them from the savedInstanceState. Then set textview fields to their appropriate variables.
     * @param savedInstanceState
     */
    @Override
    public void onRestoreInstanceState(Bundle savedInstanceState);

    /**
     * Logs when back is pressed in CreateRoute.
     */
    @Override
    public void onBackPressed()
}
