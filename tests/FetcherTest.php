<?php

define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/src/Fetcher.php');


$fetcher = new Fetcher();

print_r($fetcher->fetch());
