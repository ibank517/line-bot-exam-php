<?php
$access_token = 'h++wylhGeW4LvuYaLYNfGVJbe4xkCaXp3CR675Py4M97UUAtuWaHNLymT1srif+2tV7YyI2r2zp/CH6Jn/k77qzSzBpBp6N79PBgFqk9dthvcRBJroV8tryK6OtBWRbQ8kHf4Xdo57FqwQstJgCkDgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
