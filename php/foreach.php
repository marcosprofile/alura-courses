<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Marcos',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Thiago',
        'saldo' => 2000
    ],
    12345678912 => [
        'titular' => 'Leonardo',
        'saldo' => 800
    ]
];

$contasCorrentes[] = [
    'titular' => 'Antonio',
    'saldo' => 1000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
