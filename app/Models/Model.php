<?php

namespace App\Models;

use App\Core\Database\Connection;

use App\Core\Database\PersistDB;

abstract class Model extends Connection
{
    use PersistDB;

    protected $table;

    protected $columns;

    /** @var \App\Core\Database\Connection */
    protected $db;

    protected $join;

    public function __construct()
    {
        $this->db = new Connection();
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
     * @param array $where
     * @return void
     */
    public function find($where)
    {
        $whereKey = array_keys($where);
        $query = "SELECT * FROM {$this->table} ";
        $query .= " WHERE {$whereKey[0]} = :{$whereKey[0]}";
        $stmt = $this->db->connection()->prepare($query);
        $stmt->execute($where);
        return $stmt->fetch();
    }

    /**
     * Método padrão para buscar apenas um registro com join
     *
     * @param array $where
     * @return void
     */
    public function findWithJoin($where)
    {
        $whereKey = array_keys($where);
        $query = "SELECT * FROM {$this->table} as t";
        if ($this->join && count($this->join) > 0) {
            foreach ($this->join as $key => $value) {
                $query .= " INNER JOIN {$key}  ON t.{$value} = {$key}.id";
            }
        }
        $query .= " WHERE t.{$whereKey[0]} = :{$whereKey[0]}";
        $stmt = $this->db->connection()->prepare($query);
        $stmt->execute($where);
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
}
