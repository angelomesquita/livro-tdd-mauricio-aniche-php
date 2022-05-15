<?php

namespace Tdd\Chapter02;

use ArrayObject;

class CarrinhoDeCompras
{
    private ArrayObject $produtos;

    public function __construct()
    {
        $this->produtos = new ArrayObject();
    }

    public function adiciona(Produto $produto): CarrinhoDeCompras
    {
        $this->produtos->append($produto);
        return $this;
    }

    public function getProdutos(): ArrayObject
    {
        return $this->produtos;
    }

    public function maiorValor(): float
    {
        if (count($this->produtos) === 0) {
            return 0;
        }
        $maiorValor = $this->getProdutos()[0]->getValor();
        foreach ($this->getProdutos() as $produto) {
            if ($maiorValor < $produto->getValor()) {
                $maiorValor = $produto->getValor();
            }
        }
        return $maiorValor;
    }
}