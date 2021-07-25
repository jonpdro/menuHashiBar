<?php
session_start();
include('conexao.php');

$usuario = $_POST['user'];
$senha = $_POST['senha'];

function createError()
{
    header("Location: ../../html/admin/cadastro.php");
    $_SESSION['cadastroStatus'] = "Erro no cadastro do funcionário.";
}

function deleteError()
{
    header("Location: ../../html/admin/cadastro.php");
    $_SESSION['cadastroStatus'] = "Erro ao excluir funcionário.";
}

if (isset($_POST['confirmar'])) {
    $sql_code = "INSERT INTO funcionarios(user, id, senha) VALUES('$_POST[user]', '$_POST[id]', '$_POST[senha]')";
    $criar = $mysqli->query($sql_code) or die(createError());
    $_SESSION['cadastroStatus'] = "Funcionário cadastrado com sucesso.";
}

if (isset($_POST['excluir'])) {
    $sql_code = "DELETE FROM funcionarios WHERE user = '$usuario' && senha = '$senha'";
    $confirma = $mysqli->query($sql_code) or die(deleteError());
    $_SESSION['cadastroStatus'] = "Funcionário excluído com sucesso.";
}

header("Location: ../../html/admin/cadastro.php");
