<?php

namespace model;

class Connect {  // Use Singleton
    private $_connection;
    private static $_instance;
    private $_host = "fab.test:3306";
    private $_username = "root";
    private $_password = "";
    private $_database = "fab_db";

    public static function getInstance() {
        if(!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    private function __construct() {
        $this->_connection = new \mysqli($this->_host, $this->_username,
            $this->_password, $this->_database);

        if(mysqli_connect_error()) {
            trigger_error("Failed to connect to MySQL: " . mysql_connect_error(),
                E_USER_ERROR);
        }
    }

    private function __clone() { }

    public function getConnection() {
        return $this->_connection;
    }
}
?>