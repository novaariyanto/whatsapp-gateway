<?php 

require_once('../src/whatsapp-gateway/Whatsva.php');

use WhatsappGateway\Whatsva;

$config = [
    "client_key"=>"6dHL72Ty",
    "secret_key"=>"01rA9cifx33XnL7C"
];

$whatsva = new Whatsva($config);

$send = $whatsva->sendMessage("0895361034833","hello admin");
print_r($send);

?>