<?php
class RecordDAO{

    private static $db;

    static function initialize($className){
        self::$db = new PDOService($className);
    }

    static function addRecord(Record $addRecord) {
        $sql = "INSERT INTO Record(UserID, RecordDate, Amount, Category, RecordType) VALUE(:userID, :date, :amount, :category, :recordType)";
    
        self::$db->query($sql);
        self::$db->bind(":userID", 1);
        self::$db->bind(":date", $addRecord->getRecordDate());
        self::$db->bind(":amount", $addRecord->getAmount());
        self::$db->bind(":category", $addRecord->getCategory());
        self::$db->bind(":recordType", $addRecord->getRecordType());

        // QUERY BIND EXECUTE 
        self::$db->execute();
        // You may want to return the last inserted id
    }

    static function getRecords() {
        $sql = "SELECT * FROM Record";

        self::$db->query($sql);
        // QUERY BIND EXECUTE 
        self::$db->execute();
        // You may want to return the last inserted id
        return self::$db->getResultSet();
    }

    static function getBalance() {
        $sql = "SELECT SUM(Amount) AS Balance FROM Record";

        self::$db->query($sql);
        // QUERY BIND EXECUTE 
        self::$db->execute();
        // You may want to return the last inserted id
        return self::$db->singleResult();
    }
}

?>