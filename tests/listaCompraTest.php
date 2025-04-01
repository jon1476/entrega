<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\listaCompra;
use PHPUnit\Framework\TestCase;

class listaCompraTest extends TestCase
{
    public function givenInstruccionNoValidaReturnsLista(): void
    {
        $listaCompra = new listaCompra();
        $result = $ohce->devolverStringAlReves("hola");
        $this->assertEquals("aloh", $result);
    }

}
