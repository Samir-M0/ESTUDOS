<?php

use App\Modelo\Endereco;
use App\Modelo\AceesoPropriedade;


require_once 'autoload.php';

$umEndereco = new Endereco('Petropólis', 'Bairro Qualquer', 'rua qualquer', "71");

// echo $umEndereco->bairro;