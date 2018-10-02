<?php
$name = $_post["name"];
$password = $_post["passwrd"];
$tel = $_post["phone"];
$textarea = $_post["textarea"];

$from = "info@gmail.com"; /* не розумію */
$to = "info@gmail.com";
$sub = "Форма обратной связи" /* текст який буде висвітлюватись в повідомленні */
$message = "Имя:$name\n Пароль:$passwrd\nТелефон:$tel\n Текст:$textarea"; /* (\n) перенос строки */
mail(to, subject, message,"Content-type:text/plain;charset = UTF-8\r\nFrom:$from");  /* не розумію */
?>
