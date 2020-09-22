<html>
    <head>
        <meta charset="UTF-8">
        <title>Tradução</title>
        <link rel="icon" type="imagem/png" href="https://github.com/caue-alves/PHP-Web-Translator/blob/master/img/famicon.png?raw=true" />
        <link rel="stylesheet" href="/assets/css/text.css">
    </head>
    <body>
        <div class="all">
        <h1>Tradução</h1>
        <main>
<?php

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Statickidz\GoogleTranslate;

require_once "vendor/autoload.php";

$url = $_GET['url'];

$tr = new GoogleTranslate();
$client = new Client(['verify' => false]);

$crawler = new Crawler();

try {
    $corpo = $client->request('GET', $url);
    $html = $corpo->getBody();
    $crawler->addHtmlContent($html);
    $elementos = $crawler->filter("p");
} catch (Exception $e) {
    echo "<span>Falha ao carregar recursos</span>";
    $elementos = [];
}

$array = [] ;
foreach ($elementos as $elemento) {
    $array[] = $elemento->textContent;
}

try {
    foreach ($array as $a) {
        echo "<p>" . $tr->translate('en', 'pt', $a) . "</p><br>";
    }
} catch(Exception $e) {
    echo "<span>Erro ao carregar recursos</span>";
} ?>
    </div>
    </main>
    </body>
</html>