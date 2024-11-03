<?php

$url = "https://api.telegram.org/bot8106155129:AAHn7pHtL_Qxa9nAcstQOWJwwVwDEbuD5J0";
$method = "sendMessage?";
$chat_id = "chat_id= 1124795999";
$text = "&text= text";

$result = $url . $method . $chat_id . $method . $text;

$data=file_get_contents($result);

var_dump($data);
?>
