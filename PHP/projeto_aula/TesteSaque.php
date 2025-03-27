<?php

require_once 'autoload.php';

use App\Modelo\Conta\Conta;
use App\Modelo\CPF;
use App\Modelo\Conta\Cliente;
use App\Modelo\Endereco;

$conta = new Conta(
  new Cliente(
    new CPF('123.456.789-09'),
    'Samir Mendes Dantas Souza',
    new Endereco('Acreúna', 'bairro teste', 'rua 5', '3-b')));

$conta->depositar(500);
$conta->sacar(200);

// var_dump($conta);

echo $conta->recuperarSaldo();