<?php

use App\Modelo\Conta\Cliente;
use App\Modelo\Conta\ContaCorrente;
use App\Modelo\CPF;
use App\Modelo\Endereco;

require_once 'autoload.php';

$conta = new ContaCorrente(
  new Cliente(
    new CPF('123.456.789-09'),
    'Samir Mendes Dantas Souza',
    new Endereco('Acreúna', 'bairro teste', 'rua 5', '3-b')));


try {
  $conta->depositar(-100);
} catch (InvalidArgumentException $execption) {
  echo "Valor precisaer ser positivo\n";
}