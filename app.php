<?php
require_once __DIR__ . '/vendor/autoload.php';
require 'src/Fetcher.php';

define('__ROOT__', dirname(__FILE__)); 


$fetcher = new Fetcher();

print_r($fetcher->fetch());