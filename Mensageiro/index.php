<?php

require 'vendor/autoload.php';

use App\Whatsapp;
use App\Email;
use App\SMS;

// Exemplo de uso
$email = new Email();
$sms = new SMS();
$whatsapp = new Whatsapp();

enviarMensagem($email, "Olá! Isso é um email.");
enviarMensagem($sms, "Olá! Isso é uma mensagem SMS.");
enviarMensagem($whatsapp, "Olá! Isso é uma mensagem no Whatsapp.");
?>