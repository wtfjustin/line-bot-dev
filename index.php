<?php

// require 'HTTPClient';
// require 'CurlHTTPClient';
// // $channelSecret = '8e71904dd4fd4a4b5e9bef448a51e6d8'; // Channel secret string
// // $httpRequestBody = 'https://evening-journey-79246.herokuapp.com/callback'; // Request body string
// // $hash = hash_hmac('sha256', $httpRequestBody, $channelSecret, true);
// // $signature = base64_encode($hash);
// // Compare x-line-signature request header string and the signature
// // echo $hash ;
// $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('cylpb2KTGX17tf6hGfMzcSxp/BtdVc9YF+/FrNesoQ/r4cf+Ukond3JE8bSGNS/qn0+FT7jpNDKkeon64frAbm/rQuWppx9D0c1S4CBAn3lTpS5//sykhWPrwWWV9ChBEIocR/3ITj+akvujtNF4IgdB04t89/1O/w1cDnyilFU=');
// $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '8e71904dd4fd4a4b5e9bef448a51e6d8']);
// $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
// $response = $bot->replyMessage('<reply token>', $textMessageBuilder);
// if ($response->isSucceeded()) {
//     echo 'Succeeded!';
//     return;
// }

// // Failed
// echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
// $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('cylpb2KTGX17tf6hGfMzcSxp/BtdVc9YF+/FrNesoQ/r4cf+Ukond3JE8bSGNS/qn0+FT7jpNDKkeon64frAbm/rQuWppx9D0c1S4CBAn3lTpS5//sykhWPrwWWV9ChBEIocR/3ITj+akvujtNF4IgdB04t89/1O/w1cDnyilFU=');
// $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '8e71904dd4fd4a4b5e9bef448a51e6d8']);

// $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
// $response = $bot->pushMessage('<to>', $textMessageBuilder);

// echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
require "vendor/autoload.php";

$access_token = 'cylpb2KTGX17tf6hGfMzcSxp/BtdVc9YF+/FrNesoQ/r4cf+Ukond3JE8bSGNS/qn0+FT7jpNDKkeon64frAbm/rQuWppx9D0c1S4CBAn3lTpS5//sykhWPrwWWV9ChBEIocR/3ITj+akvujtNF4IgdB04t89/1O/w1cDnyilFU=';

$userId = 'U805edb5f9f8a2ddd3fe907d26fce9ab2';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;
$urlbc = 'https://api.line.me/v2/bot/message/broadcast';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '8e71904dd4fd4a4b5e9bef448a51e6d8']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->pushMessage($userId, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

// print_r ($result);




// $channelSecret = '8e71904dd4fd4a4b5e9bef448a51e6d8';

// $pushID = 'U805edb5f9f8a2ddd3fe907d26fce9ab2';

// $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
// $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

// $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
// $response = $bot->pushMessage($pushID, $textMessageBuilder);

// echo $response->getHTTPStatus() . ' ' . $response->getRawBody();


