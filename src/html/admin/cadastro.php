<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="shortcut icon" href="../../img/logo.jpg">
    <link rel="stylesheet" type="text/css" href="../../scripts/css/login.css">
    <title>Cadastro</title>
</head>

<body>
    <!-- Criado o formulário para o usuário colocar os dados para registro  -->
    <div class="container ">
        <div class="row justify-content-center mx-5 ">
            <div class="col-8 text-center">
                <img src="../../img/logo.jpg" class="img-fluid rounded-circle">
                <form class="formulario" method="POST" action="../../scripts/php/func_cadastrar.php">
                    <br>    
                <p style="color: yellow;">
						<?php
						if (isset($_SESSION['cadastroStatus'])) {
							echo $_SESSION['cadastroStatus'];
							unset($_SESSION['cadastroStatus']);
						}
						?>
                    </p>
                    <br>
                    <h2>Controle de Funcionários</h2>
                    <h5>(Digite os dados do funcionário para cadastrar ou excluir).</h5>
                    <br>
                    <label for="login">
                        <h4>Login</h4>
                    </label><br>
                    <input class="form-control" name="user" value="" type="text" placeholder="Digite seu login" required><br>
                    <label for="id">
                        <h4>Identificação</h4>
                    </label><br>
                    <select name="id" class="form-control">
                        <option value="">Selecione</option>
                        <option value="Gerencia">Gerencia</option>
                        <option value="Caixa">Caixa</option>
                        <option value="Garcom">Garçom</option>
                        <option value="Cozinha">Cozinha</option>
                    </select><br>
                    <label for="senha">
                        <h4>Senha</h4>
                    </label><br>
                    <input class="form-control" type="password" name="senha" placeholder="Digite sua senha" required>
                    <br><br>
                    <button class="btn btn-outline-light btn-lg text-center" type="submit" name="confirmar">
                        <h4>Cadastrar</h4>
                    </button>
                    <br><br>
                    <button class="btn btn-outline-warning btn-lg text-center" type="submit" name="excluir">
                        <h4>Excluir</h4>
                    </button>
                    <br><br>
                    <a href="gerencia.php"><input class="btn btn-outline-light btn-lg text-center" type="button" value="Voltar"></a>
                    <br><br>
                    
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>