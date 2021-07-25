<?php
session_start();
include('conexao.php');

$mesa = $_POST['mesa'];

function createError(){
    header("Location: ../../html/admin/mesas.php");
    $_SESSION['mesaStatus'] = "Mesa cadastrada já existe.";
}

function deleteError(){
    header("Location: ../../html/admin/mesas.php");
    $_SESSION['mesaStatus'] = "Mesa inserida não existe para excluir.";
}

if (isset($_POST['confirmar'])) {
    $sql_code = "CREATE TABLE $mesa(pedido VARCHAR(55) PRIMARY KEY, qntd INT(100) NULL, valor DECIMAL(10,2) NULL)";
    $confirma = $mysqli->query($sql_code) or die(createError());
    $_SESSION['mesaStatus'] = "Mesa criada com sucesso.";
}


if (isset($_POST['excluir'])) {
    $sql_code = "DROP TABLE $mesa";
    $confirma = $mysqli->query($sql_code) or die(deleteError());
    $_SESSION['mesaStatus'] = "Mesa excluída com sucesso.";
}

header("Location: ../../html/admin/mesas.php");
