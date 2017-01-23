<?php

if (!function_exists('sweet')) {
    function sweet($title, $message = null)
    {
        $sweetNotification = app('sweet');

        if (!func_num_args()) {
            return $sweetNotification;
        }

        return $sweetNotification->info($title, $message);
    }
}