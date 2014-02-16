package uk.ac.aber.cs.groupten.stumblr;

import android.app.Notification;
import android.app.PendingIntent;
import android.app.Service;
import android.content.Context;
import android.content.Intent;
import android.location.Location;
import android.location.LocationListener;
import android.location.LocationManager;
import android.os.Build;
import android.os.Bundle;
import android.os.IBinder;
import android.support.v4.app.NotificationCompat;

public class GPSService extends Service implements LocationListener {

    /**
     * String name for GPS_INTENT.
     */
    public final static String GPS_INTENT = "STUMBLR_GPS";

    /**
     * String name for GPS_DIALOG.
     */
    public final static String GPS_DIALOG = "STUMBLR_GPS_DIALOG";

    /**
     * String name for bundle of location strings.
     */
    public final static String LOC_BUNDLE_STRING = "loc";

    /**
     * Service ID.
     */
    private static final int FG_SERVICE_ID = 101;

    /**
     * Instance of Intent.
     */
    private Intent intent;

    /**
     * Instance of LocationManager.
     */
    private LocationManager lm;

    /**
     * Instance of Notification.
     */
    private Notification notice;

    /**
     * onCreate start new intent for GPS_INTENT
     */
    @Override
    public void onCreate();

    /**
     * @param intent  The intent that the Service was started from
     * @param flags   Startup flags
     * @param startID Service ID
     * @return The service status (Sticky, non-sticky, etc)
     */
    @Override
    public int onStartCommand(Intent intent, int flags, int startID);

    /**
     * onDestroy remove LocationManager updates and stop foreground task.
     */
    @Override
    public void onDestroy();

    /**
     * Obtain coordinates from Android system and add to current Waypoint.
     */
    @Override
    public void onLocationChanged(Location loc);

    /**
     * Prompt for GPS, and error handling
     */
    @Override
    public void onProviderDisabled(String s);

    /**
     * Empty method to abide by implementation requirements.
     * @param s
     */
    @Override
    public void onProviderEnabled(String s);

    /**
     * Empty method to abide by implementation requirements.
     * @param s
     * @param i
     * @param b
     */
    @Override
    public void onStatusChanged(String s, int i, Bundle b);

    /**
     * Empty method to abide by implementation requirements.
     * @param intent
     * @return
     */
    public IBinder onBind(Intent intent); // Unused
}
