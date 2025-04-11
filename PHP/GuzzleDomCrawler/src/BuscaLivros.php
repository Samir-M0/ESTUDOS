<?php

namespace App;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class BuscaLivros
{
  private $httpcliente;
  private $url;

  public function __construct(ClientInterface $httpcliente, string $url)
  {
    $this->httpcliente = $httpcliente;
    $this->url = $url;
  }


  public function buscarLivros()
  {
    $response = $this->httpcliente->request('get', $this->url);
    $html = $response->getBody();
    $crawler = new Crawler();
    $crawler->addHtmlContent($html);
    $precos = $crawler->filter('span.product-item__text--darken');
    $titulos = $crawler->filter('h2.product-item__title.product-item__title--mt.product-item__name');
    $precosArrayFinal = [];
    $precosNomeFinal = [];

    foreach ($precos as $precoReal) {
      $precosArrayFinal[] = $precoReal->textContent;
    }
    foreach ($titulos as $titulo) {
      $precosNomeFinal[] = $titulo->textContent;
    }

    for ($i = 0; $i < count($precosNomeFinal); $i++) {
      echo "Livro: {$precosNomeFinal[$i]}"  . "\n";
      echo "Preço: {$precosArrayFinal[$i]}"  . "\n\n";
    }


  }
}
