<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

    <?php include "head.php"; ?>

    <body>

        <div id="wrapper">

               <?php include "comum.php"; ?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Cadastrar Fornecedor</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                       <div class="col-lg-6">
                                       <?php
include "cone.php";

$conecta = db_connect();

$nome_fornecedor = $_GET['nome_fornecedor'] ?? '';
$cnpj = $_GET['cnpj'] ?? '';

// Verifica se todos os campos obrigatórios foram preenchidos
if (empty($nome_fornecedor) || empty($cnpj)) {
    echo "Por favor, preencha todos os campos.";
} else {
    // Inserindo os dados na tabela de fornecedor
    $sql = "INSERT INTO tb_fornecedor (nome_fornecedor, cnpj) VALUES ('$nome_fornecedor', '$cnpj')";

    if ($conecta && $conecta->exec($sql)) {
        // Redirecionando para a página de consulta após o cadastro
        echo "<h2>Fornecedor cadastrado com sucesso!!!</h2>";
        header("Refresh:3; cadFornecedor.php");
        exit();
        
    } else {
        echo "Erro ao cadastrar o fornecedor: " . $conecta->errorInfo()[2];
    }
}

$conecta = null; // Fecha a conexão
?>

                                        </div>       
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script src="../js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../js/startmin.js"></script>

</body>

</html>
<?php
ob_end_flush();
?>