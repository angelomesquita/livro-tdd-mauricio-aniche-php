<?php

namespace Tdd\Chapter02;

class MaiorEMenor
{
    private Produto $menor;
    private Produto $maior;

    public function encontra(CarrinhoDeCompras $carrinho): void
    {
        foreach ($carrinho->getProdutos() as $produto) {
            if (empty($this->menor) || $produto->getValor() < $this->menor->getValor()) {
                $this->menor = $produto;
            }
            if (empty($this->maior) || $produto->getValor() > $this->maior->getValor()) {
                $this->maior = $produto;
            }
        }
    }

    public function getMenor(): Produto
    {
        return $this->menor;
    }

    public function getMaior(): Produto
    {
        return $this->maior;
    }
}
