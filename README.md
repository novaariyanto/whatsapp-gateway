# whatsapp-gateway
Send whatsapp message with free number to send notifikasi OTP

## Installation
This project using composer.
```
$ composer require whatsva/whatsapp-gateway
```

## Usage
Send Message Text .
```php
<?php

use Whatsva\WhatsappGateway\Whatsva;

$config = [
    "client_key"=>"6dHL72Ty",
    "secret_key"=>"01rA9cifx33XnL7C"
];

## Get config client key and secret key in https://kejarkoding.com

$receiver = "62895361034833";
$message = "Hallo, Good morning sir !";

$whatsapp = new Whatsva($config);

echo $whatsapp->sendMessage($receiver,$message);

```