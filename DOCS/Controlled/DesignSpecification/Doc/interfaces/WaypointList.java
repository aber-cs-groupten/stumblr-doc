package uk.ac.aber.cs.groupten.stumblr;

import android.app.AlertDialog;
import android.app.Dialog;
import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.IntentFilter;
import android.location.Location;
import android.os.Bundle;
import android.provider.Settings;
import android.util.Log;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;

import java.util.EmptyStackException;
import java.util.LinkedList;

import uk.ac.aber.cs.groupten.stumblr.data.Route;
import uk.ac.aber.cs.groupten.stumblr.data.Waypoint;

public class WaypointList extends AbstractActivity {

    /**
     * Waypoint intent constant.
     */
    private final int WAYPOINT_INTENT = 3141;

    /**
     * Index to insert new waypoint.
     */
    private int insert_index;

    /**
     * GPS Broadcast reciever.
     */
    private BroadcastReceiver receiver;

    /**
     * GPS Service intent.
     */
    private Intent gpsServiceIntent;

    /**
     * Boolean to show if GPS service is running.
     */
    private boolean serviceRunning = false;

    // ListView objects
    /**
     * Adapter used to put menu items into linked list
     */
    private ArrayAdapter<Waypoint> adapter;

    /**
     * List of menu items.
     */
    private LinkedList<Waypoint> menuItems;

    /**
     * View of the list.
     */
    private ListView listView;

    /**
     * Instance of route.
     */
    private Route route;

    /**
     * Loads the activity on creation (using a bundle if one is present)
     *
     * @param savedInstanceState The bundle containing the saved instance state.
     */
    public void stumblrOnCreate(Bundle savedInstanceState);

    /**
     * Starts the CreateWaypoint Intent, so that it returns a result.
     *
     * @param v The View object.
     */
    public void startCreateWaypointIntent(View v);

    /**
     * Calculate time by subtracting the endTime by the startTime.
     * Set the length route was recorded for to the route.
     */
    private void calculateTimestamp();

    /**
     * Called when an Activity is dispatched for a result
     *
     * @param requestCode Integer relating the intent to a request
     * @param resultCode  Used to check if a request was successful
     * @param data        The Intent used
     */
    @Override
    protected void onActivityResult(int requestCode, int resultCode, Intent data);

    /**
     * Initialises the ListView and Adapter objects.
     */
    private void initialiseListView();

    /**
     * Renders Waypoint list on screen.
     */
    public void drawWaypointList();

    /**
     * Starts the GPS service.
     */
    private void startGPSService();
    
    /**
     * Halts the GPS service.
     */
    private void stopGPSService();

    /**
     * Display dialog to prompt the user to enable GPS. Then take them to the settings page.
     */
    public void promptToEnableGPS();

    /**
     * Finish route method. Display message to check if the user is finished. If button is pressed
     * call finishRoute and then finish the activity.
     */
    public void confirmFinishRoute(View v);

    /**
     * Passes the current Route object to FinishRoute and starts the activity.
     * @param v The View object passed in by the Android OS.
     */
    public void finishRoute() {
        
    /**
     * onDestroy, stop the GPS service.
     */
    @Override
    public void onDestroy();
    /**
     * When instance state is saved, put instance variables into it as well as route data.
     * @param savedInstanceState
     */
    @Override
    public void onSaveInstanceState(Bundle savedInstanceState);

    /**
     * When instance state is restored, retrieve instance variables and
     * data from saved instance state.
     * @param savedInstanceState
     */
    @Override
    public void onRestoreInstanceState(Bundle savedInstanceState);

    /**
     * Log when back is pressed.
     */
    @Override
    public void onBackPressed();
}
