<?php

$idade = 17;
$nome = 'Fernando';

function verificarIdade($idade, $nome) {
    if($idade >= 18 && $nome === 'Marcos') {
        echo "Pode entrar";
    } else {
        echo "Não pode entrar";
    }
}

echo verificarIdade($idade, $nome);