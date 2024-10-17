<?php
// api.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Configurações do banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cadastro_usuario"; // Certifique-se de que este banco de dados exista

    // Cria conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Captura os dados do formulário
    $nome = $conn->real_escape_string($_POST['nome']);
    $sobrenome = $conn->real_escape_string($_POST['sobrenome']);
    $cpf = $conn->real_escape_string($_POST['cpf']);
    $rg = $conn->real_escape_string($_POST['rg']);
    $nsacimento = $conn->real_escape_string($_POST['nsacimento']);
    $telefone = $conn->real_escape_string($_POST['telefone']);
    $contato = $conn->real_escape_string($_POST['contato']);
    $endereco = $conn->real_escape_string($_POST['endereco']);
    $cidade = $conn->real_escape_string($_POST['cidade']);
    $estado = $conn->real_escape_string($_POST['estado']);
    $cep = $conn->real_escape_string($_POST['cep']);
    $url_perfil = $conn->real_escape_string($_POST['url_perfil']);

    // Prepara a consulta SQL
    $sql = "INSERT INTO usuarios (nome, sobrenome, cpf, rg, nsacimento, telefone, contato, endereco, cidade, estado, cep, url_perfil) 
            VALUES ('$nome', '$sobrenome', '$cpf', '$rg', '$nsacimento', '$telefone', '$contato', '$endereco', '$cidade', '$estado', '$cep', '$url_perfil')";

    // Executa a consulta
    if ($conn->query($sql) === TRUE) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário: " . $conn->error;
    }

    // Fecha a conexão
    $conn->close();
} else {
    echo "Método não permitido!";
}
?>
