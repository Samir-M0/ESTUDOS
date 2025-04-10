<?php
require_once "./vendor/autoload.php";
Teste::metodo();
exit();

use App\Model\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/formacao-linguagem-php');


foreach ($cursos as $curso){
  echo $curso."\n";
}