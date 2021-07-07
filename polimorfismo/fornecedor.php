<?php


class fornecedor {
    private $id;
    public $nome;
    private $compra;
    public $valor;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCompra() {
        return $this->compra;
    }

    function getValor() {
        return $this->valor;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCompra($compra) {
        $this->compra = $compra;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }


}
$empresa = new fornecedor();
$empresa->setcompra(500);
echo $empresa->getcompra();

