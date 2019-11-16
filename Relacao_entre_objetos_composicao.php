<?php
     // Composição
    //Na composição, uma classe cria a instancia de outra classe dentro de si
   // si própria, snedo assim, quando ela for destruída, a outra classe 
  // também será.

class Pessoa {
    
    public function atribuiNome($nome){
        
        return "O nome da pessoa é ". $nome;
    }
}

class Exibe {
    public $pessoa;
    public $nome;
    
    public function __construct($nome){
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
        
    }
    
    public function exibeNome(){
        echo $this->pessoa->atribuiNome($this->nome);
    }
}

$exibe = new Exibe("José");
$exibe->exibeNome();


?>
