<?php


//DESAFIO 1: EXIBIR TODOS OS NÚMEROS ÍMPARES DO ZERO AO CEM

$cont1 = 0;

while ($cont1 <= 100) {
    if ($cont1 % 2 != 0) {
        echo $cont1 . PHP_EOL;
    }
    $cont1++;
}