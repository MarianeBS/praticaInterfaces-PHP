<?php

require 'vendor/autoload.php';

use App\Mago;
use App\Guerreiro;
use App\Arqueiro;

// Exemplo de uso
$guerreiro = new Guerreiro();
$mago = new Mago();
$arqueiro = new Arqueiro();

realizarAtaque($guerreiro);
realizarAtaque($mago);
realizarAtaque($arqueiro);

?>