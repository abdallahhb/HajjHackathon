package com.smart.hajj;

import android.content.Intent;
import android.net.Uri;
import android.support.design.bottomappbar.BottomAppBar;
import android.support.design.widget.FloatingActionButton;
import android.support.v4.app.FragmentActivity;
import android.os.Bundle;
import android.view.MenuItem;
import android.view.View;
import android.widget.ImageView;

import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.MarkerOptions;
import com.smart.hajj.hajj.R;

import java.util.Objects;

public class MapsActivity extends FragmentActivity implements OnMapReadyCallback {

    private GoogleMap mMap;
    private String data_places;
    private String data_site;
    private FloatingActionButton floatingActionButton;
    private double data_latitude;
    private double data_longitude;
    private ImageView imageView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_maps);
        // Obtain the SupportMapFragment and get notified when the map is ready to be used.
        SupportMapFragment mapFragment = (SupportMapFragment) getSupportFragmentManager()
                .findFragmentById(R.id.map);
        mapFragment.getMapAsync(this);

        Intent data = getIntent();
        data_places = Objects.requireNonNull(data.getExtras()).getString("Places");
        data_latitude = data.getExtras().getDouble("latitude");
        data_longitude = data.getExtras().getDouble("longitude");
        data_site = Objects.requireNonNull(data.getExtras()).getString("siteWeb");
        imageView = (ImageView) findViewById(R.id.lay_back);
        imageView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                startActivity(new Intent(getApplicationContext(), Activity.class));
            }
        });

        floatingActionButton =(FloatingActionButton)findViewById(R.id.fab_call);

        floatingActionButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent call = new Intent(Intent.ACTION_DIAL);
                call.setData(Uri.parse("tel:126,677,777\n"));
                startActivity(call);
            }
        });


        BottomAppBar bottom_app_bar = (BottomAppBar) findViewById(R.id.bottom_app_bar);
        bottom_app_bar.replaceMenu(R.menu.bottom_menu);
        bottom_app_bar.setOnMenuItemClickListener(new BottomAppBar.OnMenuItemClickListener() {
            @Override
            public boolean onMenuItemClick(MenuItem item) {
                int id = item.getItemId();

                if (id == R.id.back) {
                    Intent webSite = new Intent(Intent.ACTION_VIEW);
                    webSite.setData(Uri.parse(data_site + ""));
                    startActivity(webSite);
                    return true;
                }
                return onOptionsItemSelected(item);
            }
        });

    }


    @Override
    public void onMapReady(GoogleMap googleMap) {
        mMap = googleMap;

        LatLng data_location = new LatLng(data_latitude, data_longitude);
        mMap.getUiSettings().setZoomControlsEnabled(true);
        mMap.addMarker(new MarkerOptions().position(data_location).title(data_places + "")).showInfoWindow();
        mMap.moveCamera(CameraUpdateFactory.newLatLngZoom(data_location, 14));
    }


}
