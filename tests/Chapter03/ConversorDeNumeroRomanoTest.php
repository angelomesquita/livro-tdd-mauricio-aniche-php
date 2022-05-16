<?php

namespace Tdd\Tests\Chapter03;

use PHPUnit\Framework\TestCase;
use Tdd\Chapter03\ConversorDeNumeroRomano;

class ConversorDeNumeroRomanoTest extends TestCase
{
    public function testDeveEntenderOSimboloI(): void
    {
        $romano = new ConversorDeNumeroRomano();

        $numero = $romano->converte("I");

        $this->assertEquals(1, $numero);
    }

    public function testDeveEntenderOSimboloV(): void
    {
        $romano = new ConversorDeNumeroRomano();

        $numero = $romano->converte("V");

        $this->assertEquals(5, $numero);
    }

    public function testDeveEntenderOSimboloII(): void
    {
        $romano = new ConversorDeNumeroRomano();

        $numero = $romano->converte("II");

        $this->assertEquals(2, $numero);
    }

    public function testDeveEntenderOSimboloXXII(): void
    {
        $romano = new ConversorDeNumeroRomano();

        $numero = $romano->converte("XXII");

        $this->assertEquals(22, $numero);
    }

    public function testDeveEntenderOSimboloIX(): void
    {
        $romano = new ConversorDeNumeroRomano();

        $numero = $romano->converte("IX");

        $this->assertEquals(9, $numero);
    }

    public function testDeveEntenderOSimboloXXIV(): void
    {
        $romano = new ConversorDeNumeroRomano();

        $numero = $romano->converte("XXIV");

        $this->assertEquals(24, $numero);
    }

}