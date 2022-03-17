<?php

require_once 'Operacao.php';

$op1 = new Operacao();

$op1->setValor1(1);
$op1->setValor2(3);

echo $op1->getValor1()."<br/>";
echo $op1->getValor2()."<br/>";

echo $op1->somar(); 


?>