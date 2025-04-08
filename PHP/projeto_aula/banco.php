<?php
require_once 'autoload.php';

use App\Modelo\Conta\Cliente;
use App\Modelo\Conta\ContaCorrente;
use App\Modelo\CPF;
use App\Modelo\Endereco;
use App\Modelo\Funcionario;

$endereco = new Endereco(cidade: 'Petrópolis', bairro: "Um bairro", rua: 'Minha rua', numero: '71B');
$samir = new ContaCorrente(
  new Cliente(new CPF('123.123.123-92'), 'Samir Mendes', $endereco)
  );
// try {
//   $primeiraconta = new Conta($samir);
// } catch (\Error $e) {
//   echo "Erro ". $e->getmessage()."\n";
// }

// $umfuncionario = new Funcionario('Vinicius', new CPF('123.456.789-01'), 'Dev');
// $samir->depositar(500);

// var_dump($samir);
// phpinfo();

// var_dump($umfuncionario);

// $primeiraConta->cpfTitular = '033.772.382-01';
// $primeiraConta->nomeTitular = 'Samir Mendes';
// $primeiraConta->depositar(500);
// $primeiraConta->definirCpfTitular('123.456.789-12');
// $primeiraConta->definirNomeTitular("Samir");
// var_dump($primeiraConta);


// echo $primeiraConta->recuperarSaldo()."\n";
// echo $primeiraConta->recuperarNumeroDeContas()."\n";
// echo $primeiraConta->recuperaNomeTitular()."\n";


