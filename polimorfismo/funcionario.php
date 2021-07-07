<?php


class funcionario {
    private $id;
    private $nome;
    private $nascimento;
    protected $salario;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getNascimento() {
        return $this->nascimento;
    }

    function getSalario() {
        return $this->salario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }

}
