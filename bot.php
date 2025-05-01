<?php

$update = json_decode(file_get_contents('php://input'), true);

$chat_id = $update["message"]["chat"]["id"];
$text = $update["message"]["text"];
$token = getenv("BOT_TOKEN"); // متغير من البيئة
$api = "https://api.telegram.org/bot$token/";

file_get_contents($api . "sendMessage?chat_id=$chat_id&text=You said: $text");
