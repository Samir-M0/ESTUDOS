<?php
namespace tests;
use PHPUnit\Framework\TestCase;

class BuscaLivrosTest extends TestCase
{
  public function testSeAsDuasStringsSaoIguais()
  {
    $string1 = "Primeira";
    $string2 = "Segunda";

    $this->assertEquals($string1,  $string2);
  }
}
