<?php
$botToken = "YOUR_BOT_TOKEN";
$update = json_decode(file_get_contents("php://input"), true);

if (isset($update["message"]["text"])) {
    $chatId = $update["message"]["chat"]["id"];
    $messageText = $update["message"]["text"];

    file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=Hello+from+Render!");
}
?>
