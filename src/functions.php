<?php

if (!function_exists('sweet')) {
    function sweet($title = null, $message = null, $label = 'info')
    {
        $sweetNotification = app('sweet');

        if (!func_num_args()) {
            return $sweetNotification;
        }

        return $sweetNotification->message($title, $message, $label);
    }
}