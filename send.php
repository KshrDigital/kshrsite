<?php
$token = "8442875596:AAGGfponmrlAYQqDP64VQa7R_qUCR5TFgM0";
$chat_id = "7551009599";

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$user_message = $_POST['message'] ?? '';

$message = "📩 Yangi kontakt ma'lumoti:\n".
           "👤 Ism: $name\n".
           "📧 Email: $email\n".
           "💬 Xabar: $user_message";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, [
    'chat_id' => $chat_id,
    'text' => $message
]);
$response = curl_exec($ch);
curl_close($ch);

echo "Message sent successfully!";
?>
