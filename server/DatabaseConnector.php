<?php
/**
 * Created by PhpStorm.
 * User: Marejean
 * Date: 7/14/16
 * Time: 10:49 PM
 */

class DatabaseConnector {
    protected $dbHost = "mysql:host=localhost;dbname=vodooDolls";
    protected $user = "root";
    protected $pass = "";
    protected $dbHolder;

    protected function openConnection() {
        $this->dbHolder = new PDO($this->dbHost, $this->user, $this->pass);
    }

    protected function closeConnection() {
        $this->dbHolder = null;
    }
} 