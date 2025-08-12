<?php
$token = "8442875596:AAGGfponmrlAYQqDP64VQa7R_qUCR5TFgM0";
$chat_id = "7551009599"; // chat_id ni /getUpdates orqali topasiz

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';

$message = "📩 Yangi kontakt ma'lumoti:\n👤 Ism: $name\n📧 Email: $email";

file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message));

echo "Message sent successfully!";
?>
