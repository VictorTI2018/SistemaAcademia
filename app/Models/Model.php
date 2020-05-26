<?php

namespace App\Models;

use App\Core\Database\Connection;

use App\Core\Database\PersistDB;

abstract class Model extends Connection
{
    use PersistDB;

    protected $table;

    protected $columns;

    protected $primaryKey;

    /** @var \App\Core\Database\Connection */
    protected $db;

    protected $join;

    public function __construct()
    {
        $this->db = new Connection();
    }

    public function applyFilter($term)
    {
        $query = "SELECT * FROM {$this->table} WHERE nome LIKE :nome OR mensalidade LIKE :mensalidade";
        $stmt = $this->db->connection()->prepare($query);
        $stmt->bindValue(':nome', '%' . $term . '%');
        $stmt->bindValue(':mensalidade', '%' . $term . '%');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * Método padrão para buscar todos os dados
     *
     * @return void
     */
    public function all()
    {
        $query = "SELECT * FROM {$this->table} ";
        $stmt = $this->db->connection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * Método para buscar todos com join
     *
     * @return void
     */
    public function allWithJoin()
    {
        $query = "SELECT * FROM {$this->table} as t";
        if ($this->join && count($this->join) > 0) {
            foreach ($this->join as $key => $value) {
                $query .= " INNER JOIN {$key}  ON t.{$value} = {$key}.id";
            }
        }
        $stmt = $this->db->connection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * Método padrão para buscar apenas um registro do banco
     *
     * @param int $value
     * @return void
     */
    public function find($value)
    {
        $query = "SELECT * FROM {$this->table} ";
        $query .= " WHERE {$this->primaryKey} = :id";
        $stmt = $this->db->connection()->prepare($query);
        $stmt->bindValue(':id', $value);
        $stmt->execute();
        return $stmt->fetch();
    }


    public function findWithJoin($value)
    {
        $query = "SELECT * FROM {$this->table} as t ";
        if ($this->join && count($this->join) > 0) {
            foreach ($this->join as $key => $value) {
                $query .= " INNER JOIN {$key}  ON t.{$value} = {$key}.id";
            }
        }
        $query .= " WHERE t.{$this->primaryKey} = {$value}";
        $stmt = $this->db->connection()->prepare($query);
        $stmt->bindValue(':{$value}', $value);
        $stmt->execute();
        return $stmt->fetch();
    }

    /**
     * Método padrão para persistir um dado no banco
     *
     * @param array $data
     * @return void
     */
    public function save($data)
    {
        $query = PersistDB::insert($this->table, $this->columns);
        $stmt = $this->db->connection()->prepare($query);
        return $stmt->execute($data);
    }

    public function delete($value)
    {
        $query = " DELETE FROM {$this->table} WHERE {$this->primaryKey} = :id";
        $stmt = $this->db->connection()->prepare($query);
        $stmt->bindValue(':id', $value);
        return $stmt->execute();
    }
}
