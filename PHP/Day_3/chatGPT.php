<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.openai.com/v1/completions',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "model": "text-davinci-003",
  "prompt": "how to be a good guy",
  "max_tokens": 300,
  "temperature": 0
}
',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer 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',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$jsonObj = json_decode($response, true);
echo $jsonObj["choices"][0]["text"];