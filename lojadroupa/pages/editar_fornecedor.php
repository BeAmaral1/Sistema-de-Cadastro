<?php
include "cone.php";
$conecta = db_connect(); 

$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_fornecedor = $_POST['nome_fornecedor'] ?? '';
    $cnpj = $_POST['cnpj'] ?? '';

    $comandoSQL = "UPDATE tb_fornecedor SET nome_fornecedor = ?, cnpj = ? WHERE id = ?";
    $grava = $conecta->prepare($comandoSQL);
    $grava->execute([$nome_fornecedor, $cnpj, $id]);
    
    echo "<h2>Fornecedor atualizado com sucesso</h2>";
    header("Location: consultaFornecedor.php");
    exit();
} else {
    $sql = "SELECT * FROM tb_fornecedor WHERE id = ?";
    $stmt = $conecta->prepare($sql);
    $stmt->execute([$id]);
    $fornecedor = $stmt->fetch(PDO::FETCH_ASSOC);
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
                        <h1 class="page-header">Editar Fornecedor</h1>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <form role="form" action="editar_fornecedor.php?id=<?= $id ?>" method="POST">
                        <div class="form-group">
                            <label>Nome:</label>
                            <input type="text" name="nome_fornecedor" class="form-control" value="<?= $fornecedor['nome_fornecedor'] ?>">
                        </div>
                        <div class="form-group">
                            <label>CNPJ:</label>
                            <input type="text" name="cnpj" class="form-control" value="<?= $fornecedor['cnpj'] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="consulta.php" class="btn btn-danger">Cancelar</a>
                    </form>
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

<?php
}
?>