<?php
define('WEBROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
require(ROOT . 'app/Core/core.php');
require(ROOT . 'app/Core/router.php');
require(ROOT . 'app/Core/request.php');
require(ROOT . 'app/Core/dispatcher.php');
$dispatch = new Dispatcher();
$dispatch->dispatch();
?>