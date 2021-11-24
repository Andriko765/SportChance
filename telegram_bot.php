<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "2104471591:AAHmEUbxcpLdN0pQ3yBQGNBkA5IBIT1YAeo";
$chat_id = "517528752";
$arr = array(
  "Ім'я користвача"  => $name,
  'Номер телефону: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


?>