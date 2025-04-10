<?php

namespace App\Model;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Buscador
{
  private $httpClient;
  private $crawler;
  public function __construct(ClientInterface $httpClient, Crawler $crawler)
  {
    $this->httpClient = $httpClient;
    $this->crawler = $crawler;
  }

  public function buscar(string $url): array
  {
    $resposta = $this->httpClient->request('GET', $url);
    $html = $resposta->getBody();
    $crawler = new Crawler();
    $this->crawler->addHtmlContent($html);
    $elementos = $this->crawler->filter("span.formacao-passo-numero-titulo");
    $passos = [];

    foreach ($elementos as $elemento) {
      $passos[] = $elemento->textContent;
    }

    return $passos;
  }
}
