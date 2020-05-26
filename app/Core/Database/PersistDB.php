<?php

namespace App\Core\Database;

trait PersistDB
{


    public static function insert($table, $columns)
    {
        
        $query = "INSERT INTO {$table} (";
        $query .= implode(",", $columns) . ")VALUES(";
        $query .= ":" . implode(", :", $columns) . ")";

        return $query;
    }
}
