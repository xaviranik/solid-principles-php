<?php

require_once('../../vendor/autoload.php');

// Let's create loggers
$dbLogger = new \DIP\DBLogger();
$fileLogger = new \DIP\FileLogger();

$logger = new \DIP\Logger($dbLogger, "Logging to DB");
$logger = new \DIP\Logger($fileLogger, "Logging to File");