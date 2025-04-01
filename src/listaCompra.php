<?php

namespace Deg540\DockerPHPBoilerplate;

use function PHPUnit\Framework\isEmpty;

class listaCompra {
    public string $listaProductos = "";
    public function instruccion(string $instruccion): string {
        $parametrosInstruccion = explode(" ", $instruccion);
        $numArgumentos = count($parametrosInstruccion);
        if($parametrosInstruccion[0] === "añadir") {
            if($numArgumentos < 3){
                $this->listaProductos = $this->listaProductos . $parametrosInstruccion[1] . " x1";
            }
            if($numArgumentos === 3){
                if(isEmpty($this->listaProductos)){
                    $this->listaProductos = $this->listaProductos . $parametrosInstruccion[1] . " x" . $parametrosInstruccion[2];
                }
                else{
                    $this->listaProductos = $this->listaProductos . ", " . $parametrosInstruccion[1] . " x" . $parametrosInstruccion[2];
                }
            }
        }
        if($parametrosInstruccion[0] === "vaciar") {
            $this->listaProductos = "";
        }
        return $this->listaProductos;
    }

}
