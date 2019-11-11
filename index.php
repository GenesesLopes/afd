<?php

require 'vendor/autoload.php';

//limite de uso de memória
ini_set("memory_limit","-1");
//tempo limite de execução
set_time_limit(300);

use Convenia\AfdReader\AfdReader;

$afdReader = new AfdReader('ACJEF_42003_251020191313.txt');

//Só pra saber quais dados deve acessar
echo json_encode($afdReader->getByUser());

//Pecorrer array, tranformar em objeto e acessar os dados
// foreach ($afdReader->getByUser() as $index => $valor) {
//    foreach ($valor as $key => $valor2) {
//        $objeto = (object)$valor2;
//     echo $objeto->sequency."<br>";
//    }
   
// }