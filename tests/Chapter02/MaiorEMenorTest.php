<?php

namespace Chapter02;

use PHPUnit\Framework\TestCase;
use Tdd\Chapter02\{CarrinhoDeCompras, MaiorEMenor, Produto};

class MaiorEMenorTest extends TestCase
{
    public function testOrdemDecrescente(): void
    {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(new Produto('Geladeira', 450.00));
        $carrinho->adiciona(new Produto('Liquidificador', 250.00));
        $carrinho->adiciona(new Produto('Jogo de Pratos', 70.00));

        $maiorMenor = new MaiorEMenor();
        $maiorMenor->encontra($carrinho);

        $this->assertEquals('Jogo de Pratos', $maiorMenor->getMenor()->getNome());
        $this->assertEquals('Geladeira', $maiorMenor->getMaior()->getNome());
    }

    public function testApenasUmProduto(): void
    {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(new Produto('Geladeira', 450.00));

        $maiorMenor = new MaiorEMenor();
        $maiorMenor->encontra($carrinho);

        $this->assertEquals('Geladeira', $maiorMenor->getMenor()->getNome());
        $this->assertEquals('Geladeira', $maiorMenor->getMaior()->getNome());
        $this->assertInstanceOf(Produto::class, $maiorMenor->getMenor());
        $this->assertInstanceOf(Produto::class, $maiorMenor->getMaior());
        $this->assertIsObject($maiorMenor->getMenor());
    }
}