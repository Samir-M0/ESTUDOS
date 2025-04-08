<?php

use App\Modelo\CPF;
use App\Modelo\Funcionario\Diretor;
use App\Modelo\Funcionario\Gerente;
use App\Service\Autenticador;

require_once "autoload.php";

$autenticador = new Autenticador();
$diretor = new Gerente('João', new CPF('123.456.283-01'), 1000);

$autenticador->tentaLogin($diretor, '1234');