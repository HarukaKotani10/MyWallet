<?php

class ExpenseDAO{

    private static $db;

    static function initialize($className){
        self::$db = new PDOService($className);
    }

    static function addExpense(Expenses $addExpense) {
        $sql = "INSERT INTO Expense(ExpenseDate, Amount, Category) VALUE(:date, :amount, :category)";

        self::$db->query($sql);
        self::$db->bind(":date", $addExpense->getExpenseDate());
        self::$db->bind(":amount", $addExpense->getAmount());
        self::$db->bind(":category", $addExpense->getCategory());

        // QUERY BIND EXECUTE 
        self::$db->execute();
        // You may want to return the last inserted id
    }
}

?>