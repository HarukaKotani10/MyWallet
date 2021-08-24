<?php
class RecordDAO{

    private static $db;

    static function initialize($className){
        self::$db = new PDOService($className);
    }

    static function addRecord(Record $addRecord) {
        $sql = "INSERT INTO Record(RecordDate, Amount, Category) VALUE(:date, :amount, :category)";

        self::$db->query($sql);
        self::$db->bind(":date", $addRecord->getRecordDate());
        self::$db->bind(":amount", $addRecord->getAmount());
        self::$db->bind(":category", $addRecord->getCategory());

        // QUERY BIND EXECUTE 
        self::$db->execute();
        // You may want to return the last inserted id
    }
}

?>