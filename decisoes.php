<?php

$idade = 19;
$nome = 'Rick';
$numeroDePessoas = 2;


echo "Você só pode entrar se tiver a partir de 18 anos e se chamar Rick, ou a partir de 16 anos acompanhado.\n\n";

if (($idade == 18 or $idade > 18) and ($nome == 'Rick')) {
    echo "Você tem $idade anos.\nPode entrar sozinho.";
}

else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos, está acompanhado (a), então pode entrar.";
}

else {
    echo "Você só tem $idade anos. Você não pode entrar sozinho.";
}



echo "\n\nAdeus!";