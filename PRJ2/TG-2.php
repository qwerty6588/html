<?php

$url = "https://api.telegram.org/bot8196731324:AAEHco32iKegMEGyTKyN8ev0uid-7bNBDXM/";
$method = "sendMessage?";
$chat_id = "chat_id= 1438857980";
$text = "&text=This is dummy text";

$result = $url . $method . $chat_id . $method . $text;

$data=file_get_contents($result);

var_dump($data);
?>
