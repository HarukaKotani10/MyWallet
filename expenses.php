<?php

require_once('inc/config.inc.php');
require_once('inc/Entity/Page.class.php');
require_once('inc/Entity/Record.class.php');
require_once('inc/Utility/RecordDAO.class.php');
require_once('inc/Utility/PDOService.class.php');

RecordDAO::initialize("Expense");

if(!empty($_POST)){

        $addExpense = new Record();
        $addExpense->setCategory($_POST['category']);
        $addExpense->setAmount($_POST['amount']);
        $addExpense->setRecordDate($_POST['date']);
    
        RecordDAO::addRecord($addExpense);

}
Page::header();
Page::expenses();
Page::footer();

?>