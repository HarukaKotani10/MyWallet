<?php

require_once('inc/config.inc.php');
require_once('inc/Entity/Page.class.php');
require_once('inc/Entity/Income.class.php');
require_once('inc/Utility/IncomeDAO.class.php');
require_once('inc/Utility/PDOService.class.php');

RecordDAO::initialize("Record");

if(!empty($_POST)){

        $addIncome = new Record();
        $addIncome->setCategory($_POST['category']);
        $addIncome->setAmount($_POST['amount']);
        $addIncome->setRecordDate($_POST['date']);
    
        RecordDAO::addIncome($addIncome);

}
Page::header();
Page::expenses();
Page::footer();

?>