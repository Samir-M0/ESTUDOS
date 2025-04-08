<?php

require_once 'autoload.php';

use App\Modelo\Conta\ContaPoupanca;
use App\Modelo\CPF;
use App\Modelo\Conta\Cliente;
use App\Modelo\Endereco;
use App\Modelo\Conta\SaldoInsuficiente;

$conta = new ContaPoupanca(
  new Cliente(
    new CPF('123.456.789-09'),
    'Samir Mendes Dantas Souza',
    new Endereco('Acreúna', 'bairro teste', 'rua 5', '3-b')));

$conta->depositar(500);
try {
  $conta->sacar(600);
} catch (SaldoInsuficiente $exception) {
  echo "Você não tem saldo".PHP_EOL;
  echo $exception->getMessage(). PHP_EOL;
}

// var_dump($conta);

echo $conta->recuperarSaldo().PHP_EOL;