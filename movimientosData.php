<?php

require 'vendor/autoload.php';

use \Monolog\Logger;
use \Monolog\Handler\RotatingFileHandler;
use \Monolog\Handler\BrowserConsoleHandler;

$logger = new Logger('LogABMTurnosDataBase');
$logger->pushHandler(new RotatingFileHandler('LogABMTurnosDataBase.log'), 7);
$logger->pushHandler(new BrowserConsoleHandler());


$logger->info("MOVIMIENTO: ", array($_REQUEST['movimiento']));


?>