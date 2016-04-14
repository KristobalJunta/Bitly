<?php

require_once "../vendor/autoload.php";

use KristobalJunta\Bitly;

$accessToken = 'your-access-token';

$bitly = new Bitly([
    'access_token' => $accessToken,
    'response_type' => 'txt'
]);

echo $bitly->shorten('http://google.com') . "\n";
