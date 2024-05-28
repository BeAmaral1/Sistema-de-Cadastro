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
                                   Tabela Venda
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>CLIENTE</th>
                                                    <th>CPF</th>
                                                    <th>PRODUTO</th>
                                                    <th>DATA DA VENDA</th>
                                                    <th>QUANTIDADE</th>
                                                   
                                                    <th>#</th>                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
include "cone.php";

// Recebendo os dados do formulário
$cliente = isset($_GET['cl']) ? $_GET['cl'] : '';
$cpf = isset($_GET['cp']) ? $_GET['cp'] : '';
$produto = isset($_GET['p']) ? $_GET['p'] : '';
$data = isset($_GET['dv']) ? $_GET['dv'] : '';
$quantidade = isset($_GET['quantidade']) ? $_GET['quantidade'] : '';

// Filtrando os dados de entrada
$cliente = filter_var($cliente, FILTER_SANITIZE_STRING);
$cpf = filter_var($cpf, FILTER_SANITIZE_STRING);
$produto = filter_var($produto, FILTER_SANITIZE_STRING);
$data = filter_var($data, FILTER_SANITIZE_STRING);
$quantidade = filter_var($quantidade, FILTER_SANITIZE_STRING);

// Consulta SQL usando prepared statement
$sql = "SELECT * FROM tb_venda WHERE cliente LIKE ? AND cpf LIKE ? AND produto LIKE ? AND data LIKE ? AND quantidade LIKE ?";
$params = ["%$cliente%", "%$cpf%", "%$produto%", "%$data%", "%$quantidade%"];

$stmt = $conecta->prepare($sql);
$stmt->execute($params);
$vendas = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Exibindo os resultados
foreach ($vendas as $venda) {
    echo "<tr>";
    echo "<td>{$venda['id']}</td>";
    echo "<td>{$venda['cliente']}</td>";
    echo "<td>{$venda['cpf']}</td>";
    echo "<td>{$venda['produto']}</td>";
    echo "<td>{$venda['data']}</td>";
    echo "<td>{$venda['quantidade']}</td>";
    echo "<td>
              <a href='excluir_venda.php?id={$venda['id']}' class='btn btn-danger'><i class='fa fa-trash'></i></a>
              <a href='editar_venda.php?id={$venda['id']}' class='btn btn-warning'><i class='fa fa-edit'></i></a>
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