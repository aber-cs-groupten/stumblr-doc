package uk.ac.aber.cs.groupten.stumblr;

import android.app.AlertDialog;
import android.app.Dialog;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.graphics.Bitmap;
import android.location.Location;
import android.net.ConnectivityManager;
import android.net.NetworkInfo;
import android.os.AsyncTask;
import android.os.Bundle;
import android.provider.Settings;
import android.util.Base64;
import android.util.Log;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;

import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.entity.StringEntity;
import org.apache.http.impl.client.DefaultHttpClient;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.ByteArrayOutputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.OutputStreamWriter;
import java.lang.reflect.Method;
import java.util.LinkedList;
import java.util.Stack;

import uk.ac.aber.cs.groupten.stumblr.data.Route;
import uk.ac.aber.cs.groupten.stumblr.data.Waypoint;

public class FinishRoute extends AbstractActivity {
    private Route route;

    /**
     * Loads the activity on creation (using a bundle if one is present)
     *
     * @param savedInstanceState The bundle containing the saved instance state.
     */
    public void stumblrOnCreate(Bundle savedInstanceState);

    /*
     * ****************************************************************
     *                      HTTP POST Interaction                     *
     * ****************************************************************
     */
    private class NetworkTask extends AsyncTask<String, Void, HttpResponse>;
        protected void onPostExecute(HttpResponse result); // Private method

    /**
     * Posts the data to the server. Check if internet is available first.
     */
    public void postData(View v);

    private JSONObject getData();
    // End HTTP POST

    /**
     * Ensuring Network Provider is Enabled before submitting route
     */
    public boolean checkInternetEnabled();

    public boolean checkWifiEnabled();

    /*
     * ****************************************************************
     *                         Base64 Encoding                        *
     * ****************************************************************
     */
    public String encodeTobase64(Bitmap image);

    // File writing
    public void writeFile(String s);

    @Override
    public void onSaveInstanceState(Bundle savedInstanceState);

    @Override
    public void onRestoreInstanceState(Bundle savedInstanceState);
}
