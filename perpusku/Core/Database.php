<?php

namespace Perpus\Perpusku\Core;

use PDO;
use PDOException;

class Database
{
    private $host = DBHOST,
            $user = DBUSER,
            $pass = DBPASS,
            $dbname = DBNAME,
            $dbh, $stmt;
    public function __construct()
    {
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        $dsn = "mysql:host=". $this->host .";dbname=". $this->dbname;
        
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        
        } catch (PDOException $e) {
            $this->dbh->rollBack();
            die($e->getMessage());
        }
    }

    public function __destruct()
    {
        $this->dbh = null;
    }


    public function query($query)
    {
        
        $this->stmt = $this->dbh->prepare($query);
    }



    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case (is_int($value)) :
                    $type = PDO::PARAM_INT;
                    break;
                case (is_bool($value)) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case (is_null($value)) :
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }

            $this->stmt->bindValue($param, $value, $type);
        }
    }


    public function execute()
    {
        $this->stmt->execute();
    }

    public function get()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getAll()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getRow()
    {
        $this->execute();
        return $this->stmt->rowCount();
    }

    public function dbh()
    {
        return $this->dbh;
    }

    public function stmt()
    {
        return $this->stmt;
    }

    public function start()
    {
        $this->dbh->beginTransaction();
    }

    public function end()
    {
        $this->dbh->commit();
    }

    

   
}