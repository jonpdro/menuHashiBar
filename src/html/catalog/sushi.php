<?php
session_start();
include("../../scripts/php/conexao.php");

//LISTAR
$sql_code = "SELECT * FROM pedidos";
$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
$linha = $sql_query->fetch_assoc();
$id = $linha['id'];
?>
<!DOCTYPE html>
<html lang="pt-br" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="shortcut icon" href="../../img/logo.jpg">
    <link rel="stylesheet" type="text/css" href="../../scripts/css/geral.css">
    <title>Sushi</title>
</head>

<body background="../../img/background.jpg">

    <nav class="topo navbar navbar-expand navbar-dark sticky-top">
        <div class="container">
            <class class="navbar-brand">
                <img src="../../img/logo.jpg" width="150" height="100" alt="Logo">
            </class>
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(página
                                atual)</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pratos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="entrada.php">Entradas</a>
                            <a class="dropdown-item" href="sushi.php">Sushi</a>
                            <a class="dropdown-item" href="sashimi.php">Sashimi</a>
                            <a class="dropdown-item" href="temaki.php">Temaki</a>
                            <a class="dropdown-item" href="pratosquentes.php">Pratos Quentes</a>
                            <a class="dropdown-item" href="combinados.php">Combinados</a>
                            <a class="dropdown-item" href="combo.php">Combos</a>
                            <a class="dropdown-item" href="adicionais.php">Adicionais</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Bebidas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="drinks.php">Drinks</a>
                            <a class="dropdown-item" href="nalcoolicas.php">Não Alcoólicas </a>

                        </div>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="sobremesa.php">Sobremesas <span class="sr-only">(página
                                atual)</span></a>
                    </li>

                </ul>
            </div>
        </div>
        <h6 style="color: white; display: inline; position: fixed; right: 11.2em">
            <?php
            if (isset($_SESSION['pedidoStatus'])) {
                echo $_SESSION['pedidoStatus'];
                unset($_SESSION['pedidoStatus']);
            }
            ?>
        </h6>
        <!-- Botão para acionar modal -->
        <button style="background-color: rgba(251, 221, 81)" type="button" class="btn" data-toggle="modal" data-target="#ModalPedidos">
            <img src="../../img/cartb.png" alt="carrinho">
            Pedidos
        </button>
    </nav>

    <div class="container box">
        <div class="row centro d-flex justify-content-center d-flex flex-wrap">

            <div class="card card-deck m-auto " style="width: 12rem; height: 24rem;">
                <img class="card-img-top" src="../../img/uramakicali.png" alt="Card image cap">
                <form class="card-body text-center" method="POST" action="../../scripts/php/func_adicionar.php">
                    <h6 class="card-title">Uramaki (8UN)</h6>
                    <h6 class="card-title">R$25,00</h6>
                    <input type="hidden" name="nome" value="Uramaki (8UN)">
                    <input type="hidden" name="valor" value="25">
                    <select class="form-control form-control-sm" name="sabor">
                        <option selected>Sabor</option>
                        <option value="Salmão">Salmão</option>
                        <option value="Filadelfia">Filadelfia</option>
                        <option value="Skin">Skin</option>
                        <option value="Camarão">Camarão</option>
                        <option value="Shimeji">Shimeji</option>
                    </select>
                    <br>
                    <select class="form-control form-control-sm" name="qntd">
                        <option selected>Quantidade</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <br>
                    <button type="button" class="btn btn-dark btn-sm" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Bolinho de arroz e gergilim com recheio de salmão, 
						salmão com cream cheese(filadelfia), pele de peixe frita (skin), camarão ou shimeji enrolado em alga desidratada.">
                        ?
                    </button>
                    <button name="adicionarSU" class="btn btn-dark btn-sm">Adicionar</button>
                </form>
            </div>

            <div class="card card-deck m-auto " style="width: 12rem; height: 24rem;">
                <img class="card-img-top" src="../../img/kanimaki.png" alt="Card image cap">
                <form class="card-body text-center" method="POST" action="../../scripts/php/func_adicionar.php">
                    <h6 class="card-title">Hossomaki (8UN)</h6>
                    <h6 class="card-title">R$19,00</h6>
                    <input type="hidden" name="nome" value="Hossomaki (8UN)">
                    <input type="hidden" name="valor" value="19">
                    <select class="form-control form-control-sm" name="sabor">
                        <option selected>Sabor</option>
                        <option value="Kappamaki">Kappamaki</option>
                        <option value="Kanimaki">Kanimaki</option>
                        <option value="Salmonmaki">Salmonmaki</option>
                    </select>
                    <br>
                    <select class="form-control form-control-sm" name="qntd">
                        <option selected>Quantidade</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <br>
                    <button type="button" class="btn btn-dark btn-sm" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Bolinho de arroz enrolado em alga desidratada, com
						recheio de pepino, kani ou salmão cru.">
                        ?
                    </button>
                    <button name="adicionarSU2" class="btn btn-dark btn-sm">Adicionar</button>
                </form>
            </div>

            <div class="card m-auto " style="width: 12rem; height: 24rem;">
                <img class="card-img-top" src="../../img/niguirisalmao.png" alt="Card image cap">
                <form class="card-body text-center" method="POST" action="../../scripts/php/func_adicionar.php">
                    <h6 class="card-title">Niguiri (8UN)</h6>
                    <h6 class="card-title">R$31,50</h6>
                    <input type="hidden" name="nome" value="Niguiri (8UN)">
                    <input type="hidden" name="valor" value="31.50">
                    <select class="form-control form-control-sm" name="sabor">
                        <option selected>Sabor</option>
                        <option value="Salmão">Salmão</option>
                        <option value="Peixe Branco">Peixe Branco</option>
                        <option value="Camarão">Camarão</option>
                        <option value="Skin">Skin</option>
                        <option value="Kani">Kani</option>
                    </select>
                    <br>
                    <select class="form-control form-control-sm" name="qntd">
                        <option selected>Quantidade</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <br>
                    <button type="button" class="btn btn-dark btn-sm" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Bolinho de arroz com formato alongado, coberto por uma 
						fatia de peixe branco, salmão, polvo, kani, pele de peixe frita(skin) ou camarão.">
                        ?
                    </button>
                    <button name="adicionarSU3" class="btn btn-dark btn-sm">Adicionar</button>
                </form>
            </div>

            <div class="card card-deck m-auto " style="width: 12rem; height: 24rem;">
                <img class="card-img-top" src="../../img/djo.png" alt="Card image cap">
                <form class="card-body text-center" method="POST" action="../../scripts/php/func_adicionar.php">
                    <h6 class="card-title">Djô (8UN)</h6>
                    <h6 class="card-title">R$26,00</h6>
                    <input type="hidden" name="nome" value="Djô (8UN)">
                    <input type="hidden" name="valor" value="26">
                    <select class="form-control form-control-sm" name="sabor">
                        <option selected>Sabor</option>
                        <option value="Salmão">Salmão</option>
                        <option value="Light">Light</option>
                        <option value="Crispy">Crispy</option>
                        <option value="Camarão">Camarão</option>
                        <option value="Shimeji">Shimeji</option>
                    </select>
                    <br>
                    <select class="form-control form-control-sm" name="qntd">
                        <option selected>Quantidade</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <br>
                    <button type="button" class="btn btn-dark btn-sm" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Bolinho de arroz envolto por uma fina tira de peixe ou pepino (light)
						coberto por salmão, camarão, shimeji ou couve frita (crispy).">
                        ?
                    </button>
                    <button name="adicionarSU4" class="btn btn-dark btn-sm">Adicionar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        $(function() {
            $('[data-toggle="popover"]').popover({
                trigger: 'focus'
            })
        })
    </script>
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg " id="ModalPedidos" tabindex="-1" role="dialog" aria-labelledby="Lista" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <form id="ajax_form" action="../../scripts/php/func_pedidos.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Lista">Pedidos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead style="background-color:black" class="thead">
                                <tr>
                                    <th style="text-align: center;">Pedido</th>
                                    <th style="text-align: center;">Quantidade</th>
                                    <th style="text-align: center;">Valor Total</th>
                                    <th style="text-align: center;">Ação</th>
                                </tr>
                            </thead>

                            <?php do { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $linha['nome'] . " " . $linha['sabor'] . " " . $linha['base']; ?></td>
                                        <td style="text-align: center;"><?php echo $linha['qntd']; ?></td>
                                        <td style="text-align: center;"><?php echo "R$ " . $linha['valor'] * $linha['qntd']; ?></td>
                                        <td style="text-align: center;">
                                            <button class="btn btn-outline-warning btn-md text-center" name="cancelarSU" type="submit" data-backdrop="static">Cancelar Pedido</button>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php } while ($linha = $sql_query->fetch_assoc()); ?>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="enviarSU" class="btn btn-secondary">Enviar para Preparo</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>