<?php

require_once(realpath(dirname(__FILE__).'/../..').'/htdocs/hw4/vendor/autoload.php');
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
$logger = new Logger('channel-name');
$logger->pushHandler(new StreamHandler(__DIR__.'/src/resources/jigsaw.log', Logger::DEBUG));
$logger->info('An upload was attempted');

?>
