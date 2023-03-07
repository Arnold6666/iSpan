<?php
$api_key = getenv("OPENAI_API_KEY");
$data = '{
  "model": "gpt-3.5-turbo",
  "messages": [
  {"role": "user", "content": "為什麼會有地震？"}
]
}';
$opts = array(
  'http' =>
  array(
    'method' => 'POST',
    'header' => "Content-Type:application/json\r\nAuthorization:Bearer {$api_key}\r\n",
    'content' => $data
  )
);
$context = stream_context_create($opts);
$result = file_get_contents('https://api.openai.com/v1/chat/completions', false, $context);
echo json_decode($result, true)['choices'][0]['message']['content'] . "\n";
