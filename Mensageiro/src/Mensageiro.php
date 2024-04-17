<?php

namespace App;

// Definição da interface Mensageiro
interface Mensageiro 
{
    public function enviar($mensagem);
}

// Função que aceita um objeto Mensageiro e invoca seu método enviar()
function enviarMensagem(Mensageiro $mensageiro, $mensagem) 
{
    $mensageiro->enviar($mensagem);
}

?>