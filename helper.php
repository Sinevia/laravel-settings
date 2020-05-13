<?php

if (function_exists('setting_get') == false) {

    function setting_get($key, $default = null) {
        $setting = \Sinevia\Settings\Models\Setting::where('Key', $key)->first();
        if ($setting == null) {
            return $default;
        }
        return json_decode($setting->Value, true);
    }

}

if (function_exists('setting_set') == false) {

    function setting_set($key, $value) {
        $setting = \Sinevia\Settings\Models\Setting::where('Key', $key)->first();
        if ($setting == null) {
            $setting = new Sinevia\Settings\Models\Setting;
            $setting->Key = $key;
        }
        $setting->Value = json_encode($value);
        return $setting->save();
    }

}
