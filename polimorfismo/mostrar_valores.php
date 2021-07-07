<?php
require_once './cheque.php';
require_once './chequeespecial.php';

$chequecomum = new cheque(1500);
$chequeespecial = new chequeespecial(1500);

echo $chequecomum->calcularjuros();
echo $chequeespecial->tipocheque();