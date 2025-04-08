<?php

namespace App\Service;
use App\Modelo\Autenticavel;
use App\Modelo\Funcionario\Diretor;

class Autenticador {
  public function tentaLogin(Autenticavel $autenticavel, string $senha)
  {
    if ($autenticavel->podeAutenticar($senha)) {
      echo "Usuário logado no sistema";
    }else{
      echo "Senha inválida!";
    }
  }
}