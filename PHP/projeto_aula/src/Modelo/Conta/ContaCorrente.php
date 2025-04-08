<?php
namespace App\Modelo\Conta;

class ContaCorrente extends Conta{
  protected function percentualTarifa(): float
  {
    return 0.05;
  }
  public function transferir(float $valorAtransferir, Conta $contaDestino): void
  {
    if ($valorAtransferir > $this->saldo) {
      echo "valor indiposnivel";
      return;
    }
    $this->sacar($valorAtransferir);
    $contaDestino->depositar($valorAtransferir);
  }
}