<?php
require_once('model/config/Config.Interface.php');
class Database {
    private static $instance = NULL;

    private function __construct() {}

    public static function getInstance()
    {
        if(self::$instance == NULL)
            try {
                self::$instance = new PDO(
                        "mysql:host=".Config::DB_HOST.";dbname=".Config::DB_NAME."",
                        Config::DB_USER,
                        Config::DB_PWD);
            }
            catch (PDOException $ex){
                self::$instance = NULL;
            }
        return self::$instance;
    }
    public static function close()
    {
        self::$instance = NULL;
    }
}
