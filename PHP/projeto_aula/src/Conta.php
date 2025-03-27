<?php

class Conta
{
  //Definir dados da conta
  private Cliente $titular;
  private float $saldo;
  private static $numeroDaConta = 0;

  public function __construct(CPF $cpf, Cliente $titular)
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

  public function recuperarCpf(): string
  {
    return $this->cpf->recuperarNumero();
  }

  public function sacar(float $valorASacar)
  {
    if ($valorASacar > $this->saldo) {
      echo "Valor indisponível";

      return;
    }
    $this->saldo -= $valorASacar;
  }

  private function depositar(float $valorADepositar): void
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

  public function recuperaNomeTitular(): string
  {
    return $this->titular->recuperarNome();
  }

  public function recuperaCpfTitular(): string
  {
    return $this->cpf->recuperarCpf();
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

