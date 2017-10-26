<?php
$access_token = 'egQa5x0UdLUqsow7a/d53vRdVsB0q48+tYde+a46llCx6qY4dm2LMs3AfY5zIOXiqJaFpezfa79yM2DqWOQ86D1sUoDBLMjsqDPsbXHiumQYAYiM6lVlM/oiUNaYHuSZWUdPH0iqywbYQOncNkHG+gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;