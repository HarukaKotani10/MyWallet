<?php

require_once('inc/config.inc.php');
require_once('inc/Entity/Page.class.php');
require_once('inc/Utility/RecordDAO.class.php');
require_once('inc/Entity/Record.class.php');
require_once('inc/Utility/PDOService.class.php');

RecordDAO::initialize("Record");

Page::header();
Page::login();
Page::footer();

?>