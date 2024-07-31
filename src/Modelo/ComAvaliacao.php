<?php

namespace ScreenMatch\Modelo;

use ScreenMatch\Exception;

trait comAvaliacao
{

    private array $notas = [];

    /**
     * @throws NotaInvalidaException Se a nota for negativa ou > 10
     */

    public function avalia(float $nota): void
    {

        if($nota < 0 || $nota > 10){
            throw new NotaInvalidaeException('Número tem que ser entre 0 e 10');
        }
        $this->notas[] = $nota;

    }

    public function media(): float
    {

        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;

    }

}
