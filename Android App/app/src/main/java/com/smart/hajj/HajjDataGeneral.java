package com.smart.hajj;

import android.Manifest;
import android.content.Intent;
import android.content.pm.PackageManager;
import android.net.Uri;
import android.support.v4.app.ActivityCompat;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.TextView;

import com.smart.hajj.hajj.R;

public class HajjDataGeneral extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_hajj_data_general);

        TextView MyEditText = (TextView) findViewById(R.id.HajjId);
        MyEditText.setText(getIntent().getExtras().getString("HajjId"));
    }

    public void CallPhone(View view) {
        Intent intent = new Intent(Intent.ACTION_CALL, Uri.parse("tel:" + "213553556185"));
        if (ActivityCompat.checkSelfPermission(this, Manifest.permission.CALL_PHONE) != PackageManager.PERMISSION_GRANTED) {
            return;
        }
        startActivity(intent);
    }
}
