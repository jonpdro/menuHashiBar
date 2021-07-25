<?php
session_start();
include('conexao.php');

$sql_code = "SELECT id FROM caixa";
$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
$linha = $sql_query->fetch_assoc();

$id = $linha['id'];

if (isset($_POST['resetar'])) {
    $sql_code = "DELETE FROM caixa";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);
    
    $sql_code = "DELETE FROM pedidos";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['caixaStatus'] = "A mesa está disponivel para outros clientes agora.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/admin/caixa.php");
    } else {

        header("Location: ../../html/admin/caixa.php");
    }
    header("Location: ../../html/admin/caixa.php");
}