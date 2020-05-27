<?php

use App\Models\Modalidade\Modalidade;
use App\Core\Input\Field;

if (isset($_GET['id'])) {
    $field = new Field();
    $data = $field->request($_GET);

    $mod = new Modalidade();
    if ($teste = $mod->delete($data['id'])) {
        __(['status' => $teste]);
    } else {
        __(['status' => false]);
    }
}
