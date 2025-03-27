<?php

$multiplicando = $multiplicador = $resultado = 0;

for ($multiplicando=1; $multiplicando <= 10 ; $multiplicando++) { 
  for ($multiplicador=1; $multiplicador <= 10 ; $multiplicador++) { 
    $resultado = $multiplicando * $multiplicador;

    echo $multiplicando.'x'.$multiplicador.'='.$resultado."\n";
  }
  
}

