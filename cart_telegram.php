<?php
require_once ("cart.php");

$phone = $_POST['user_phone'];
$name = $_POST['user_name'];
$address =$_POST['user_address'] ;

$token = "2124388790:AAGa4jL0a9muw5RlTw9cyhha41LM45bxVEs";
$chat_id = "-662282094";
$arr = array(
  "Замовлення",
  "Назва товару"  => $product = implode(",",$product_array),
  'Номер телефону: ' => $phone,
  "Ім'я покупця" => $name,
  "Андреса" => $address,
  "Сума" => $total 
);

echo $arr;
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


?>