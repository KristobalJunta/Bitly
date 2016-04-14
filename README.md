bitly-shortening-class
=================

Bitly shortening class

Simple class for shortening links using bit.ly; provides only link shortening

## Usage

Create a `Bitly` class object and pass an access token to it (you can use generic oauth token for that) like so:

```php
use KristobalJunta\Bitly;

$accessToken = 'your-access-token';

$bitly = new Bitly([
    'access_token' => $accessToken
]);
```

You can also choose response format (either text, json or xml). Default is json:

```php
$bitly = new Bitly([
    'access_token' => $accessToken,
    'response_type' => 'text'
]);
```

Finally, use the `shorten` method:

```php
$shortenedUrl = $bitly->shorten('http://example.com');
```
