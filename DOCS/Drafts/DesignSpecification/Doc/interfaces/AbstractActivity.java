package uk.ac.aber.cs.group10.stumblr;

import android.support.v7.app.ActionBarActivity;
import android.support.v4.app.Fragment;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.ViewGroup;

public abstract class AbstractActivity extends ActionBarActivity {}

    public abstract void stumblrOnCreate(Bundle savedInstanceState);

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {}

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {}

    public static class PlaceholderFragment extends Fragment {

    	public PlaceholderFragment() {}

    	public View onCreateView(LayoutInflater inflater, ViewGroup container,
                Bundle savedInstanceState) {}
           
    }

}
