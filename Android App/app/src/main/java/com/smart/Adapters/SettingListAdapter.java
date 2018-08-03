package com.smart.Adapters;

import android.app.Activity;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.ImageView;
import android.widget.TextView;

import com.smart.hajj.hajj.R;

public class SettingListAdapter extends ArrayAdapter<String>{

    private final Activity context;
    private final String[] SettingItem;
    private final Integer[] imageId;

    public SettingListAdapter(Activity context,
                              String[] web, Integer[] imageId) {
        super(context, R.layout.list_single, web);
        this.context = context;
        this.SettingItem = web;
        this.imageId = imageId;
    }

    @Override
    public View getView(int position, View view, ViewGroup parent) {
        LayoutInflater inflater = context.getLayoutInflater();
        View rowView= inflater.inflate(R.layout.list_single, null, true);
        TextView txtTitle = (TextView) rowView.findViewById(R.id.txt);
        ImageView imageView = (ImageView) rowView.findViewById(R.id.img);
        txtTitle.setText(SettingItem[position]);
        imageView.setImageResource(imageId[position]);
        return rowView;
    }
}