<?php
if (! file_exists("chats")) {
    mkdir("chats");
}

$chat_id = uniqid();
$chat = [
    "name" => "New Chat",
    "id" => $chat_id,
    "messages" => [],
];file_put_contents(
    "chats/{$chat_id}.json",
    json_encode($chat, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);

echo '<button>'  . htmlspecialchars($chat['name']) . '</button>';