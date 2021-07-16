<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/cpf.php';



$rick = new Titular(new CPF('123.456.789-10'), 'Rick Nelson');
$primeiraConta = new Conta($rick);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('987.654.321.00'), 'Patrícia');
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('123.656.811-05'), 'Abcdefg'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
