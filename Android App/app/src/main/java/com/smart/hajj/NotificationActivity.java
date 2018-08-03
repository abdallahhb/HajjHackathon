package com.smart.hajj;

import android.app.AlarmManager;
import android.app.NotificationManager;
import android.app.PendingIntent;
import android.content.Context;
import android.content.Intent;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.support.v4.app.NotificationCompat;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.smart.hajj.hajj.R;

import java.util.GregorianCalendar;

public class NotificationActivity extends AppCompatActivity {
    EditText enter_time;
    Button start, cancel;
    AlarmManager alarmManager;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_notification);

    }

    public void MinaTime(View view) {
        NotificationManager notificationManager = (NotificationManager) getSystemService(Context.NOTIFICATION_SERVICE);
        Bitmap bmp = BitmapFactory.decodeResource(NotificationActivity.this.getResources(), R.drawable.notification);
        NotificationCompat.Builder builder = (NotificationCompat.Builder) new NotificationCompat.Builder(NotificationActivity.this)
                .setContentTitle("منسك منى")
                .setContentText("حان الوقت للقيام بمنسك منى. يتوجب عليك التالي :")
                .setSmallIcon(R.drawable.notification)
                .setLargeIcon(bmp)
                .setAutoCancel(true)
                .setNumber(1);
        notificationManager.notify(1, builder.build());
    }

    public void ArafaTime(View view) {
        NotificationManager notificationManager = (NotificationManager) getSystemService(Context.NOTIFICATION_SERVICE);
        Bitmap bmp = BitmapFactory.decodeResource(NotificationActivity.this.getResources(), R.drawable.notification);
        NotificationCompat.Builder builder = (NotificationCompat.Builder) new NotificationCompat.Builder(NotificationActivity.this)
                .setContentTitle("منسك عرفة")
                .setContentText("حان الوقت للقيام بمنسك عرفة. يتوجب عليك التالي :")
                .setSmallIcon(R.drawable.notification)
                .setLargeIcon(bmp)
                .setAutoCancel(true)
                .setNumber(1);
        notificationManager.notify(1, builder.build());
    }
}
