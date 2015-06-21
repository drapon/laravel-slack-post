<?php
// app/Http/helper.php

function slackIncomingWebhook($url, $payload)
{
    $headers = array();
    $params = array('payload' => json_encode($payload));

    $result = postRequest($url, $params, $headers);
    return $result;
}

function postRequest($url, $params, $headers = array())
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
//    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 環境によってSSLで問題が起きる場合はコメントを解除してください。
    $result = curl_exec($ch);
    $error = curl_error($ch);

    curl_close($ch);

    if ($error) {
        throw new \Exception($error);
    }

    return $result;
}
