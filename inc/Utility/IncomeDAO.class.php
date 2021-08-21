<?php
class IncomeDAO{

    private static $db;

    static function initialize($className){
        self::$db = new PDOService($className);
    }

    static function addIncome(Income $addIncome) {
        $sql = "INSERT INTO Income(IncomeDate, Amount, Category) VALUE(:date, :amount, :category)";

        self::$db->query($sql);
        self::$db->bind(":date", $addIncome->getIncomeDate());
        self::$db->bind(":amount", $addIncome->getAmount());
        self::$db->bind(":category", $addIncome->getCategory());

        // QUERY BIND EXECUTE 
        self::$db->execute();
        // You may want to return the last inserted id
    }
}

?>