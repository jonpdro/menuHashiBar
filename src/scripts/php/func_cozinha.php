<?php
include_once('conexao.php');
$sql_code = "SELECT * FROM cozinha";
$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
$linha = $sql_query->fetch_assoc();

$id = $linha['id'];
$nome = $linha['nome'];
$sabor = $linha['sabor'];
$base = $linha['base'];

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$data = date('H:i:s');

if(isset($_POST['enviar'])){
    $sql_code = "INSERT INTO garcom(nome, sabor, base, hora) VALUES('$nome', '$sabor', '$base', '$data')";
    $sql_query = $mysqli->query($sql_code) or die ($mysqli->error);

    $sql_code2 = "DELETE FROM cozinha WHERE  id='$id' && nome ='$nome'";
    $limpar = $mysqli->query($sql_code2) or die(deleteError());

    if(mysqli_affected_rows($mysqli)){
        header("Location: ../../html/admin/cozinha.php");
    }else{
        
        header("Location: ../../html/admin/cozinha.php");
    }
    header("Location: ../../html/admin/cozinha.php");
}


