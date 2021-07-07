<?php
    require_once './funcionario.php';
class estagiario extends funcionario {
    
    function getsalario(){
        return $this->salario * 0.7;  
    }
    
}
$junior = new estagiario();
$junior->setsalario(2000);
echo "O salário é:".$junior->getsalario();
