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

require './vendor/autoload.php';

use Whatsva\WhatsappGateway\Whatsva;

$config = [
    "client_key"=>"62kKHlBf",
    "secret_key"=>"T5NjaerXHuzFjtVj"
];

$receiver = "62895361034833";
$otp_code = "123456";

$whatsapp = new Whatsva($config);

echo $whatsapp->sendMessage($receiver,$otp_code);

```

## Get Config 
client key and secret key are required.
To get it we have to register at https://kejarkoding.com