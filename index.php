<?php


require __DIR__ . '/bootstrap/app.php';

use App\Core\Template\Layout;
use App\Core\Uri\Uri;

$layout = new Layout();

$links = require __DIR__ . '/links.php';

$uri = Uri::loadUri();

if(!Uri::validRouterInUri($uri, $links)) {
    $layout->add("404");
    require $layout->master("layout");
}
$router = Uri::validRouterInUri($uri, $links);
require $router;
require $layout->master("layout");