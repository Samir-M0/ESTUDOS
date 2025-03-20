<?php

function exibirMensagem($mensagem){
  echo "$mensagem". '<br>';
};

function depositar(array &$conta, float $valorDeDeposito){
 if ($valorDeDeposito > 0) {
   $conta['saldo'] += $valorDeDeposito;
 
 } else {
   echo "Erro!\n";
 };
};

function sacar(array &$conta, float $valorDeSaque){
 if ($valorDeSaque > $conta['saldo']) {
   echo "Erro!\n";
 }else{
   $conta['saldo'] -= $valorDeSaque;
 }
};

function titularComLetrasMaiusculas(array &$conta){
  $conta['titular'] = mb_strtoupper($conta['titular']);

};

function exibeConta(array $conta){
  ['titular' => $titular, 'saldo' => $saldo] = $conta;

  echo  "<li>Títular: $titular . Saldo:$saldo</li>";

}