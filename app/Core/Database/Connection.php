<?php

namespace App\Core\Database;

use App\Core\Configuration;
use PDO;
use PDOException;

class Connection extends Configuration
{

    private $host, $user, $pass, $dbname, $charset;

    public function __construct()
    {
        $this->host = self::DB_HOST;
        $this->user = self::DB_USER;
        $this->pass = self::DB_PASS;
        $this->dbname = self::DB_NAME;
        $this->charset = self::DB_CHARSET;
    }

    public function connection()
    {
        try {
            $pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}", $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $pdo;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
}
