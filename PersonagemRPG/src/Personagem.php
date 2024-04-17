<?php

namespace App;

// Definição da interface Personagem
interface Personagem 
{
    public function atacar();
}

// Função que aceita um objeto Personagem e invoca seu método atacar()
function realizarAtaque(Personagem $personagem) 
{
    $personagem->atacar();
}

?>