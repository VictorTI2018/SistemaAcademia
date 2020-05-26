<?php

if (!function_exists('__')) {
    function __($message)
    {
        echo json_encode($message);
    }
}

if (!function_exists('dd')) {
    function dd($dump)
    {
        var_dump($dump);
        die();
    }
}
