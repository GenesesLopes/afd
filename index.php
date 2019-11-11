<?php

require 'vendor/autoload.php';

//limite de uso de memória
ini_set("memory_limit","-1");
//tempo limite de execução
set_time_limit(300);

use Convenia\AfdReader\AfdReader;

$afdReader = new AfdReader('ACJEF_42001_251020191313.txt');

var_dump(
    $afdReader->getByUser()
);

// echo 'index';