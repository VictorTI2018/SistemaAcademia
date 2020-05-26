<?php


require __DIR__ . '/bootstrap/app.php';

use App\Core\Template\Layout;

$layout = new Layout();

use App\Models\Aluno\Aluno;

$aluno = new Aluno();


var_dump($aluno->findWithJoin(2));
die();

require $layout->master("layout");