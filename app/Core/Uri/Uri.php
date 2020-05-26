<?php

namespace App\Core\Uri;


class Uri
{

    /**
     * Carregar Uri
     *
     * @return void
     */
    public static function loadUri()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public static function validRouterInUri($uri, $router)
    {
        if (!array_key_exists($uri, $router)) {
            return false;
        }

        return "app/Controllers/{$router[$uri]}.php";
    }
}
