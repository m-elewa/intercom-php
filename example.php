<?php

require './vendor/autoload.php';

use Intercom\IntercomClient;
use GuzzleHttp\Client;

$http = new Client();
$client = new IntercomClient('<insert_token_here>', $http);

$response = $client->contacts->getContacts([]);
print_r($response);
?>
