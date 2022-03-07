<?php
function verifyEmail($email)
{


    // Complete API Libraries and Wrappers can be found here: 
    // https://www.zerobounce.net/docs/zerobounce-api-wrappers/#api_wrappers__v2__php

    //set the api key and email to be validated
    $api_key = '83b545a5a3dd49aca665c87fdab6ece5';
    $emailToValidate = $email;
    $IPToValidate = '';
    // use curl to make the request
    $url = 'https://api.zerobounce.net/v2/validate?api_key=' . $api_key . '&email=' . urlencode($emailToValidate) . '&ip_address=' . urlencode($IPToValidate);
    // die($url);

    $ch = curl_init($url);

    //PHP 5.5.19 and higher has support for TLS 1.2
    curl_setopt($ch, CURLOPT_SSLVERSION, 6);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 150);
    $response = curl_exec($ch);
    curl_close($ch);

    //decode the json response
    $json = json_decode($response, true);
    // die(var_dump($json));
    return $json;
}
