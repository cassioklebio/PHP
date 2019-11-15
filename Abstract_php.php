<?php

abstract class Banco {
    
    protected $saldo;
    protected $limiteSaque;
    protected $juros;
    
    
    public function setSaldo($s){
        $this->saldo = $s;
    }
    
    
    public function getSaldo(){
        return $this->saldo;
    }
    
    abstract function sacar($s);
    
    abstract function depositar($s);
    
}

class Itau extends Banco
{
    public function sacar($s)
    {
        $this->saldo -= $s;
        echo "<hr> Sacou".$s;
    }
    
    public function Depositar($d)
    {
        $this->saldo += $d;
       
    }
    
}

$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->sacar(250);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->depositar(900);
echo "<hr> Saldo: ".$itau->getSaldo();
