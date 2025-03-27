<?php



class CPF{
  
  private $numero;

  public function __construct(string $numero){

    $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
      'options' => [
        'regexp' => '/^\d{3}\.\d{3}\.\d{3}-\d{2}$/'
      ]
    ]);

    if ($numero === false) {
      echo "CPF invalido!";
      exit();
    }
    $this->numero = $numero;
  
  }

  public function recuperarNumero(): string{
    return $this->numero;


  }

}
