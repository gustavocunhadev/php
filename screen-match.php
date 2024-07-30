<?php


$conteudoArquivo = [
    "nome" => "Gustavo Cavalcante",
    "Idade" => 21,
    "CPF" => "483.463.364-01",
];

$conteudoJSON = json_encode($conteudoArquivo);

file_put_contents(__DIR__ . '/Dados.json', $conteudoJSON);

