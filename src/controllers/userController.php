<?php
    require '../config/dbconfig.php';
    require '../src/resposta.php';

    function BuscaUsuario()
    {
        try {
            $pdo = getConexao();

            // Exemplo de uma consulta simples
            $query = $pdo->query("SELECT * FROM usuarios");

            // Obter os resultados como um array associativo
            $resultados = $query->fetchAll(PDO::FETCH_ASSOC);

            $res = [
                'status' => 'sucesso',
                'mensagem' => 'Usuários encontrados',
                'dados' => $resultados
            ];

            responder($res);

        } catch (PDOException $e) {
            // Tratar erros de consulta
            $res = [
                'status' => 'erro',
                'mensagem' =>  "Erro ao executar a consulta: " . $e->getMessage()
            ];
            responder($res);
        }
    }

?>