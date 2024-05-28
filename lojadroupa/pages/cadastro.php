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
                            <h1 class="page-header">Cadastrar Venda</h1>
                        </div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Cadastre a sua  venda
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form" action="cadastroEnv.php" method="POST">
                                                <div class="form-group">
                                                    <label>Cliente:</label>
                                                    <input class="form-control" type="text" name="cl" placeholder="Insira o Nome do Cliente">
                                                </div>
                                                <div class="form-group">
                                                    <label>CPF:</label>
                                                    <input type="text" class="form-control" name="cp" placeholder="000.000.000-00" min="0" max="14">
                                                </div>
                                                <div class="form-group">
                                                    <label>Produto:</label>
                                                    <input type="text" type="text" name="p" class="form-control" placeholder="Insira o Produto">
                                                </div>
                                                <div class="form-group">
                                                    <label>Data da Venda:</label>
                                                    <input type="date" type="text" name="dv" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                <label>Quantidade:</label>
                                                <input class="form-control" type="text" name="quantidade">
                                                </div>

                                                <button type="submit" class="btn btn-info">Cadastrar</button>
                                                <button type="reset" class="btn btn-danger">Apagar tudo</button>
                                            </form>
                                        </div>            
                       
        <!-- /#wrapper -->
                                        <!-- /.col-lg-6 (nested) -->
                                       

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