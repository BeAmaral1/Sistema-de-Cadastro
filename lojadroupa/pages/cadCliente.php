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
                        <h1 class="page-header">Cadastrar Cliente</h1>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Cadastre o Cliente
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <form role="form" action="cadClienteEnv.php" method="POST">
                                        <div class="form-group">
                                            <label>Nome:</label>
                                                    <input type="text" name="n" class="form-control" placeholder="Nome">
                                                </div>
                                                <div class="form-group">
                                                    <label>CPF:</label>
                                                    <input type="text" name="c" class="form-control" placeholder="000.000.000-00">
                                                </div>
                                        <div class="form-group">
                                            <label>Telefone:</label>
                                            <input class="form-control" type="text" name="t" class="form-control" placeholder="(51) 00000-0000">
                                        </div>
                                        <div class="form-group">
                                                    <label>Sexo</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="sexo" value="Feminino" >Feminino
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
                                                    <button type="submit" class="btn btn-primary">Confirmar</button>
                                                    <button type="reset" class="btn btn-danger">Cancelar</button>
                                    </form>
                                </div>
                               
                                                        <!-- Adicione mais linhas conforme necessário -->
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
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
