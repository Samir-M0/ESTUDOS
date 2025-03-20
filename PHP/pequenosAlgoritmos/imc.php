<?php

$peso = 72.7;
$altura = 1.93;
$imc = $peso/($altura**2);


echo ($imc <= 18.5) ? "Abaixo do peso\n" : "";
echo ($imc >= 18.5 && $imc <= 24.9) ? "Peso normal\n" : "";
echo ($imc >= 25 && $imc <= 29.9) ? "Excesso de peso\n" : "";
echo ($imc >= 30 && $imc < 35) ? "Obesidade\n" : "";
echo ($imc >= 35) ? "Obesidade extrema\n" : "";
