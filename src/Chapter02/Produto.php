<?php

namespace Tdd\Chapter02;

class Produto
{
    private string $nome;
    private string $valor;

    public function __construct(string $nome, float $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getValor(): float
    {
        return $this->valor;
    }
}

