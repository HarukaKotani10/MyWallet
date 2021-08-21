<?php

require_once('inc/config.inc.php');
require_once('inc/Entity/Page.class.php');
require_once('inc/Entity/Income.class.php');
require_once('inc/Utility/IncomeDAO.class.php');
require_once('inc/Utility/PDOService.class.php');

IncomeDAO::initialize("Income");

if(!empty($_POST)){

        $addIncome = new Income();
        $addIncome->setCategory($_POST['category']);
        $addIncome->setAmount($_POST['amount']);
        $addIncome->setIncomeDate($_POST['date']);
    
        IncomeDAO::addIncome($addIncome);

}
Page::header();
Page::expenses();
Page::footer();

?>