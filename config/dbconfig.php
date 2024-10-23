<?php
// Configurações de conexão
function getConexao() {
  $host = 'localhost';     // Endereço do servidor PostgreSQL (ou IP)
  $dbname = 'controle'; // Nome do banco de dados
  $user = 'postgres';       // Usuário do banco de dados
  $password = '1234';     // Senha do usuário

  try {
      // Criando a conexão usando PDO
      $dsn = "pgsql:host=$host;dbname=$dbname"; // Data Source Name
      $pdo = new PDO($dsn, $user, $password);

      // Configurar o modo de erro do PDO para lançar exceções
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    //  echo "Conexão com PostgreSQL estabelecida com sucesso!";
      
  } catch (PDOException $e) {
      // Exibe o erro em caso de falha
      echo "Erro ao conectar ao PostgreSQL: " . $e->getMessage();
      exit;
  }
}
?>