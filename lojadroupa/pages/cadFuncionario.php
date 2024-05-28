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
                        <h1 class="page-header">Cadastrar Funcionário</h1>
                     </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Cadastre o funcionário
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                    <form role="form" action="cadFuncionarioEnv.php" method="POST">
    <div class="form-group">
        <label>Nome:</label>
        <input class="form-control" type="text" name="n" placeholder="Nome">
    </div>
    <div class="form-group">
        <label>CPF:</label>
        <input class="form-control" type="text" name="c" placeholder="000.000.000-00">
    </div>
    <div class="form-group">
        <label>Cargo:</label>
        <input class="form-control" type="text" name="ca" placeholder="Cargo">
    </div>
    <div class="form-group">
    <label>Sexo</label>
    <div class="radio">
        <label>
            <input type="radio" name="sexo" value="Feminino">Feminino
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="sexo" value="Masculino">Masculino
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="sexo" value="ND">Não declarado
        </label>
    </div>
</div>

    <button type="submit" class="btn btn-info">Cadastrar</button>
    <button type="reset" class="btn btn-danger">Apagar tudo</button>
</form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
