<?php
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$message = $_POST["message"];
$body = "Name: {$name}\nPhone: {$phone}\nEmail: {$email}\n{$message}";
echo $body;
?>
