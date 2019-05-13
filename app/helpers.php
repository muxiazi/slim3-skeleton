<?php

if (!function_exists('base_path')) {
    function base_path($path = '')
    {
        return __DIR__.'/..//'.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}

if (!function_exists('env')) {
    function env($key, $default = null)
    {
        $value = getenv($key);
        if (false === $value) {
            return $default;
        }
        switch (strtolower($value)) {
            case 'true' === $value:
                return true;
            case 'false' === $value:
                return false;
            default:
                return $value;
        }
    }
}
