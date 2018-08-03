package com.smart.LeslistView;

import android.content.Intent;
import android.graphics.Typeface;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.BaseAdapter;
import android.widget.ListView;
import android.widget.TextView;

import com.smart.hajj.MapsActivity;
import com.smart.hajj.hajj.R;

import java.util.ArrayList;

import de.hdodenhof.circleimageview.CircleImageView;

public class ListOneActivity extends AppCompatActivity {


    final static int[] listImg = {R.drawable.md_1,
            R.drawable.md_2,
            R.drawable.md_3,
            R.drawable.md_4,
            R.drawable.md_5,
            R.drawable.md_6,
            R.drawable.md_7,
            R.drawable.md_8,
    };


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_list_one);

        TextView bra = (TextView) findViewById(R.id.titel);
        Typeface myfont = Typeface.createFromAsset(getAssets(), "centurygothicbold.ttf");
        bra.setTypeface(myfont);


        String[] listPlaces = getResources().getStringArray(R.array.list_places);
        String[] listPlaces_adresse = getResources().getStringArray(R.array.list_places_adresse);
        ArrayList<list_item> list = new ArrayList<list_item>();
        for (int i = 0; i < listPlaces.length; i++) {
            list.add(new list_item(i, listImg[i], listPlaces[i], listPlaces_adresse[i]));
        }


        ListOneActivity.ListAdapter ad = new ListOneActivity.ListAdapter(list);
        ListView listView = (ListView) findViewById(R.id.list);
        listView.setAdapter(ad);

        listView.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                Intent send_data = new Intent(ListOneActivity.this, MapsActivity.class);

                if (position == 0) {
                    // TEST
                    send_data.putExtra("Places", "Saudi National Hospital");
                    send_data.putExtra("siteWeb", "kfshrc.edu.sa");
                    send_data.putExtra("latitude", 32.474755);
                    send_data.putExtra("longitude", 3.744358);
                    startActivity(send_data);
                } else if (position == 1) {
                    //24.6879964,46.7011092
                    send_data.putExtra("Places", "King Faisal Hospital");
                    send_data.putExtra("siteWeb", "https://www.kfshrc.edu.sa/en/home");
                    send_data.putExtra("latitude", 24.6879964);
                    send_data.putExtra("longitude", 46.7011092);
                    startActivity(send_data);
                } else if (position == 2) {
                    send_data.putExtra("Places", "Al Rafiea Hospital");
                    send_data.putExtra("siteWeb", "https://www.kfshrc.edu.sa/en/home");
                    send_data.putExtra("latitude", 32.474755);
                    send_data.putExtra("longitude", 3.744358);
                    startActivity(send_data);

                }else if (position == 3) {
                    send_data.putExtra("Places", "Security Forces Hospital");
                    send_data.putExtra("siteWeb", "https://www.kfshrc.edu.sa/en/home");
                    send_data.putExtra("latitude", 32.474755);
                    send_data.putExtra("longitude", 3.744358);
                    startActivity(send_data);

                }else if (position == 4) {
                    send_data.putExtra("Places", "Hôtel de la tour d'Essafa");
                    send_data.putExtra("siteWeb", "https://www.kfshrc.edu.sa/en/home");
                    send_data.putExtra("latitude", 32.474755);
                    send_data.putExtra("longitude", 3.744358);
                    startActivity(send_data);

                }else if (position == 5) {
                    send_data.putExtra("Places", "Hotel Pullman Zamzam Makkah");
                    send_data.putExtra("siteWeb", "https://www.kfshrc.edu.sa/en/home");
                    send_data.putExtra("latitude", 32.474755);
                    send_data.putExtra("longitude", 3.744358);
                    startActivity(send_data);

                }else if (position == 6) {
                    send_data.putExtra("Places", "Mövenpick Hotel");
                    send_data.putExtra("siteWeb", "https://www.kfshrc.edu.sa/en/home");
                    send_data.putExtra("latitude", 32.474755);
                    send_data.putExtra("longitude", 3.744358);
                    startActivity(send_data);

                }else if (position == 7) {
                    send_data.putExtra("Places", "Hotel Fairmont Makkah");
                    send_data.putExtra("siteWeb", "https://www.kfshrc.edu.sa/en/home");
                    send_data.putExtra("latitude", 32.474755);
                    send_data.putExtra("longitude", 3.744358);
                    startActivity(send_data);

                }else if (position == 8) {
                    send_data.putExtra("Places", "Al Rafiea Hospital");
                    send_data.putExtra("siteWeb", "https://www.kfshrc.edu.sa/en/home");
                    send_data.putExtra("latitude", 32.474755);
                    send_data.putExtra("longitude", 3.744358);
                    startActivity(send_data);

                }




            }
        });

    }

    class ListAdapter extends BaseAdapter {
        ArrayList<list_item> listitem = new ArrayList<list_item>();

        ListAdapter(ArrayList<list_item> listitem) {
            this.listitem = listitem;
        }

        @Override
        public int getCount() {
            return listitem.size();
        }

        @Override
        public long getItemId(int position) {
            return position;
        }

        @Override
        public Object getItem(int position) {
            return listitem.get(position).places;
        }

        @Override
        public View getView(int i, View convertview, ViewGroup parent) {
            LayoutInflater layoutInflater = getLayoutInflater();
            View view = layoutInflater.inflate(R.layout.row_item, null);

            TextView places = (TextView) view.findViewById(R.id.textView);
            TextView places_adresse = (TextView) view.findViewById(R.id.textView_adresse);
            CircleImageView img = (CircleImageView) view.findViewById(R.id.circleimageview);

            places.setText(listitem.get(i).places);
            places_adresse.setText(listitem.get(i).places_adresse);
            img.setImageResource(listitem.get(i).img);

            return view;
        }

    }
}
