<?php
include_once('conexao.php');
$id = $_GET['id'];
if(isset($_POST['enviar'])){
    $sql_code = "DELETE FROM garcom WHERE id='$id'";
    $sql_query = $mysqli->query($sql_code) or die ($mysqli->error);
    if(mysqli_affected_rows($mysqli)){
        header("Location: ../../html/admin/garcom.php");
    }else{
        
        header("Location: ../../html/admin/garcom.php");
    }
    header("Location: ../../html/admin/garcom.php");
}
