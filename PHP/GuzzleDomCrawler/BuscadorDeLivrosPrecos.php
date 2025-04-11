<?php
require_once "vendor/autoload.php";

use App\BuscaLivros;
use GuzzleHttp\Client;

function buscar(){
  $client = new Client(['base_uri' => 'https://www.estantevirtual.com.br/l']);
  $url = "/lst/literatura-russa";
  $buscar = new BuscaLivros($client, $url);
  
  $buscar->buscarLivros();
  
  


}

buscar();
