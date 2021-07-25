<?php
session_start();

include_once('conexao.php');
$sql_code = "SELECT id, nome FROM pedidos";
$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
$linha = $sql_query->fetch_assoc();

$id = $linha['id'];
$nome = $linha['nome'];

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$data = date('H:i:s');

//INDEX MODAL
if (isset($_POST['enviarI'])) {
    $sql_code = "INSERT INTO cozinha(nome, sabor, base, qntd, hora) SELECT nome, sabor, base, qntd, '$data' FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "INSERT INTO caixa(nome, sabor, valor, base, qntd) SELECT nome, sabor, valor, base, qntd FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "DELETE FROM pedidos";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido saiu para preparo.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/index.php");
    } else {

        header("Location: ../../html/catalog/index.php");
    }
    header("Location: ../../html/catalog/index.php");
}

if (isset($_POST['cancelarI'])) {
    $sql_code = "DELETE FROM pedidos WHERE  id='$id' && nome='$nome'";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido foi desfeito.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/index.php");
    } else {

        header("Location: ../../html/catalog/index.php");
    }
    header("Location: ../../html/catalog/index.php");
}

//ADICIONAIS MODAL
if (isset($_POST['enviarA'])) {
    $sql_code = "INSERT INTO cozinha(nome, sabor, base, qntd, hora) SELECT nome, sabor, base, qntd, '$data' FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "INSERT INTO caixa(nome, sabor, valor, base, qntd) SELECT nome, sabor, valor, base, qntd FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "DELETE FROM pedidos";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido saiu para preparo.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/adicionais.php");
    } else {

        header("Location: ../../html/catalog/adicionais.php");
    }
    header("Location: ../../html/catalog/adicionais.php");
}

if (isset($_POST['cancelarA'])) {
    $sql_code = "DELETE FROM pedidos WHERE  id='$id' && nome='$nome'";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido foi desfeito.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/adicionais.php");
    } else {

        header("Location: ../../html/catalog/adicionais.php");
    }
    header("Location: ../../html/catalog/adicionais.php");
}

//COMBINADOS MODAL
if (isset($_POST['enviarCBD'])) {
    $sql_code = "INSERT INTO cozinha(nome, sabor, base, qntd, hora) SELECT nome, sabor, base, qntd, '$data' FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "INSERT INTO caixa(nome, sabor, valor, base, qntd) SELECT nome, sabor, valor, base, qntd FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "DELETE FROM pedidos";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido saiu para preparo.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/combinados.php");
    } else {

        header("Location: ../../html/catalog/combinados.php");
    }
    header("Location: ../../html/catalog/combinados.php");
}

if (isset($_POST['cancelarCBD'])) {
    $sql_code = "DELETE FROM pedidos WHERE  id='$id' && nome='$nome'";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido foi desfeito.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/combinados.php");
    } else {

        header("Location: ../../html/catalog/combinados.php");
    }
    header("Location: ../../html/catalog/combinados.php");
}

//COMBO MODAL
if (isset($_POST['enviarCB'])) {
    $sql_code = "INSERT INTO cozinha(nome, sabor, base, qntd, hora) SELECT nome, sabor, base, qntd, '$data' FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "INSERT INTO caixa(nome, sabor, valor, base, qntd) SELECT nome, sabor, valor, base, qntd FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "DELETE FROM pedidos";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido saiu para preparo.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/combo.php");
    } else {

        header("Location: ../../html/catalog/combo.php");
    }
    header("Location: ../../html/catalog/combo.php");
}

if (isset($_POST['cancelarCB'])) {
    $sql_code = "DELETE FROM pedidos WHERE  id='$id' && nome='$nome'";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido foi desfeito.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/combo.php");
    } else {

        header("Location: ../../html/catalog/combo.php");
    }
    header("Location: ../../html/catalog/combo.php");
}

//DRINKS MODAL
if (isset($_POST['enviarD'])) {
    $sql_code = "INSERT INTO cozinha(nome, sabor, base, qntd, hora) SELECT nome, sabor, base, qntd, '$data' FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "INSERT INTO caixa(nome, sabor, valor, base, qntd) SELECT nome, sabor, valor, base, qntd FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "DELETE FROM pedidos";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido saiu para preparo.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/drinks.php");
    } else {

        header("Location: ../../html/catalog/drinks.php");
    }
    header("Location: ../../html/catalog/drinks.php");
}

if (isset($_POST['cancelarD'])) {
    $sql_code = "DELETE FROM pedidos WHERE  id='$id' && nome='$nome'";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido foi desfeito.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/drinks.php");
    } else {

        header("Location: ../../html/catalog/drinks.php");
    }
    header("Location: ../../html/catalog/drinks.php");
}

//ENTRADAS MODAL
if (isset($_POST['enviarE'])) {
    $sql_code = "INSERT INTO cozinha(nome, sabor, base, qntd, hora) SELECT nome, sabor, base, qntd, '$data' FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "INSERT INTO caixa(nome, sabor, valor, base, qntd) SELECT nome, sabor, valor, base, qntd FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "DELETE FROM pedidos";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido saiu para preparo.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/entrada.php");
    } else {

        header("Location: ../../html/catalog/entrada.php");
    }
    header("Location: ../../html/catalog/entrada.php");
}

if (isset($_POST['cancelarE'])) {
    $sql_code = "DELETE FROM pedidos WHERE  id='$id' && nome='$nome'";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido foi desfeito.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/entrada.php");
    } else {

        header("Location: ../../html/catalog/entrada.php");
    }
    header("Location: ../../html/catalog/entrada.php");
}

