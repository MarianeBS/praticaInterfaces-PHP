<?php

namespace App;

use App\Personagem;

// Implementação da classe Mago que implementa a interface Personagem
class Mago implements Personagem {
    public function atacar() {
        echo "O Mago lança uma bola de fogo!\n";
    }
}

?>