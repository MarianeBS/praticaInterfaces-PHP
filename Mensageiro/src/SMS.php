<?php

namespace App;

use App\Mensageiro;

// Implementação da classe SMS que implementa a interface Mensageiro
class SMS implements Mensageiro {
    public function enviar($mensagem) {
        echo "Enviando SMS: $mensagem\n";
    }
}

?>