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
                            <h1 class="page-header">Cadastrar Produto</h1>
                        </div>
                    </div>
                        <!-- /.col-lg-12 -->
                </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Cadastre o Produto
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form" action="cadProdutoEnv.php" method="POST">
                                                <div class="form-group">
                                                    <label>Nome:</label>
                                                    <input class="form-control" type="text" name="n" placeholder="Nome">
                                                </div>
                                                <div class="form-group">
                                                    <label>Marca:</label>
                                                    <input class="form-control" type="text" name="m" placeholder="Marca da Roupa">
                                                </div>
                                                <div class="form-group">
                                                    <label>Valor:</label>
                                                    <input class="form-control" type="text" name="v" placeholder="R$">
                                                </div>
                                                <div class="form-group">
                                                    <label>Fornece:</label>
                                                    <input class="form-control" type="text" name="f" placeholder="Fornecedor">
                                                </div>
                                                <div class="form-group">
                                                <label>Quantidade:</label>
                                                <input class="form-control" type="text" name="quantidade">
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