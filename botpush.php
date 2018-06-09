<?php



require "vendor/autoload.php";

$access_token = 'h++wylhGeW4LvuYaLYNfGVJbe4xkCaXp3CR675Py4M97UUAtuWaHNLymT1srif+2tV7YyI2r2zp/CH6Jn/k77qzSzBpBp6N79PBgFqk9dthvcRBJroV8tryK6OtBWRbQ8kHf4Xdo57FqwQstJgCkDgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'bec0fc9648440b4b4d7b149a91e1d4aa';

$pushID = 'U4297e89b264f7e08e4ad9e08aad8f2e2';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







