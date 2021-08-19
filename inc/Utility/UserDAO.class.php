<?php
class UserDAO{

    private static $db;

    static function initialize($className){
        self::$db = new PDOService($className);
    }
}

?>