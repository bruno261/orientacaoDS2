<?php

class Operacao{
    private $valor1;
    private $valor2;

    public function setValor1($valor1){
        $this->valor1 = $valor1;
    }

    public function setValor2($valor2){
        $this->valor2 = $valor2;
    }

    public function getValor1(){
        return $this->valor1;
    }

    public function getValor2(){
        return $this->valor2;
    }

    public function somar(){
        $soma = $this->valor1 + $this->valor2;
        return $soma;
    }

    public function subtrair(){
        $subtrair = $this->valor1 - $this->valor2;
        return $subtrair;
    }

    public function dividir(){
        $dividir = $this->valor1 / $this->valor2;
        return $dividir;
    }

    public function multiplicar(){
        $multiplicar = $this->valor1 * $this->valor2;
        return $multiplicar;
    }

    public function exponenciar(){
        $exponenciar = pow($this->valor1,$this->valor2);
        return $exponenciar;
    }


}


?>