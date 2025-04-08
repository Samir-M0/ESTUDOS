<?php 

namespace App\Modelo;

trait AcessoPropriedade{
  public function __get($nomeAtributo)
  {
    return $this->$nomeAtributo;
  }
}