<?php

namespace App\Models\Aluno;

use App\Models\Model;

class Aluno extends Model
{

    protected $table = 'alunos';

    protected $primaryKey = 'id';

    protected $columns = [
        'nome', 'email', 'telefone', 'modalidade_id', 'user_id'
    ];

    protected $join = ['modalidades' => 'modalidade_id', 'users' => 'user_id'];
}
