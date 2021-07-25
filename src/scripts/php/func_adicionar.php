<?php
session_start();
include('conexao.php');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$data = date('H:i:s');

//DRINKS
if (isset($_POST['adicionarD'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/drinks.php');
}

if (isset($_POST['adicionarD2'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/drinks.php');
}

if (isset($_POST['adicionarD3'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/drinks.php');
}

if (isset($_POST['adicionarD4'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/drinks.php');
}

if (isset($_POST['adicionarD5'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/drinks.php');
}

//SUSHI
if (isset($_POST['adicionarSU'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/sushi.php');
}

if (isset($_POST['adicionarSU2'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/sushi.php');
}

if (isset($_POST['adicionarSU3'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/sushi.php');
}

if (isset($_POST['adicionarSU4'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/sushi.php');
}

//TEMAKI
if (isset($_POST['adicionarT'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/temaki.php');
}

if (isset($_POST['adicionarT2'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/temaki.php');
}

//SASHIMI
if (isset($_POST['adicionarSA'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/sashimi.php');
}

if (isset($_POST['adicionarSA2'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/sashimi.php');
}

if (isset($_POST['adicionarSA3'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/sashimi.php');
}

if (isset($_POST['adicionarSA4'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/sashimi.php');
}

//COMBINADOS
if (isset($_POST['adicionarCBD'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/combinados.php');
}

if (isset($_POST['adicionarCBD2'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/combinados.php');
}

if (isset($_POST['adicionarCBD3'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/combinados.php');
}

if (isset($_POST['adicionarCBD4'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/combinados.php');
}

if (isset($_POST['adicionarCBD5'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/combinados.php');
}

//COMBOS
if (isset($_POST['adicionarCB'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/combo.php');
}

if (isset($_POST['adicionarCB2'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/combo.php');
}

if (isset($_POST['adicionarCB3'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/combo.php');
}

if (isset($_POST['adicionarCB4'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/combo.php');
}

if (isset($_POST['adicionarCB5'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/combo.php');
}

//ADICIONAIS
if (isset($_POST['adicionarA'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/adicionais.php');
}

if (isset($_POST['adicionarA2'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/adicionais.php');
}

//NAO ALCOOLICAS
if (isset($_POST['adicionarNA'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/nalcoolicas.php');
}

if (isset($_POST['adicionarNA2'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/nalcoolicas.php');
}

if (isset($_POST['adicionarNA3'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/nalcoolicas.php');
}

//ENTRADAS
if (isset($_POST['adicionarE'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/entrada.php');
}

if (isset($_POST['adicionarE2'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/entrada.php');
}

if (isset($_POST['adicionarE3'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/entrada.php');
}

if (isset($_POST['adicionarE4'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/entrada.php');
}

if (isset($_POST['adicionarE5'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/entrada.php');
}

if (isset($_POST['adicionarE6'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/entrada.php');
}

if (isset($_POST['adicionarE7'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/entrada.php');
}

if (isset($_POST['adicionarE8'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/entrada.php');
}

//PRATOS QUENTES
if (isset($_POST['adicionarPQ'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/entrada.php');
}

if (isset($_POST['adicionarPQ2'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/entrada.php');
}

if (isset($_POST['adicionarPQ3'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/entrada.php');
}

if (isset($_POST['adicionarPQ4'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/entrada.php');
}

//SOBREMESA
if (isset($_POST['adicionarS'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/entrada.php');
}

if (isset($_POST['adicionarS2'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/entrada.php');
}

if (isset($_POST['adicionarS3'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/entrada.php');
}

if (isset($_POST['adicionarS4'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/entrada.php');
}

if (isset($_POST['adicionarS5'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/entrada.php');
}

if (isset($_POST['adicionarS6'])) {
    $sql_code = "INSERT INTO pedidos(nome, sabor, valor, base, qntd, hora) VALUES('$_POST[nome]', '$_POST[sabor]', '$_POST[valor]', '$_POST[base]', '$_POST[qntd]', '$data')";
    $add = $mysqli->query($sql_code) or die($mysqli->error);
    header('Location: ../../html/catalog/entrada.php');
}
