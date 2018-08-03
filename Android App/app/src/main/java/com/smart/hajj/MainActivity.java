package com.smart.hajj;

import android.content.Intent;
import android.graphics.Typeface;
import android.support.design.bottomappbar.BottomAppBar;
import android.support.design.widget.FloatingActionButton;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;

import com.smart.Adapters.SettingListAdapter;
import com.smart.LeslistView.ListOneActivity;
import com.smart.hajj.hajj.R;
import com.smart.settings.Language;

public class MainActivity extends AppCompatActivity {

    FloatingActionButton floatingActionButton;
    ImageView imageView, imageView2;
    LinearLayout l1,l2,l3,l4,l5,l6;
    //
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
       // BottomAppBar bottom_app_bar = (BottomAppBar) findViewById(R.id.bottom_app_bar);


        l1 = (LinearLayout) findViewById(R.id.liny_hotel);
        l2 = (LinearLayout) findViewById(R.id.liny_bank);
      //  l3 = (LinearLayout) findViewById(R.id.liny_Doctor);
        l4 = (LinearLayout) findViewById(R.id.liny_Airport);
        l5 = (LinearLayout) findViewById(R.id.liny_Restauants);
      //  l6 = (LinearLayout) findViewById(R.id.liny_police);

        l1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(MainActivity.this, LoginActivity.class);
                startActivity(intent);
            }
        });
        l2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                startActivity(new Intent(MainActivity.this, NewActivity.class));
            }
        });
    /*    l3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(MainActivity.this, ListOneActivity.class);
                startActivity(intent);
            }
        });*/
        l4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(MainActivity.this, ReportActivity.class);
                startActivity(intent);
            }
        });
        l5.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(MainActivity.this, Activity.class);
                startActivity(intent);
            }
        });
    /*    l6.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(MainActivity.this, ListOneActivity.class);
                startActivity(intent);
            }
        });

*/



        TextView bra = (TextView) findViewById(R.id.label);
        Typeface myfont = Typeface.createFromAsset(getAssets(), "centurygothicbold.ttf");
        bra.setTypeface(myfont);
/*
        bottom_app_bar.replaceMenu(R.menu.bottom_menu_main);

        bottom_app_bar.setOnMenuItemClickListener(new BottomAppBar.OnMenuItemClickListener() {
            @Override
            public boolean onMenuItemClick(MenuItem item) {
                int id = item.getItemId();

                if (id == R.id.power_off) {
                    finishAffinity();
                    return true;
                } else if (id == R.id.location) {
                    Intent intent = new Intent(MainActivity.this, NotificationActivity.class);
                    startActivity(intent);
                    return true;
                }
                return onOptionsItemSelected(item);
            }
        });*/
/*
        floatingActionButton = (FloatingActionButton) findViewById(R.id.fab_call);

        floatingActionButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

            }
        });*/

        imageView = (ImageView) findViewById(R.id.setting_lang);
        imageView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(MainActivity.this, Language.class);
                startActivity(intent);
            }
        });
        imageView2 = (ImageView) findViewById(R.id.setting_login);
        imageView2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                finishAffinity();
            }
        });
    }


    public void Fedback(View view) {

        startActivity(new Intent(MainActivity.this, NewActivity.class));
    }
}
