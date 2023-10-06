<?php 
namespace WhatsappGateway;
class Whatsva {

   private $config = [];

    function __construct($config) {
        $this->client_key = $config['client_key'];
        $this->secret_key = $config['secret_key'];
    }

    function sendMessage($jid,$message)  {
        $curl = curl_init();
        $data = [
            "jid"=> "62895361034833",
            "message"=> "test Message"
        ];
        $payloads = json_encode($data);

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://kejarkoding.com/api/sendMessageText',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>$payloads,
        CURLOPT_HTTPHEADER => array(
            'Client-Key: '.$this->client_key,
            'Secret-Key: '.$this->secret_key
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }
}