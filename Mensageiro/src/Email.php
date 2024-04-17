<?php

namespace App;

use App\Mensageiro;

// Implementação da classe Email que implementa a interface Mensageiro
class Email implements Mensageiro 
{
    public function enviar($mensagem) 
    {
        echo "Enviando email: $mensagem\n";
    }
}

?>