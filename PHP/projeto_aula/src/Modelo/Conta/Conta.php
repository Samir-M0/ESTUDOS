<?php

namespace App\Modelo\Conta;

use App\Modelo\Conta\SaldoInsuficiente;
use InvalidArgumentException;

// require_once "../../../autoload.php";

abstract class Conta
{
  //Definir dados da conta
  private Cliente $titular;
  protected float $saldo;
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

    $tarifa = $valorASacar * $this->percentualTarifa();
    $valorASacar = $valorASacar + $tarifa;
    if ($valorASacar > $this->saldo) {
      echo "Valor indisponível";
      throw new SaldoInsuficiente($valorASacar, $this->saldo);
      
    }
    $this->saldo -= $valorASacar + $tarifa;
  }

  public function depositar(float $valorADepositar): void
  {
    if ($valorADepositar < 0) {
      throw new InvalidArgumentException();
      
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

  abstract protected function percentualTarifa():float;
}

// $contaUm = new Conta();
// $contaDois = new Conta();
// $contaUm->depositar(500);

// $contaUm->transferir(300, $contaDois);

// echo $contaDois -> saldo."\n";


// php > $primeiraConta = new Conta();
// php > $primeiraConta -> saldo = 400;
// php > var_dump($primeiraConta);
