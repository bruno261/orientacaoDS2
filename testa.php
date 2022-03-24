<?php
    require_once 'Operacao.php';
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
    <form method="post">
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
    <?php

    if(isset($_POST['btnCalcular'])){
        $op1 = new Operacao();
        $op1->setValor1($_POST['val1']);
        $op1->setValor2($_POST['val2']);

        switch ($_POST['selOperacao']) {
            case 1:
                $resultado = $op1->somar();
                break;
            case 2:
                $resultado = $op1->multiplicar();
                break;
            case 3:
                $resultado = $op1->subtrair();
                break;
            case 4:
                $resultado = $op1->dividir();
                break;
            case 5:
                $resultado = $op1->exponenciar();
                break;
            default:
                $resultado = "Escolha uma operação";
                break;
        }

        echo $resultado;

    }
       

    ?>
</body>
</html>