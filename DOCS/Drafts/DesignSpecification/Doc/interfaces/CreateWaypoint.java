package uk.ac.aber.cs.groupten.stumblr;

import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.location.Location;
import android.net.Uri;
import android.os.Bundle;
import android.provider.MediaStore;
import android.util.Log;
import android.view.View;
import android.view.WindowManager;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import java.io.FileNotFoundException;
import java.io.IOError;
import java.io.IOException;
import java.util.Calendar;

import uk.ac.aber.cs.groupten.stumblr.data.StumblrData;
import uk.ac.aber.cs.groupten.stumblr.data.Waypoint;

public class CreateWaypoint extends AbstractActivity {
    /**
     * Request code for camera intent
     */
    public static final int CAMERA_REQ_CODE = 1337;

    /**
     * Request code for gallery intent
     */
    public static final int GALLERY_REQ_CODE = 7007;

    /**
     * Bundle string for identifying Waypoint data
     */
    public static final String WAYPOINT_BUNDLE = "waypoint";

    /**
     * Bundle string for identifying location data
     */
    public static final String LOCATION_BUNDLE = "loc";

    /**
     * Bundle string for identifying return data
     */
    public static final String RETURN_BUNDLE = "return_data";

    /**
     * Waypoint title.
     */
    private String wpTitle;

    /**
     * Short description.
     */
    private String wpShortDesc;

    /**
     * Instance of waypoint.
     */
    private Waypoint waypoint;

    /**
     * Loads the activity on creation (using a bundle if one is present)
     *
     * @param savedInstanceState The bundle containing the saved instance state.
     */
    public void stumblrOnCreate(Bundle savedInstanceState);

    /**
     * Pass in waypoint. Set TextView and ImageView fields to data returned from getting
     * the waypoints title, short description and image
     * @param w passed in waypoint to be loaded.
     */
    public void loadWaypoint(Waypoint w);

    /**
     * Gets waypoint title and short description from the user interface.
     */
    public void getTextFromUI();

    /**
     * Called when "Create" button in the UI is clicked.
     * Adds data to the current Waypoint object with text specified in UI.
     */
    public void finishWaypoint(View v);

    /*
     * ****************************************************************
     *                        Camera interaction                      *
     * ****************************************************************
     */
    /**
     * Obtain a photo from user and add it to current Waypoint.
     */
    public void startCamera(Intent cameraIntent);

    public void startGallery(Intent galleryIntent);

    public void getImage(View v);

    /**
     * on Creation of a waypoint result, if the result is OK then getExtras from intent data.
     * Then get bitmap image for waypoint image and check for null prior to setting the image to the
     * waypoint. Update UI imageView, and log dimensions of image.
     *
     * @param requestCode
     * @param resultCode
     * @param data
     */
    @Override
    protected void onActivityResult(int requestCode, int resultCode, Intent data);

    public void setImage(Bitmap b);

    @Override
    public void onSaveInstanceState(Bundle savedInstanceState);

    /**
     * Restore state to savedInstanceState. Set waypoint title, short description and waypoint
     * to appropriate data retrieved from the savedInstanceState. Then update TextViews with
     * newly set title and short description.
     * @param savedInstanceState
     */
    @Override
    public void onRestoreInstanceState(Bundle savedInstanceState);
}
