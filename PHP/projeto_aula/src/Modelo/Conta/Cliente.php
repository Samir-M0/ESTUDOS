<?php

namespace App\Modelo\Conta;

use App\Modelo\Autenticavel;
use App\Modelo\CPF;
use App\Modelo\Endereco;
use App\Modelo\Pessoa;

class Cliente extends Pessoa implements Autenticavel
{

  private Endereco $endereco;

  public function __construct(CPF $cpf, string $nome, Endereco $endereco)
  {
    parent::__construct($nome, $cpf);
    $this->endereco = $endereco;
  }



  public function recuperarEndereco(): Endereco
  {
    return $this->endereco;

  }
  public function podeAutenticar(string $senha):bool
  {
    return $senha === '5432';    
  }
}
