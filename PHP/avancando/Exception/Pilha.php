<?php

function funcao1()
{
  echo "Entrando na função 1\n";
  try {
    funcao2();
  } catch (Throwable $problema) {
    // echo "na função 2 eu resolvi o problema\n";
    echo $problema->getMessage().PHP_EOL;
    echo $problema->getLine().PHP_EOL;
    echo $problema->getFile().PHP_EOL;
    echo $problema->getTraceAsString().PHP_EOL;
    throw new RuntimeException("Error Processing Request", 1);
    
  }
  // catch(Error $erro){
  //   echo $erro->getMessage().PHP_EOL;

  // }
  echo "Saindo da função 1\n";
}
function funcao2()
{
  echo "entrei na função 2\n";
  // try {
    // $arrayFixo = new SplFixedArray(2);
    // $arrayFixo[3] = "Valor";
  // } catch (\RuntimeException $problema) {
  //   echo "Erro na execucão\n";
  // }
  $exception = new RuntimeException();
  throw new Exception($exception, 0);
  
  echo "Saindo da funcao 2" . PHP_EOL;
}
funcao1();