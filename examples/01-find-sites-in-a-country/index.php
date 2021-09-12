<?php

require_once dirname(dirname(__FILE__)) . '/autoload.php';

// Instantiate Configuration
$config = new Speedy\Config($_ENV['SPEEDY_API_USERNAME'], $_ENV['SPEEDY_API_PASSWORD']);

// Instantiate Client
$client = new Speedy\Client($config);

// Search sites by name
$response = (new Speedy\Nomenclatures\Site_Nomenclature($client))->searchByName('Dobr');

print_r( json_decode( $response->getBody()->getContents() ) );
exit;
