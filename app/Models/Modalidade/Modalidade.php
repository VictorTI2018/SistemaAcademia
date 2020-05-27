<?php

namespace App\Models\Modalidade;

use App\Models\Model;

class Modalidade extends Model {

    protected $table = 'modalidades';

    protected $primaryKey = 'id';

    protected $columns = ['nome', 'mensalidade'];

    public function existsModalidade($nome)
    {
        $query = "SELECT * FROM {$this->table} WHERE nome = :nome";
        $stmt = $this->db->connection()->prepare($query);
        $stmt->bindValue(':nome', $nome);
        $stmt->execute();
        return $stmt->fetch();

    }
}