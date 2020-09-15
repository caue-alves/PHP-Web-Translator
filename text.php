<?php

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Statickidz\GoogleTranslate;
use Tradutor\Buscador\Busca;

require_once "vendor/autoload.php";

$tr = new GoogleTranslate();

$client = new Client(['verify' => false]);

$crawler = new Crawler();

$buscador = new Busca($client, $crawler);
$novoElemento = $buscador->buscar("https://www.alura.com.br/formacao-Python-linguagem", 'p.formacao-passo-nome');

foreach ($novoElemento as $nE) {
    echo $nE . PHP_EOL;
}

echo $tr->translate('en', 'pt', "Hello World");