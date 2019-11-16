<?php
     //Clone
    //construct
   //invoke
  //tostring
 //get
//set

/**
 * 
 */
class Pessoa
{
    private $dados = array();
 
    public function __set($nome, $valor) {
        $this->dados[$nome] = $valor;
    } 
    
    public function __get($nome) {
        return $this->dados[$nome];
    }
    
    public function __tostring(){
        return "Tentei impirmir o objeto";
    }
    
    public function __invoke(){
        return "Objeto como function";
    }

}

$pessoa = new Pessoa();

$pessoa->nome = "Cassio";
$pessoa->idade = 50;
$pessoa->sexo = "M";

echo $pessoa;


    
    

?>

