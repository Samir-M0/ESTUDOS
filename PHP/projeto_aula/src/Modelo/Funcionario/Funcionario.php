<?php

namespace App\Modelo\Funcionario;

use App\Modelo\CPF;
use App\Modelo\Pessoa;

abstract class Funcionario extends Pessoa {
  private $salario;

  public function __construct(string $nome, CPF $cpf, float $salario){
    parent::__construct($nome, $cpf);
    $this->salario = $salario;
  }
  public function recuperaSalario(): float{
    return $this->salario;

  }
  public function alteraNome(string $nome):void{
   $this->validaNomeTitular($nome);
   $this->nome = $nome;

  }
  public function recebeAumento(float $valorAumento):void
  {
    if ($valorAumento < 0) {
      echo "Valor negado";
      return;
    }
    $this->salario += $valorAumento;
    
  }
  abstract public function calculaBonificacao():float;

}