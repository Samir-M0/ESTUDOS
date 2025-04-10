<?php
require_once "vendor/autoload.php";

use App\BuscaLivros;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.estantevirtual.com.br/l']);
$crawler = new Crawler();
$url = "/lst/literatura-russa";
$buscar = new BuscaLivros($client, $url);

$precosReal = $buscar->buscarPrecos();
$titulosDosLivros = $buscar->buscarNomes();


for ($i = 0; $i < count($titulosDosLivros); $i++) {
  echo "Livro: " . $titulosDosLivros[$i] . "\n";
  echo "Preço: " . $precosReal[$i] . "\n\n";
}