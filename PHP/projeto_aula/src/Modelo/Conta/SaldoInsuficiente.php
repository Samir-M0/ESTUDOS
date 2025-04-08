<?php

namespace App\Modelo\Conta;

class SaldoInsuficiente extends \Exception
{
  public function __construct(float $valorSaque, float $valorTotal)
  {
    $mensagem = "Você tentou sacar {$valorSaque}, mas tem apenas {$valorTotal} de saldo";
    parent::__construct($mensagem);
  }
}
