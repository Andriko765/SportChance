<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "2124388790:AAGa4jL0a9muw5RlTw9cyhha41LM45bxVEs";
$chat_id = "-662282094";
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