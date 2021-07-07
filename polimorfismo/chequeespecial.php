<?php
require_once './cheque.php';


class chequeespecial extends cheque{
    function calcularjuros(){
        return $this->valor * 1.10;
    }
    function tipocheque(){
        return "Especial";
    }
}
