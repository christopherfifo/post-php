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

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dados do Usuário</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../adminlte/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../css/style.css">

</head>
<body class="hold-transition sidebar-mini sla">

<section class="content">
    <div class="card card-solid tudo sla">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column contencao">
                    <div class="card bg-info text-white d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0 ">
                            <h3 class="card-title text-white">Dados do Usuário</h3>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b><?php echo $nome . ' ' . $sobrenome; ?></b></h2>
                                    <p class="text-white"><b>Data de Nascimento: </b> <?php echo $nsacimento; ?></p>
                                    <ul class="ml-4 mb-0 fa-ul text-white">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-id-card"></i></span> CPF: <?php echo $cpf; ?></li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-id-card"></i></span> RG: <?php echo $rg; ?></li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefone: <?php echo $telefone; ?></li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Contato de Emergência: <?php echo $contato; ?></li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-map-marker-alt"></i></span> Endereço: <?php echo $endereco; ?></li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-city"></i></span> Cidade: <?php echo $cidade; ?>, <?php echo $estado; ?></li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span> CEP: <?php echo $cep; ?></li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="<?php echo $url_perfil; ?>" alt="user-avatar" class="img-circle img-fluid border border-white">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="../adminlte/plugins/jquery/jquery.min.js"></script>
<script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>
