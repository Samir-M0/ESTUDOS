<?php

class Pessoa {

  public $nome;
  public $cpf;

  public function __construct(string $nome, CPF $cpf){
    $this->validaNomeTitular($nome);
    $this->nome = $nome;
    $this->cpf = $cpf;

  }

  public function recuperaNome():string{
    return $this->cpf->recuperarNumero();
  }

  public function recuperaCpf(){
    return $this->cpf;

    
  }
  public function validaNomeTitular(string $nomeTitular)
  {
    if (strlen($nomeTitular) < 5) {
      echo "Nome precisa de pelo menos 5 letras";
      exit();
    }
  }
}