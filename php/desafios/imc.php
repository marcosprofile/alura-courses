<?php

/**
* Calculo do IMC
* IMC = peso / altura²
*/

$peso = 80;
$altura = 1.80;
$imc = $peso / $altura ** 2;

/**
 * Se IMC for menor que 18.5 = Abaixo do peso;
 * Se IMC for entre 18.5 e 24.9 = Peso normal;
 * Se IMC for entre 25 e 29.9 = Sobrepeso;
 * Se IMC for entre 30 e 34.9 = Obesidade grau 1;
 * Se IMC for entre 35 e 39.9 = Obesidade grau 2;
 * Se IMC for maior que 40 = Obesidade grau 3;
*/

echo "Status do seu peso: ";

if($imc < 18.5) {
    echo "abaixo do peso\n";
} else if($imc >= 18.5 && $imc <= 24.9) {
    echo "peso normal\n";
} else if($imc >= 25 && $imc <= 29.9) {
    echo "sobrepeso\n";
} else if($imc >= 30 && $imc <= 34.9) {
    echo "obesidade grau 1\n";
} else if($imc >= 35 && $imc <= 39.9) {
    echo "obesidade grau 2\n";
} else {
    echo "obesidade grau 3\n";
}

echo "Seu IMC é igual a: $imc";
