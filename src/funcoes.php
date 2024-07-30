<?php


function criaFilme(string $nome, int $anoLancamento, string $genero, float $nota): Filme{

    $filme = new Filme();
    $filme->nome = $nome;
    $filme->anoLancamento = $anoLancamento;
    $filme->genero = $genero;
    $filme->nota = $nota;

    return $filme;

}