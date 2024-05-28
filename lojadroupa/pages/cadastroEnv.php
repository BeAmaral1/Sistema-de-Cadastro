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
                            <h1 class="page-header">Cadastrar venda</h1>
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cliente = $_POST['cl'] ?? '';
    $cpf = $_POST['cp'] ?? '';
    $produto = $_POST['p'] ?? '';
    $data = $_POST['dv'] ?? '';
    $quantidade = $_POST['quantidade'] ??'';

    $comandoSQL = "INSERT INTO tb_venda (cliente, cpf, produto, data, quantidade) 
                   VALUES ('$cliente', '$cpf', '$produto', '$data','$quantidade')";
    
    $grava = $conecta->prepare($comandoSQL);
    $grava->execute();
    
    echo "<h2>Venda cadastrada com sucesso!!!</h2>";
    header("Refresh:3; cadastro.php");
} else {
    echo "Método não permitido";
}
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