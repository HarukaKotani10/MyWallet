<?php
class IncomeDAO{

    private static $db;

    static function initialize($className){
        self::$db = new PDOService($className);
    }
}

?>