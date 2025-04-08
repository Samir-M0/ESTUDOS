<?php
namespace App\Modelo\Funcionario;

use App\Modelo\Funcionario\Funcionario;

class EditorDeVideo extends Funcionario{

  public function calculaBonificacao(): float
  {
    return 500;
  }

}