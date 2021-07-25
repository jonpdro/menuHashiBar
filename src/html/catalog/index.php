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
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../scripts/css/geral.css">
    <link rel="shortcut icon" href="../../img/logo.jpg">
    <title>Mesa</title>
</head>

<body background="../../img/background.jpg">
    <nav class="topo navbar navbar-expand navbar-dark sticky-top">
        <div class="container">
            <class class="navbar-brand">
                <img src="../../img/logo.jpg" width="150" height="100" alt="Logo">
            </class>
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
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
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="1" data-slide-to="0" class="active"></li>
                <li data-target="2" data-slide-to="1"></li>
                <li data-target="3" data-slide-to="2"></li>
                <li data-target="4" data-slide-to="3"></li>
                <li data-target="5" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="rounded mx-auto d-block w-40 img-fluid" src="../../img/jhou.jpeg" alt="Primeiro Slide" style="width: 45rem; height: 40rem;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Djô Light</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="rounded mx-auto d-block w-40 img-fluid" src="../../img/combinados2.png" alt="Segundo Slide" style="width: 45rem; height: 40rem;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Combinado de Salmão 3 pessoas</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="rounded mx-auto d-block w-40 img-fluid" src="../../img/brownie.png" alt="Terceiro Slide" style="width: 45rem; height: 40rem;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Brownie com Sorvete</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="rounded mx-auto d-block w-40 img-fluid" src="../../img/teppan.png" alt="Terceiro Slide" style="width: 45rem; height: 40rem;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Teppan Acompanhado de Legumes</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="rounded mx-auto d-block w-40 img-fluid" src="../../img/tempuracamarao.png" alt="Terceiro Slide" style="width: 45rem; height: 40rem;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Tempurá de Camarão</h5>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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
                                            <button class="btn btn-outline-warning btn-md text-center" name="cancelarI" type="submit" data-backdrop="static">Cancelar Pedido</button>
                                        </td>

                                    </tr>
                                </tbody>
                            <?php } while ($linha = $sql_query->fetch_assoc()); ?>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="enviarI" class="btn btn-secondary">Enviar para Preparo</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>