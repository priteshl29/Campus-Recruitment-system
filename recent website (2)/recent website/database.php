<?php

class Database extends PDO
{
    public function __construct($DB_NAME = 'recent websitw', $DB_TYPE = 'mysql', $DB_HOST = 'localhost', $DB_USER = 'root', $DB_PASS = '')
    {
        parent::__construct($DB_TYPE . ':host=' . $DB_HOST . ';dbname=recent websitw' . $DB_NAME, $DB_USER, $DB_PASS);
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC)
    {
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue("$key", $value);
        }

        if (!$sth->execute()) {
            // var_dump($sth->errorInfo());
            return false;
            // $this->handleError();
        } else {
            return $sth->fetchAll($fetchMode);
        }
    }

    public function selectAll($table, $where = array())
    {
        $where1 = array();
        foreach ($where as $key => $value) {
            array_push($where1, "`" . $key . "` = :" . $key);
        }
        $where2 = implode(" AND ", $where1);
        $sql = "SELECT * FROM `" . $table . "` WHERE " . $where2 . ";";

        if (empty($where)) {
            $sql = "SELECT * FROM " . $table . ";";
        }

        $sth = $this->prepare($sql);
        foreach ($where as $key => $value) {
            $sth->bindValue("$key", $value);
        }
        if (!$sth->execute()) {
            return false;
            // $this->handleError();	
        } else {
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function selectWhere($what = array(), $from, $where = array())
    {
        $toselect1 = "`" . implode("` , `", $what) . "`";
        $where1 = array();
        foreach ($where as $key => $value) {
            array_push($where1, "`" . $key . "` = :" . $key);
        }
        $where2 = implode(" AND ", $where1);
        if ($what == array()) {
            $toselect1 = '*';
        }
        $sql = "SELECT " . $toselect1 . " FROM `" . $from . "` WHERE " . $where2 . ";";

        try {
            $sth = $this->prepare($sql);
            foreach ($where as $key => $value) {
                $sth->bindValue("$key", $value);
            }
            if (!$sth->execute()) {
                return false;
                // $this->handleError();	
            } else {
                return $sth->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    public function insert($table, $data)
    {
        ksort($data);

        $fieldNames = implode('`, `', array_keys($data));
        $fieldValues = ':' . implode(', :', array_keys($data));

        try {
            $sth = $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");

            foreach ($data as $key => $value) {
                $sth->bindValue(":$key", $value);
            }

            if (!$sth->execute()) {
                // var_dump($sth);
                return false;
            } else {
                return true;
            }
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
}