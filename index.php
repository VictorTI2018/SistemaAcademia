<?php


require __DIR__ . '/bootstrap/app.php';

use App\Core\Template\Layout;

$layout = new Layout();



require $layout->master("layout");