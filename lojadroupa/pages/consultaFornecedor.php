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
                                   Tabela Fornecedor
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>NOME</th>
                                                    <th>CNPJ</th>
                                                    
                                                   
                                                    <th>#</th>                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
    // Conexão com o banco de dados
    include 'cone.php';

    // Recebendo os dados do formulário
    $nome_fornecedor = isset($_GET['nome_fornecedor']) ? $_GET['nome_fornecedor'] : '';
    $cnpj = isset($_GET['cnpj']) ? $_GET['cnpj'] : '';

    // Consulta SQL
    $sql = "SELECT * FROM tb_fornecedor WHERE nome_fornecedor LIKE '%$nome_fornecedor%' AND cnpj LIKE '%$cnpj%'";
    $fornecedores = $conecta->query($sql);

    // Exibindo os resultados
    foreach ($fornecedores as $fornecedor) {
        echo "<tr>";
        echo "<td>{$fornecedor['id']}</td>";
        echo "<td>{$fornecedor['nome_fornecedor']}</td>";
        echo "<td>{$fornecedor['cnpj']}</td>";
        // Supondo que as colunas 'cargo' e 'sexo' não existam na tabela 'tb_fornecedor'
        // Se existirem, você deve corrigir os nomes aqui também
        
        echo "<td>
                  <a href='excluir_fornecedor.php?id={$fornecedor['id']}' class='btn btn-danger'><i class='fa fa-trash'></i></a>
                  <a href='editar_fornecedor.php?id={$fornecedor['id']}' class='btn btn-warning'><i class='fa fa-edit'></i></a>
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