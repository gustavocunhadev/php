<?php

require 'autoload.php';

use ScreenMatch\Modelo\{
    Filme,
    Genero,
    Serie,
    Episodio,
};

use ScreenMatch\Calculos\{
    CalculadoraDeMaratona,
    ConversorNotaEstrela
};



echo "Bem vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    Genero::SuperHeroi,
    180
);


$filme->avalia(10);
$filme->avalia(5.6);
$filme->avalia(8);
$filme->avalia(4);
$filme->avalia(5.9);

var_dump($filme);

echo $filme->media() . "\n";

$serie = new Serie(
    'Lost',
    2007,
    Genero::Drama,
    10,
    20,
    30
);

$episodio = new Episodio($serie, 'O bunker', 12);


echo $serie->anoLancamento . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona você precisa de $duracao minutos \n";

$serie->avalia(9);

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($serie);


