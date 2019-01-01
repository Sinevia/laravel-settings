function setting_get($key, $default = null) {
    $setting = \Sinevia\Settings\Setting::where('Key', '=', $key)->first();
    if ($setting == null) {
        return $default;
    }
    return json_decode($setting->Value, true);
}

function setting_set($key, $value) {
    $setting = \Sinevia\Settings\Setting::where('Key', '=', $key)->first();
    if ($setting == null) {
        $setting = new \Sinevia\Setting;
        $setting->Key = $key;
    }
    $setting->Value = json_encode($value);
    return $setting->save();
}
