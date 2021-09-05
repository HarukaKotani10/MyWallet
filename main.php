<?php

require_once('inc/config.inc.php');
require_once('inc/Entity/Page.class.php');
require_once('inc/Utility/RecordDAO.class.php');
require_once('inc/Entity/Record.class.php');
require_once('inc/Utility/PDOService.class.php');

RecordDAO::initialize("Record");

$records = RecordDAO::getRecords();
$balance = RecordDAO::getBalance();

Page::header();
Page::main($records, $balance);
Page::footer();

?>