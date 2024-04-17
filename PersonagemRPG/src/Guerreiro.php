<?php

namespace App;

use App\Personagem;

// Implementação da classe Guerreiro que implementa a interface Personagem
class Guerreiro implements Personagem 
{
    public function atacar() 
    {
        echo "O Guerreiro ataca com sua espada!\n";
    }
}

?>