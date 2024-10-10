<?php 
// Inicia a sessão para armazenar dados se necessário
session_start();

// Processando os dados do formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Armazenar os dados na sessão
    $_SESSION['nome'] = htmlspecialchars($_POST['nome']);
    $_SESSION['sobrenome'] = htmlspecialchars($_POST['sobrenome']);
    $_SESSION['nsacimento'] = htmlspecialchars($_POST['nsacimento']);
    $_SESSION['cpf'] = htmlspecialchars($_POST['cpf']);
    $_SESSION['rg'] = htmlspecialchars($_POST['rg']);
    $_SESSION['telefone'] = htmlspecialchars($_POST['telefone']);
    $_SESSION['contato'] = htmlspecialchars($_POST['contato']);
    $_SESSION['endereco'] = htmlspecialchars($_POST['endereco']);
    $_SESSION['cidade'] = htmlspecialchars($_POST['cidade']);
    $_SESSION['estado'] = htmlspecialchars($_POST['estado']);
    $_SESSION['cep'] = htmlspecialchars($_POST['cep']);

    // Redirecionar para a mesma página ou para outra
    header('Location: ./pages/cadastro.php'); // Mude para o caminho correto
    exit();
}

// Exibir dados se estiverem na sessão
$nome = $_SESSION['nome'] ?? 'Nome não informado';
$sobrenome = $_SESSION['sobrenome'] ?? 'Sobrenome não informado';
$nsacimento = $_SESSION['nsacimento'] ?? 'Data de nascimento não informada';
$cpf = $_SESSION['cpf'] ?? 'CPF não informado';
$rg = $_SESSION['rg'] ?? 'RG não informado';
$telefone = $_SESSION['telefone'] ?? 'Telefone não informado';
$contato = $_SESSION['contato'] ?? 'Contato não informado';
$endereco = $_SESSION['endereco'] ?? 'Endereço não informado';
$cidade = $_SESSION['cidade'] ?? 'Cidade não informada';
$estado = $_SESSION['estado'] ?? 'Estado não informado';
$cep = $_SESSION['cep'] ?? 'CEP não informado';
?>

<!DOCTYPE html>
<html lang="en">
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
</head>
<body class="hold-transition sidebar-mini">
    <section class="content">

    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            Dados do Usuário
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b><?php echo $nome . ' ' . $sobrenome; ?></b></h2>
                                    <p class="text-muted text-sm"><b>Data de Nascimento: </b> <?php echo $nsacimento; ?></p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-id-card"></i></span> CPF: <?php echo $cpf; ?></li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-id-card"></i></span> RG: <?php echo $rg; ?></li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefone: <?php echo $telefone; ?></li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Contato de Emergência: <?php echo $contato; ?></li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-map-marker-alt"></i></span> Endereço: <?php echo $endereco; ?></li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-city"></i></span> Cidade: <?php echo $cidade; ?></li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-map-signs"></i></span> Estado: <?php echo $estado; ?></li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-code"></i></span> CEP: <?php echo $cep; ?></li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="../adminlte/dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
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
    <!-- Bootstrap 4 -->
    <script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>
