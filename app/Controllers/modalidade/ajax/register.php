<?php

use App\Models\Modalidade\Modalidade;
use App\Core\Input\Field;

if (isset($_POST)) {
    $field = new Field();
    $data = $field->request($_POST);
    $mod = new Modalidade();
    if ($mod->existsModalidade($data['nome'])) {
        __(["validator" => true, "status" => false]);
    } else {
        if ($mod->save($data)) {
            __(["status" => true]);
        }
    }
} else {
    header("Location:/criar_modalidade");
}
