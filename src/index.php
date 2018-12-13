<?php
define('__ROOT__', dirname(dirname(__FILE__))); 

require 'Fetcher.php';

$fetcher = new Fetcher();

print_r($fetcher->fetch());