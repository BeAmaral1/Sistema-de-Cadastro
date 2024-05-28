<!DOCTYPE html>
<html lang="en">

    <?php include "head.php"; ?>

    <body>

        <div id="wrapper">


              <?php include "comum.php"; ?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">StreetFit</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                   Tabela Produto
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>NOME</th>
                                                    <th>MARCA</th>
                                                    <th>VALOR</th>
                                                    <th>FORNECE</th>
                                                    <th>QUANTIDADE</th>
                                                   
                                                    <th>#</th>                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
include "cone.php";

// Recebendo os dados do formulário
$nome = isset($_GET['n']) ? $_GET['n'] : '';
$marca = isset($_GET['m']) ? $_GET['m'] : '';
$valor = isset($_GET['v']) ? $_GET['v'] : '';
$fornece = isset($_GET['f']) ? $_GET['f'] : '';
$quantidade = isset($_GET['quantidade']) ? $_GET['quantidade'] : '';

// Filtrando os dados de entrada
$nome = filter_var($nome, FILTER_SANITIZE_STRING);
$marca = filter_var($marca, FILTER_SANITIZE_STRING);
$valor = filter_var($valor, FILTER_SANITIZE_STRING);
$fornece = filter_var($fornece, FILTER_SANITIZE_STRING);
$quantidade = filter_var($quantidade, FILTER_SANITIZE_STRING);

// Consulta SQL usando prepared statement
$sql = "SELECT * FROM tb_produto WHERE nome LIKE ? AND marca LIKE ? AND valor LIKE ? AND fornece LIKE ? AND quantidade LIKE ?";
$params = ["%$nome%", "%$marca%", "%$valor%", "%$fornece%", "%$quantidade%"];

$stmt = $conecta->prepare($sql);
$stmt->execute($params);
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Exibindo os resultados
foreach ($produtos as $produto) {
    echo "<tr>";
    echo "<td>{$produto['id']}</td>";
    echo "<td>{$produto['nome']}</td>";
    echo "<td>{$produto['marca']}</td>";
    echo "<td>{$produto['valor']}</td>";
    echo "<td>{$produto['fornece']}</td>";
    echo "<td>{$produto['quantidade']}</td>";
    echo "<td>
              <a href='excluir_produto.php?id={$produto['id']}' class='btn btn-danger'><i class='fa fa-trash'></i></a>
              <a href='editar_produto.php?id={$produto['id']}' class='btn btn-warning'><i class='fa fa-edit'></i></a>
          </td>";
    echo "</tr>";
}
?>
                                  
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                   
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                
                   
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>

    </body>

</html>