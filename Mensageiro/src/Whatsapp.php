<?php

namespace App;

use App\Mensageiro;

// Implementação da classe Whatsapp que implementa a interface Mensageiro
class Whatsapp implements Mensageiro 
{
    public function enviar($mensagem) 
    {
        echo "Enviando mensagem via Whatsapp: $mensagem\n";
    }
}

?>