<?php

namespace App\Modelo;

class Pessoa {

  protected $nome;
  private $cpf;

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
  protected function validaNomeTitular(string $nomeTitular)
  {
    if (strlen($nomeTitular) < 5) {
      echo "Nome precisa de pelo menos 5 letras";
      exit();
    }
  }
}