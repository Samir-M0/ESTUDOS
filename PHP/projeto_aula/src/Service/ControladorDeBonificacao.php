<?php

namespace App\Service;

use App\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacao

{
  private $totalBonificacao;

  public function adicionalBonificacao(Funcionario $funcionario)
  {
    return $this->totalBonificacao+=$funcionario->calculaBonificacao();
  }

  public function recuperaTotal():float
  {
    return $this->totalBonificacao;
  }
}
