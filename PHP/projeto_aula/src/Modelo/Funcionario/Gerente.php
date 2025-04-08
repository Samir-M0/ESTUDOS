<?php

namespace App\Modelo\Funcionario;

use App\Modelo\Autenticavel;
use App\Modelo\Funcionario\Funcionario;

class Gerente extends Funcionario implements Autenticavel{
  public function calculaBonificacao():float
  {
    return $this->recuperaSalario();
  }
  public function podeAutenticar(string $senha): bool
  {
    return $senha === "4321";
  }
}