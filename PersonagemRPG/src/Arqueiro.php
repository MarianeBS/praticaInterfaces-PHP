<?php

namespace App;

use App\Personagem;

// Implementação da classe Arqueiro que implementa a interface Personagem
class Arqueiro implements Personagem {
    public function atacar() {
        echo "O Arqueiro dispara uma flecha precisa!\n";
    }
}

?>