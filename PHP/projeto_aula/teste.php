<?php
require_once 'autoload.php';
use App\Modelo\CPF;
use App\Modelo\Endereco;
use App\Modelo\Funcionario\Desenvolvedor;
$endereco = new Endereco(cidade: 'Petrópolis', bairro: "Um bairro", rua: 'Minha rua', numero: '71B');

$samir = new Desenvolvedor("Samir", new CPF('123.343.137-92'), 1000);
echo $samir->nome.PHP_EOL;