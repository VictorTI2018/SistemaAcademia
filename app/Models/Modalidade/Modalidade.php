<?php

namespace App\Models\Modalidade;

use App\Models\Model;

class Modalidade extends Model {

    protected $table = 'modalidades';

    protected $primarKey = 'id';

    protected $columns = ['nome', 'mensalidade'];
}