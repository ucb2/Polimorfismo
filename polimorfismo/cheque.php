<?php

class cheque {
    public $valor;
    
    function __construct($valor) {
        $this->valor = $valor;
    }
    
    function calcularjuros(){
        return $this->valor * 1.20;
    }
    function tipocheque(){
        return "Comum";
    }

}
