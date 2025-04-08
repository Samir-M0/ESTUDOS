<?php

namespace App\Modelo;
// require_once 'AceesoPropriedade.php';


final class Endereco
{
  use AcessoPropriedade;

  private string $cidade;
  private string $bairro;
  private string $rua;
  private string $numero;

  public function __construct(string $cidade, string $bairro, string $rua, string $numero)
  {
    $this->cidade = $cidade;
    $this->bairro = $bairro;
    $this->rua = $rua;
    $this->numero = $numero;
  }


  public function __tostring():string
  {
    return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}" ;
  }

}