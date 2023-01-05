<?php

// Arrays associativos

$conta1 = [
    'titular' => 'Marcos',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Thiago',
    'saldo' => 2000
];

$conta3 = [
    'titular' => 'Leonardo',
    'saldo' => 800
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
