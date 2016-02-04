<?php

require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config.php');

$controller = new Controller();
$controller->call();
$view = new View($controller);
