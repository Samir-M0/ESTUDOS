<?php

namespace App;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class BuscaLivros
{
  private $crawler;
  private $httpcliente;
  private $url;

  public function __construct(ClientInterface $httpcliente, string $url)
  {
    $this->httpcliente = $httpcliente;
    $this->url = $url;
  }

  public function buscarNomes(): array
  {
    $response = $this->httpcliente->request('get', $this->url);
    $html = $response->getBody();
    $crawler = new Crawler();
    $crawler->addContent($html);
    $elementos = $crawler->filter('h2.product-item__title.product-item__title--mt.product-item__name');

    $nomes = [];

    foreach ($elementos as $nome) {
      $nomes[] = $nome->textContent;
    }

    return $nomes;
  }

  public function buscarPrecos(): array
  {
    $response = $this->httpcliente->request('get', $this->url);
    $html = $response->getBody();
    $crawler = new Crawler();
    $crawler->addHtmlContent($html);
    $elementos = $crawler->filter('span.product-item__text--darken');
    $precos = [];

    foreach ($elementos as $precoReal) {
      $precos[] = $precoReal->textContent;
    }

    return $precos;
  }
}
