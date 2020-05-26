<?php


require __DIR__ . '/bootstrap/app.php';

use App\Core\Template\Layout;

$layout = new Layout();

use App\Models\Aluno\Aluno;

$aluno = new Aluno();

$data = [
    'nome' => 'Debora Oliveira',
    'email' => 'debora@teste.com',
    'telefone' => '(17) 988099310',
    'modalidade_id' => 2,
    'user_id' => 1
];

var_dump($aluno->allWithJoin());
die();

require $layout->master("layout");