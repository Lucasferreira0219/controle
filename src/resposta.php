<?php
function responder($mensagem)
{
    // Definir o cabeçalho para JSON com charset UTF-8
    header('Content-Type: application/json; charset=UTF-8');

    // Codificar o array em JSON, preservando os caracteres Unicode
    echo json_encode($mensagem, JSON_UNESCAPED_UNICODE);
}
?>