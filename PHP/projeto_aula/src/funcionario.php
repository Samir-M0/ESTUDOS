<?php

class Funcionario extends Pessoa{
  private $cargo;

  public function __construct(string $nome, CPF $cpf, string $cargo){
    parent::__construct($nome, $cpf);
    $this->validaNomeTitular($nome);
    $this->cargo = $cargo;
  }

  public function recuperaNomeFuncionario(){

  }
}