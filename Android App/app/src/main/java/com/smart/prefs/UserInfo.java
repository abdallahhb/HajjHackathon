package com.smart.prefs;

import android.content.Context;
import android.content.SharedPreferences;

public class UserInfo {
    private static final String TAG = UserSession.class.getSimpleName();
    private static final String PREF_NAME = "userinfo";
    private static final String KEY_USERNAME = "username";
    private static final String KEY_EMAIL = "email";
    private static final String KEY_PASSWORD = "password";
    private static final String KEY_USER_ID = "user_id";
    private static final String KEY_LANG = "lang";
    SharedPreferences prefs;
    SharedPreferences.Editor editor;
    Context ctx;

    public UserInfo(Context ctx) {
        this.ctx = ctx;
        prefs = ctx.getSharedPreferences(PREF_NAME, ctx.MODE_PRIVATE);
        editor = prefs.edit();
    }

    public void setUsername(String username){
        editor.putString(KEY_USERNAME, username);
        editor.apply();
    }

    public void setPassword(String password){
        editor.putString(KEY_PASSWORD, password);
        editor.apply();
    }

    public void setEmail(String email){
        editor.putString(KEY_EMAIL, email);
        editor.apply();
    }

    public void setUser_id(String user_id){
        editor.putString(KEY_USER_ID, user_id);
        editor.apply();
    }

    public void setLang(String lang){
        editor.putString(KEY_LANG, lang);
        editor.apply();
    }

    public void clearUserInfo(){
        editor.clear();
        editor.commit();
    }

    public String getKeyUsername(){return prefs.getString(KEY_USERNAME, "");}

    public String getKeyEmail(){return prefs.getString(KEY_EMAIL, "");}

    public String getKeyPassword(){return prefs.getString(KEY_PASSWORD, "");}

    public String getKeyUser_id(){return prefs.getString(KEY_USER_ID, "");}

    public String getKeyLang(){return prefs.getString(KEY_LANG, "");}
}
