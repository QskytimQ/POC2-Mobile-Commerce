package com.androidlibrary.module.backend.data;

import android.util.Log;

import org.json.JSONObject;

import java.util.ArrayList;

/**
 * Created by ameng on 2016/6/2.
 */
public class ApiV1IdPhoneData extends JsonData {
    public int result;
    public ArrayList<String> messageGroup;
    public String phone;

    public ApiV1IdPhoneData(String data) {
        super(data);
        Log.e("apiData", data);
    }

    @Override
    protected void processing(JSONObject json) {
        super.processing(json);
        result = getInt(json, "result", 0);
        if (result != 0) {
            return;
        }
        messageGroup = getStringArray(json, "message", "");
        phone = getString(json, "phone", "");
    }
}
