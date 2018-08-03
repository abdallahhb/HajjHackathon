package com.smart.settings;

import android.app.ProgressDialog;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;
import com.smart.hajj.hajj.R;
import java.util.Locale;
import com.smart.Adapters.SettingListAdapter;


public class Language extends AppCompatActivity {
    private static Locale myLocale;
    private ProgressDialog progressDialog;

    ListView list;

    String[] web = {
            "العربية",
            "Françias",
            "English",
            "Turkey",
            "Italy",
            "Russia",
            "Germany",
            "Brazil",
            "China"
    };


    Integer[] imageId = {
            R.drawable.saudi_arabia,
            R.drawable.united_kingdom,
            R.drawable.france,
            R.drawable.turkey,
            R.drawable.italy,
            R.drawable.russia,
            R.drawable.germany,
            R.drawable.brazil,
            R.drawable.china
    };

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_language);

        SettingListAdapter adapter = new
                SettingListAdapter(Language.this, web, imageId);
        list = (ListView) findViewById(R.id.list);
        list.setAdapter(adapter);
        list.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view,
                                    int position, long id) {
                String lang = "en";  //Default Language
                switch (position) {
                    case 0:
                        lang = "ar";
                        break;
                    case 1:
                        lang = "fr";
                        break;
                    case 2:
                        lang = "eng";
                    case 3:
                        lang = "ar";
                        break;
                    case 4:
                        lang = "fr";
                        break;
                    case 5:
                        lang = "eng";
                    case 6:
                        lang = "ar";
                        break;
                    case 7:
                        lang = "fr";
                        break;
                    case 8:
                        lang = "eng";
                        break;
                }
            }
        });
    }
}

