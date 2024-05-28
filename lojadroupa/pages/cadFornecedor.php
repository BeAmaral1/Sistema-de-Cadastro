<!DOCTYPE html>
<html lang="pt-br">

<?php
include "head.php";
?>

<body>

    <div id="wrapper">

        <?php include "comum.php"; ?>




        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cadastrar Fornecedor</h1>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Cadastre o Fornecedor
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="cadFornecedorEnv.php" method="GET">
                                        <div class="form-group">
                                            <label>Nome:</label>
                                            <input class="form-control" type="text" name="nome_fornecedor" placeholder="Nome">
                                        </div>
                                        <div class="form-group">
                                            <label>CNPJ:</label>
                                            <input class="form-control" type="text" name="cnpj" min="0" max="14" placeholder=" XX.XXX.XXX/0001-XX">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-info">Cadastrar</button>
                                        <button type="reset" class="btn btn-danger">Apagar tudo</button>
                                    </form>
                                </div>
                                


        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
