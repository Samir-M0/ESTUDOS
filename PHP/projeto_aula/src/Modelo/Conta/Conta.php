<?php

namespace App\Modelo\Conta;

class Conta
{
  //Definir dados da conta
  private  $titular;
  private float $saldo;
  private static $numeroDaConta = 0;

  public function __construct(Cliente $titular)
  {
    echo "Criando nova conta" . PHP_EOL;
    $this->titular = $titular;
    $this->saldo = 0;
    self::$numeroDaConta++;
  }

  public function __destruct()
  {
    self::$numeroDaConta--;
  }

  public function sacar(float $valorASacar)
  {
    $tarifa = $valorASacar * 0.005;
    $valorASacar = $valorASacar + $tarifa;
    if ($valorASacar > $this->saldo) {
      echo "Valor indisponível";

      return;
    }
    $this->saldo -= $valorASacar + $tarifa;
  }

  public function depositar(float $valorADepositar): void
  {
    if ($valorADepositar < 0) {
      echo "Valor precisa ser positivo";

      return;
    }
    $this->saldo += $valorADepositar;
  }

  public function transferir(float $valorAtransferir, Conta $contaDestino): void
  {
    if ($valorAtransferir > $this->saldo) {
      echo "valor indiposnivel";
      return;
      # code...
    }
    $this->sacar($valorAtransferir);
    $contaDestino->depositar($valorAtransferir);
  }

  public function recuperarSaldo(): float
  {
    return $this->saldo;
  }

  public static function recuperarNumeroDeContas(): int
  {
    return self::$numeroDaConta;
  }

}

// $contaUm = new Conta();
// $contaDois = new Conta();
// $contaUm->depositar(500);

// $contaUm->transferir(300, $contaDois);

// echo $contaDois -> saldo."\n";


// php > $primeiraConta = new Conta();
// php > $primeiraConta -> saldo = 400;
// php > var_dump($primeiraConta);

