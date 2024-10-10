<?php
// Processar os dados diretamente com $_POST sem armazenar na sessão
$nome = htmlspecialchars($_POST['nome']);
$sobrenome = htmlspecialchars($_POST['sobrenome']);
$nsacimento = htmlspecialchars($_POST['nsacimento']);
$cpf = htmlspecialchars($_POST['cpf']);
$rg = htmlspecialchars($_POST['rg']);
$telefone = htmlspecialchars($_POST['telefone']);
$contato = htmlspecialchars($_POST['contato']);
$endereco = htmlspecialchars($_POST['endereco']);
$cidade = htmlspecialchars($_POST['cidade']);
$estado = htmlspecialchars($_POST['estado']);
$cep = htmlspecialchars($_POST['cep']);
$perfil_url = htmlspecialchars($_POST['url_perfil']); // Novo campo de URL do perfil
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
                                    <img src="<?php echo $perfil_url; ?>" alt="user-avatar" class="img-circle img-fluid border border-white">
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
