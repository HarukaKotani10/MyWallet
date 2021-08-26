<?php

require_once('inc/config.inc.php');
require_once('inc/Entity/Page.class.php');
require_once('inc/Utility/RecordDAO.class.php');
require_once('inc/Entity/Record.class.php');
require_once('inc/Utility/PDOService.class.php');

RecordDAO::initialize("Record");

if(!empty($_POST)){

        $addIncome = new Record();
        $addIncome->setCategory($_POST['category']);
        $addIncome->setAmount($_POST['amount']);
        $addIncome->setRecordDate($_POST['date']);
        $addIncome->setRecordType("Income");
        RecordDAO::addRecord($addIncome);

}
Page::header();
Page::expenses();
Page::footer();

?>