<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>forms com post</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <div class="row py-4">
            <h3 class="mx-auto text-gray">Enviando dados do formulário</h3>
        </div>

        <div class="row">
            <div class="col-md-6 mx-auto">

                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Cadastro de Usuário</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="./pages/cadastro.php" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
                            </div>
                            <div class="form-group">
                                <label for="sobrenome">Sobrenome</label>
                                <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome" required>
                            </div>
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Número do CPF" required>
                            </div>
                            <div class="form-group">
                                <label for="rg">RG</label>
                                <input type="text" class="form-control" id="rg" name="rg" placeholder="Número do RG" required>
                            </div>
                            <div class="form-group">
                                <label for="nsacimento">Data de Nascimento</label>
                                <input type="date" class="form-control" id="nsacimento" name="nsacimento" required>
                            </div>
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Número de telefone" required>
                            </div>
                            <div class="form-group">
                                <label for="contato">Contato</label>
                                <input type="text" class="form-control" id="contato" name="contato" placeholder="Contato de emergência" required>
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço</label>
                                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite seu endereço" required>
                            </div>
                            <div class="form-group">
                                <label for="cidade">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite sua cidade" required>
                            </div>
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite seu estado" required>
                            </div>
                            <div class="form-group">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite seu CEP" required>
                            </div>
                            <div class="form-group">
                                <label for="url_perfil">URL do Perfil</label>
                                <input type="url" class="form-control" id="url_perfil" name="url_perfil" placeholder="Digite a URL do seu perfil">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <script src="adminlte/plugins/jquery/jquery.min.js"></script>
        <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="adminlte/dist/js/adminlte.min.js"></script>
    </div>
</body>
</html>
