<?php

$parOuImpar = 0;

for ($i=0; $i <= 2000; $i++) { 
   if ($i % 2 == 0) {
    echo "O número $i é par\n";
    $parOuImpar += 1;
   }
}
echo "\n";
echo "Foram ao todo $parOuImpar números pares\n";
