<?php

$peso = 74.0;
$altura = 1.79;
$imc = $peso / $altura**2;

echo "Seu IMC é $imc.\nVocê está com o IMC ";

if ($imc < 18.5) {
    echo "abaixo";
}
else if ($imc < 25) {
    echo "dentro";
}
else {
    echo "acima";
}

echo " do normal.";

