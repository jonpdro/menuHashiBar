<?php
session_start();
isset($_SESSION['userId']);

if ($_SESSION['userId'] != "Cozinha" and $_SESSION['userId'] == "Gerencia") {

    header("Location: ../../html/admin/gerencia.php");
    exit;
} elseif ($_SESSION['userId'] != "Garcom" and $_SESSION['userId'] == "Gerencia") {
    header("Location: ../../html/admin/gerencia.php");
    exit;
} elseif ($_SESSION['userId'] != "Caixa" and $_SESSION['userId'] == "Gerencia") {
    header("Location: ../../html/admin/gerencia.php");
    exit;
} else {
    $_SESSION['logindeslogado'] = "Deslogado com sucesso";
    header("Location: ../../html/admin/index.php");
}
