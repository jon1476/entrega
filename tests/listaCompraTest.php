<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\listaCompra;
use PHPUnit\Framework\TestCase;

class listaCompraTest extends TestCase
{
    /**
     * @test
     */
    public function givenProductoSinCantidadInsertsProductoConCantidad1(): void
    {
        $listaCompra = new listaCompra();
        $result = $listaCompra->instruccion("añadir pan");
        $this->assertEquals("pan x1", $result);
    }

    /**
     * @test
     */
    public function givenProductoConCantidadXToListaVaciaInsertsProductoConCantidadX(): void
    {
        $listaCompra = new listaCompra();
        $result = $listaCompra->instruccion("añadir pan 3");
        $this->assertEquals("pan x3", $result);
    }
    /**
     * @test
     */
    public function givenProductoConCantidadXToListaNoVaciaInsertsProductoConCantidadX(): void
    {
        $listaCompra = new listaCompra();
        $listaCompra->instruccion("añadir pan 3");
        $result = $listaCompra->instruccion("añadir leche 3");
        $this->assertEquals("pan x3, leche x3", $result);
    }
    /**
     * @test
     */
    public function givenVaciarReturnsListaVacia(): void
    {
        $listaCompra = new listaCompra();
        $result = $listaCompra->instruccion("vaciar");
        $this->assertEquals("", $result);
    }
}
