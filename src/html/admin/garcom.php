<?php
if (!isset($_SESSION))
    session_start();

include("../../scripts/php/conexao.php");

//LISTAR
$sql_code = "SELECT * FROM garcom";
$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
$linha = $sql_query->fetch_assoc();

if (!isset($_SESSION['user']) and !isset($_SESSION['tipo_session']) and !isset($_SESSION['userId'])) {
    session_destroy();
    header("location: index.php");
    exit;
} elseif ($_SESSION['userId'] != "Garcom" and $_SESSION['userId'] != "Gerencia") {
    session_destroy();
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../scripts/css/geral.css">
    <link rel="shortcut icon" href="../../img/logo.jpg">
    <title>Garçom</title>
</head>

<body>

    <nav class="topo navbar navbar-expand navbar-dark sticky-top">
        <div class="container">
            <class class="navbar-brand">
                <img src="../../img/logo.jpg" width="150" height="100" alt="Logo">
            </class>
        </div>
        <a href="../../scripts/php/func_sair.php"><button class="btn btn-outline-light btn-md" type="submit">Voltar</button></a>
    </nav>

    <form method="POST" class="tabela container" action="../../scripts/php/func_garcom.php?id=<?php echo $linha['id']; ?>">
        <table id="first" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Mesa</th>
                    <th>Pedido</th>
                    <th>Hora</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php do { ?>
                    <tr>
                        <th scope="row">
                            Mesa 1
                        </th>
                        <td>
                            <?php echo $linha['nome'] . " " . $linha['sabor'] . " " . $linha['base']; ?>
                        </td>
                        <td>
                            <?php echo $linha['hora']; ?>
                        </td>
                        <td>
                        <button value="limpar" role="button" class="btn btn-outline-warning btn-lg text-center" name="enviar">Limpar</button>
                        </td>
                    </tr>
                <?php } while ($linha = $sql_query->fetch_assoc()); ?>
            </tbody>
            </div>
        </table>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#first').DataTable({
                fixedHeader: true
            });

            var visible = true;
            var tableContainer = $(table.table().container());

            $('#mesa1').on('click', function() {
                tableContainer.css('display', visible ? 'none' : 'block');
                table.fixedHeader.adjust();
                visible = !visible;
            });
        });
    </script>
</body>

</html>