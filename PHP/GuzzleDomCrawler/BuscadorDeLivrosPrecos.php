<?php
require_once "vendor/autoload.php";

use App\BuscaLivros;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

function buscar(){
  $client = new Client(['base_uri' => 'https://www.estantevirtual.com.br/l']);
  $crawler = new Crawler();
  $url = "/lst/literatura-russa";
  $buscar = new BuscaLivros($client, $url);
  
  $buscar->buscarLivros();
  
  


}

buscar();
