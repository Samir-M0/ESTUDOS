<?php
require_once 'autoload.php';


use App\Modelo\CPF;
use App\Modelo\Funcionario\Desenvolvedor;
use App\Modelo\Funcionario\EditorDeVideo;
use App\Modelo\Funcionario\Gerente;
use App\Service\ControladorDeBonificacao;

$umfuncionario = new Desenvolvedor('Samir Mendes', new CPF("123.456.789-10"), 1000);
$umafuncionaria = new Gerente('Mirele', new CPF("123.456.789-11"), 3000);
$umEditor = new EditorDeVideo("Mihay", new CPF('736.283.284-01'), 3500);
$umfuncionario->sobeDeNivel();
$controlador = new ControladorDeBonificacao();
$controlador->adicionalBonificacao($umfuncionario);
$controlador->adicionalBonificacao($umafuncionaria);
$controlador->adicionalBonificacao($umEditor);

echo $controlador->recuperaTotal() . PHP_EOL;