//NAO ALCOOLICAS MODAL
if (isset($_POST['enviarNA'])) {
    $sql_code = "INSERT INTO cozinha(nome, sabor, base, qntd, hora) SELECT nome, sabor, base, qntd, '$data' FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "INSERT INTO caixa(nome, sabor, valor, base, qntd) SELECT nome, sabor, valor, base, qntd FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "DELETE FROM pedidos";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido saiu para preparo.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/nalcoolicas.php");
    } else {

        header("Location: ../../html/catalog/nalcoolicas.php");
    }
    header("Location: ../../html/catalog/nalcoolicas.php");
}

if (isset($_POST['cancelarNA'])) {
    $sql_code = "DELETE FROM pedidos WHERE  id='$id' && nome='$nome'";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido foi desfeito.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/nalcoolicas.php");
    } else {

        header("Location: ../../html/catalog/nalcoolicas.php");
    }
    header("Location: ../../html/catalog/nalcoolicas.php");
}

//PRATOS QUENTES MODAL
if (isset($_POST['enviarPQ'])) {
    $sql_code = "INSERT INTO cozinha(nome, sabor, base, qntd, hora) SELECT nome, sabor, base, qntd, '$data' FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "INSERT INTO caixa(nome, sabor, valor, base, qntd) SELECT nome, sabor, valor, base, qntd FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "DELETE FROM pedidos";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido saiu para preparo.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/pratosquentes.php");
    } else {

        header("Location: ../../html/catalog/pratosquentes.php");
    }
    header("Location: ../../html/catalog/pratosquentes.php");
}

if (isset($_POST['cancelarPQ'])) {
    $sql_code = "DELETE FROM pedidos WHERE  id='$id' && nome='$nome'";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido foi desfeito.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/pratosquentes.php");
    } else {

        header("Location: ../../html/catalog/pratosquentes.php");
    }
    header("Location: ../../html/catalog/pratosquentes.php");
}

//SASHIMI MODAL
if (isset($_POST['enviarSA'])) {
    $sql_code = "INSERT INTO cozinha(nome, sabor, base, qntd, hora) SELECT nome, sabor, base, qntd, '$data' FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "INSERT INTO caixa(nome, sabor, valor, base, qntd) SELECT nome, sabor, valor, base, qntd FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "DELETE FROM pedidos";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido saiu para preparo.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/sashimi.php");
    } else {

        header("Location: ../../html/catalog/sashimi.php");
    }
    header("Location: ../../html/catalog/sashimi.php");
}

if (isset($_POST['cancelarSA'])) {
    $sql_code = "DELETE FROM pedidos WHERE  id='$id' && nome='$nome'";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido foi desfeito.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/sashimi.php");
    } else {

        header("Location: ../../html/catalog/sashimi.php");
    }
    header("Location: ../../html/catalog/sashimi.php");
}

//SOBREMESA MODAL
if (isset($_POST['enviarS'])) {
    $sql_code = "INSERT INTO cozinha(nome, sabor, base, qntd, hora) SELECT nome, sabor, base, qntd, '$data' FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "INSERT INTO caixa(nome, sabor, valor, base, qntd) SELECT nome, sabor, valor, base, qntd FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "DELETE FROM pedidos";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido saiu para preparo.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/sobremesa.php");
    } else {

        header("Location: ../../html/catalog/sobremesa.php");
    }
    header("Location: ../../html/catalog/sobremesa.php");
}

if (isset($_POST['cancelarS'])) {
    $sql_code = "DELETE FROM pedidos WHERE  id='$id' && nome='$nome'";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido foi desfeito.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/sobremesa.php");
    } else {

        header("Location: ../../html/catalog/sobremesa.php");
    }
    header("Location: ../../html/catalog/sobremesa.php");
}

//SUSHI MODAL
if (isset($_POST['enviarSU'])) {
    $sql_code = "INSERT INTO cozinha(nome, sabor, base, qntd, hora) SELECT nome, sabor, base, qntd, '$data' FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "INSERT INTO caixa(nome, sabor, valor, base, qntd) SELECT nome, sabor, valor, base, qntd FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "DELETE FROM pedidos";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido saiu para preparo.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/sushi.php");
    } else {

        header("Location: ../../html/catalog/sushi.php");
    }
    header("Location: ../../html/catalog/sushi.php");
}

if (isset($_POST['cancelarSU'])) {
    $sql_code = "DELETE FROM pedidos WHERE  id='$id' && nome='$nome'";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido foi desfeito.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/sushi.php");
    } else {

        header("Location: ../../html/catalog/sushi.php");
    }
    header("Location: ../../html/catalog/sushi.php");
}

//TEMAKI MODAL
if (isset($_POST['enviarT'])) {
    $sql_code = "INSERT INTO cozinha(nome, sabor, base, qntd, hora) SELECT nome, sabor, base, qntd, '$data' FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "INSERT INTO caixa(nome, sabor, valor, base, qntd) SELECT nome, sabor, valor, base, qntd FROM pedidos";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $sql_code = "DELETE FROM pedidos";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido saiu para preparo.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/temaki.php");
    } else {

        header("Location: ../../html/catalog/temaki.php");
    }
    header("Location: ../../html/catalog/temaki.php");
}

if (isset($_POST['cancelarT'])) {
    $sql_code = "DELETE FROM pedidos WHERE  id='$id' && nome='$nome'";
    $limpar = $mysqli->query($sql_code) or die($mysqli->error);

    $_SESSION['pedidoStatus'] = "Seu pedido foi desfeito.";

    if (mysqli_affected_rows($mysqli)) {
        header("Location: ../../html/catalog/temaki.php");
    } else {

        header("Location: ../../html/catalog/temaki.php");
    }
    header("Location: ../../html/catalog/temaki.php");
}