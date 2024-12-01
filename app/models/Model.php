<?php

namespace app\models;

abstract class Model {

    public function findAll() {
        $query = "select * from $this->table";
        return $this->query($query);
    }

    //Removed for now, as I'm not sure if I need it.
    private function connect() {
        $string = "mysql:hostname=" . DBHOST . ";dbname=" . DBNAME;
        $con = new \PDO($string, DBUSER, DBPASS);
        return $con;
    }
    
    public function query($query, $data = []) {
        $conn = $this->connect();
        $stm = $conn->prepare($query);
        $check = $stm->execute($data);
        if ($check) {
            $result = $stm->fetchAll(\PDO::FETCH_OBJ);
            if (is_array($result) && count($result)) {
                return $result;
            }
        }
        return false;
    }

}
