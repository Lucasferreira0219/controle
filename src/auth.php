<?php

//require '../src/resposta.php';

function getBearerToken() {
    $headers = getallheaders();

    // Verifica se o header Authorization está presente
    if (isset($headers['Authorization'])) {
        // Extrai o token do header Authorization
        if (preg_match('/Bearer\s(\S+)/', $headers['Authorization'], $matches)) {
            return $matches[1];
        }
    }

    return null; // Token não encontrado
}

function autenticar(){

    // Definimos um token esperado para comparação (exemplo)
    $tokenEsperado = 'f47ac10b58cc4372a567a4eaa620e4f9';

    // Obtemos o Bearer Token da requisição
    $token = getBearerToken();

    // Verificamos se o token é válido
    if ($token === $tokenEsperado) {
        // Resposta de sucesso
        return 1;
    } else {
        // Resposta de erro
        http_response_code(401); // Código de resposta HTTP para Unauthorized
        $res = [
            'status' => 'erro',
            'mensagem' => 'Token inválido ou não fornecido!'
        ];
        responder($res);
        return 0;
    }
}




?>