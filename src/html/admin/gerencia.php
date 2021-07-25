<?php
include("../../scripts/php/conexao.php");
if (!isset($_SESSION))
session_start();

// LOGIN
if (!isset($_SESSION['user']) and !isset($_SESSION['tipo_session']) and !isset($_SESSION['userId'])) {
session_destroy();
header("location: index.php");
exit;
} elseif ($_SESSION['userId'] != 'Gerencia' and $_SESSION['userId'] !='Cozinha') {
session_destroy();
header("location: index.php");
exit;
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="shortcut icon" href="../../img/logo.jpg">
    <link rel="stylesheet" href="../../scripts/css/admin.css">
    <title>Gerente</title>
</head>

<body>
    <!-- opções de escolha para logar ou cadastrar usuário  -->
    <div class="container">
        <div class="row justify-content-center mx-5 ">
            <div class="col-xs-8 text-center">
                <img src="../../img/logo.jpg" class="img-fluid rounded-circle">
                <br> <br> <br> <br>
                <a href="cozinha.php"><button class="btn btn-outline-light btn-md" type="submit">
                        <h4>Acessar Cozinha</h4>
                    </button></a>
                <br><br>
                <a href="garcom.php"><button class="btn btn-outline-light btn-md" type="submit">
                        <h4>Acessar Garçons</h4>
                    </button></a>
                <br><br>
                <a href="caixa.php"><button class="btn btn-outline-light btn-md" type="submit">
                        <h4>Acessar ao Caixa</h4>
                    </button></a>
                <br><br>
                <a href="cadastro.php"><button class="btn btn-outline-light btn-md" type="submit">
                        <h4>Controle de Funcionarios</h4>
                    </button></a>
                <br><br>
                <a href="mesas.php"><button class="btn btn-outline-light btn-md" type="submit">
                        <h4>Gerenciar Mesas</h4>
                    </button></a>
                <br><br>
                <a href="../../scripts/php/func_sairAdm.php"><button class="btn btn-outline-warning btn-md " type="submit">
                        <h4>Sair da Sessão</h4>
                    </button></a>
                <br> <br> <br>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
</body>

</html>