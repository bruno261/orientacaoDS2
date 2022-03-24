<?php

require_once 'Operacao.php';

$op1 = new Operacao();

$op1->setValor1(1);
$op1->setValor2(3);

//print_r($op1);

echo $op1->getValor1()."<br/>";
echo $op1->getValor2()."<br/>";

$resultado = $op1->somar(); 
echo $resultado;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form>
        Valor 1:
        <input type="text" name="val1" id="val1"/><br/>
        Valor 2:
        <input type="text" name="val2" id="val2"/><br/>
        Operação:
        <select name="selOperacao" id="selOperacao">
            <option value="0">**SELECIONE**</option>
            <option value="1">Somar</option>
            <option value="2">Multiplicar</option>
            <option value="3">Subtrair</option>
            <option value="4">Dividir</option>
            <option value="5">Exponenciar</option>
        </select>
        <input type="submit" value="Calcular" id="btnCalcular" name="btnCalcular"> 
    </form>
</body>
</html>