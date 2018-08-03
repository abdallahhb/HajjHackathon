package com.smart.hajj;

import android.app.AlertDialog;
import android.app.Dialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

import com.smart.hajj.hajj.R;

public class ReportingAccident extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_reporting_accident);
    }

    public void Repport(View view) {
        AlertDialog alert = new AlertDialog.Builder(this).create();
        alert.setTitle("Thanks for your help");
        alert.setMessage("You contribute to saving thousands of people");
        alert.setButton(Dialog.BUTTON_POSITIVE,"OK",new DialogInterface.OnClickListener(){

            @Override
            public void onClick(DialogInterface dialog, int which) {
                Intent intent = new Intent(ReportingAccident.this, MainActivity.class);
                startActivity(intent);
            }
        });

        alert.show();
    }
}
