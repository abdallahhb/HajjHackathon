package com.smart.hajj;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;

import com.smart.hajj.hajj.R;

public class HajjIdInsert extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_hajj_id_insert);
    }

    public void GoHajjDataGeneral(View view) {
        EditText texte = ((EditText)findViewById(R.id.editText));
        String id = texte.getText().toString();

        Intent intent = new Intent(HajjIdInsert.this, HajjDataGeneral.class);
        intent.putExtra("id", id) ;
        startActivity(intent);
    }
}
