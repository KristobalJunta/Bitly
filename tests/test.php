<?php

require_once "../vendor/autoload.php";

use KristobalJunta\Bitly;

$accessToken = '557ceedeb99e47a85f79bb963b34db468a7c2818';

$bitly = new Bitly([
    'access_token' => $accessToken,
    'response_type' => 'txt'
]);

echo $bitly->shorten('http://google.com') . "\n";
