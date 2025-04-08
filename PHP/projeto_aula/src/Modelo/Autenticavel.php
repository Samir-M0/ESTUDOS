<?php
namespace App\Modelo;
interface Autenticavel{
  public function podeAutenticar(string $senha):bool;

}