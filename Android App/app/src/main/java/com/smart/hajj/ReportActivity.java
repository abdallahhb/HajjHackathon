package com.smart.hajj;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;
import android.widget.Toast;

import com.smart.hajj.hajj.R;

import com.smart.Adapters.SettingListAdapter;
import com.smart.settings.Language;

public class ReportActivity extends AppCompatActivity {

    ListView list;

    String[] web = {
            "Read Hajj Data",
            "Accident",
            "Lost"
    };

    Integer[] imageId = {
            R.drawable.id_card,
            R.drawable.accident,
            R.drawable.lost
    };

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_report);

        SettingListAdapter adapter = new
                SettingListAdapter(ReportActivity.this, web, imageId);
        list = (ListView) findViewById(R.id.list);
        list.setAdapter(adapter);
        list.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view,
                                    int position, long id) {
                Intent intent = null;
                switch (position) {
                    case 0:
                        intent = new Intent(ReportActivity.this,HajjIdInsert.class);
                        startActivity(intent);
                        break;
                    case 1:
                        intent = new Intent(ReportActivity.this, ReportingAccident.class);
                        startActivity(intent);
                        break;
                    case 2:
                        intent = new Intent(ReportActivity.this, ReportingLost.class);
                        startActivity(intent);
                        break;
                }
            }
        });
    }

    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        Intent intent = null;
        switch (item.getItemId()) {

            case R.id.lang:
                intent = new Intent(ReportActivity.this, Language.class);
                startActivity(intent);
                break;

            case R.id.message:
                Toast.makeText(getApplicationContext(), "Hey, this is a Menu test !", Toast.LENGTH_LONG).show();
                break;

            case R.id.exit:
                finishAffinity();

                break;

            default:
                break;
        }
        return super.onOptionsItemSelected(item);
    }


}
