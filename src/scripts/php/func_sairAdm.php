<?php
session_start();
unset($_SESSION['userId'], $_SESSION['user'], $_SESSION['senha']);
$_SESSION['logindeslogado'] = "Deslogado com sucesso";
header("Location: ../../html/admin/index.php");
