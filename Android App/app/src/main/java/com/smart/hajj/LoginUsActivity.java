package com.smart.hajj;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;

import com.smart.hajj.hajj.R;

import com.smart.Adapters.SettingListAdapter;


    public class LoginUsActivity extends AppCompatActivity {

        ListView list;

        String[] web = {
                "Hajj Member",
                "Hajj Responsable",
                "Driver",
                "hospital",
                "hospital",
                "Hotel"
        };

        Integer[] imageId = {
                R.drawable.contact,
                R.drawable.agency,
                R.drawable.driver,
                R.drawable.hospital,
                R.drawable.hotel,
                R.drawable.hotel
        };

        @Override
        protected void onCreate(Bundle savedInstanceState) {
            super.onCreate(savedInstanceState);
            setContentView(R.layout.activity_login_us);

            SettingListAdapter adapter = new
                    SettingListAdapter(LoginUsActivity.this, web, imageId);
            list = (ListView) findViewById(R.id.list);
            list.setAdapter(adapter);
            list.setOnItemClickListener(new AdapterView.OnItemClickListener() {
                @Override
                public void onItemClick(AdapterView<?> parent, View view,
                                        int position, long id) {
                    Intent intent = new Intent(LoginUsActivity.this, LoginActivity.class);
                    startActivity(intent);
                }
            });
        }
    }

