<?php

require_once('inc/config.inc.php');
require_once('inc/Entity/Page.class.php');
require_once('inc/Entity/Record.class.php');
require_once('inc/Utility/PDOService.class.php');
require_once('inc/Utility/RecordDAO.class.php');


RecordDAO::initialize("Record");

//$list = IncomeDAO::getList();
Page::header();
Page::topPage();
Page::footer();

?>