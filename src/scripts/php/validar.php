<?php
session_start();
include_once("conexao.php");

if ((isset($_POST['user'])) && (isset($_POST['senha']))) {
    $usuario = mysqli_real_escape_string($mysqli, $_POST['user']);
    $senha = mysqli_real_escape_string($mysqli, $_POST['senha']);
    $userId = mysqli_real_escape_string($mysqli, $_POST['userId']);
    $senha = "$senha";

    $result_usuario = "SELECT * FROM funcionarios WHERE user = '$usuario' && senha = '$senha' LIMIT 1";
    $resultado_usuario = mysqli_query($mysqli, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);

    if (isset($resultado)) {
        $_SESSION['user'] = $resultado['user'];
        $_SESSION['senha'] = $resultado['senha'];
        $_SESSION['userId'] = $resultado['id'];
        if ($_SESSION['userId'] == "Gerencia") {
            header("Location: ../../html/admin/gerencia.php");
        } elseif ($_SESSION['userId'] == "Caixa") {
            header("Location: ../../html/admin/caixa.php");
        } elseif ($_SESSION['userId'] == "Cozinha") {
            header("Location: ../../html/admin/cozinha.php");
        } elseif ($_SESSION['userId'] == "Garcom") {
            header("Location: ../../html/admin/garcom.php");
        } else {
            header("Location:../../html/admin/index.php");
        }
    } else {
        $_SESSION['loginErro'] = "Usuário ou senha Inválido";
        header("Location: ../../html/admin/login.php");
    }
} else {
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    header("Location: ../../html/admin/login.php");
}
