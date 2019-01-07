<?php

$recepient = "kondratyevivan@yandex.ru";
$siteName = "geostamp-kzn.ru";
$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$name1 = trim($_POST["name1"]);
$phone1 = trim($_POST["phone1"]);
$message = "Имя: $name $name1 \nТелефон: $phone $phone1";
$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>