<?php


use WhatsappGateway\Whatsva;


$config = [
    "client_key"=>"62kKHlBf",
    "secret_key"=>"T5NjaerXHuzFjtVj"
];

$whatsva = new Whatsva($config);

$receiver = "62895361034833";
$otp_code = "123456";

$send = $whatsva->sendMessage($receiver,$otp_code);

print_r($send);

?>