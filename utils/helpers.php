<?php

if(!function_exists('dd')) {
    function dd($dump) {
        var_dump($dump);
        die();
    }
}