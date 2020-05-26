<?php

use App\Models\Modalidade\Modalidade;


$mod = new Modalidade();

$modalidades = [];
if (isset($_GET['term'])) {
    $term = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_SPECIAL_CHARS);
    $modalidades = $mod->applyFilter($term);
} else {
    $modalidades = $mod->all();
}

$layout->add('modalidade/view_all');
