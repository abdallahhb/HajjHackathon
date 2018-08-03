package com.smart.prefs;

import android.content.Context;
import android.net.ConnectivityManager;
import android.net.NetworkInfo;

/**
 * Created by OMAR BAKELLI on 18/01/2018.
 */

public class CheckInternet {


    private Context context;

    public CheckInternet(Context context) {
        this.context = context;
    }

    public boolean isConnecting() {

        ConnectivityManager connectivityManager = (ConnectivityManager) context.getSystemService(Context.CONNECTIVITY_SERVICE);


        if (connectivityManager != null) {
            NetworkInfo networkInfo = connectivityManager.getActiveNetworkInfo();
            if (networkInfo != null && networkInfo.isConnected()) {
                return true;
            }
        }
        return false;
    }

}
