<?php

require_once('inc/config.inc.php');
require_once('inc/Entity/Page.class.php');
require_once('inc/Entity/Expenses.class.php');
require_once('inc/Utility/ExpenseDAO.class.php');
require_once('inc/Utility/PDOService.class.php');

ExpenseDAO::initialize("Expense");

if(!empty($_POST)){

        $addExpense = new Record();
        $addExpense->setCategory($_POST['category']);
        $addExpense->setAmount($_POST['amount']);
        $addExpense->setDate($_POST['date']);
    
        ExpenseDAO::addExpense($addExpense);

}
Page::header();
Page::expenses();
Page::footer();

?>