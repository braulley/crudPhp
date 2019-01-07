<?php
    namespace app\models;
    use PDO;

    class Connection {

        public static function connect(){
            
            try {
                $conn = new \PDO("mysql:host=localhost;dbname=php_database", "root", "",    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                return $conn; 
            }catch(PDOException $e){
                return $e->getMessage();
            } 
        }
    }

?>