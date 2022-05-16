<?php

namespace Tdd\Chapter03;

class ConversorDeNumeroRomano
{
    protected array $tabela = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000,
    ];

    public function converte(string $numeroEmRomano): int
    {
        $acumulador = 0;
        $ultimoVizinhoDaDireita = 0;
        for($contador = strlen($numeroEmRomano) - 1; $contador >= 0; $contador--) {
            $inteiroAtual = 0;
            $numeroCorrente = $numeroEmRomano[$contador];
            if (array_key_exists($numeroCorrente, $this->tabela)) {
                $inteiroAtual += $this->tabela[$numeroCorrente];
            }
            $multiplicador = 1;
            if ($inteiroAtual < $ultimoVizinhoDaDireita) {
                $multiplicador = -1;
            }
            $acumulador += ($inteiroAtual * $multiplicador);
            $ultimoVizinhoDaDireita = $inteiroAtual;
        }
        return $acumulador;
    }
}