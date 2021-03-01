<?php

if (!function_exists('checkEnv')) {
    function checkEnv()
    {
        if (config('app.env') == 'production') {
            return true;
        }

        return false;
    }
}
