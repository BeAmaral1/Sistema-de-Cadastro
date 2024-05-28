<?php
include "cone.php";
$conecta = db_connect(); 

$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cliente = $_POST['cl'] ?? '';
    $cpf = $_POST['cp'] ?? '';
    $produto = $_POST['p'] ?? '';
    $data = $_POST['dv'] ?? '';
    $quantidade = $_POST['quantidade'] ?? '';

    $comandoSQL = "UPDATE tb_venda SET cliente = ?, cpf = ?, produto = ?, data = ?, quantidade = ? WHERE id = ?";
    
    $grava = $conecta->prepare($comandoSQL);
    $grava->execute([$cliente, $cpf, $produto, $data, $quantidade, $id]);
    
    echo "<h2>Venda atualizada com sucesso</h2>";
    header("Location: consultaVenda.php");
    exit();
} else {
    $sql = "SELECT * FROM tb_venda WHERE id = ?";
    $stmt = $conecta->prepare($sql);
    $stmt->execute([$id]);
    $venda = $stmt->fetch(PDO::FETCH_ASSOC);
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
                        <h1 class="page-header">Editar Venda</h1>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <form role="form" action="editar_venda.php?id=<?= $id ?>" method="POST">
                        <div class="form-group">
                            <label>Cliente:</label>
                            <input type="text" name="cl" class="form-control" value="<?= $venda['cliente'] ?>">
                        </div>
                        <div class="form-group">
                            <label>CPF:</label>
                            <input type="text" name="cp" class="form-control" value="<?= $venda['cpf'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Produto:</label>
                            <input type="text" name="p" class="form-control" value="<?= $venda['produto'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Data da Venda:</label>
                            <input type="text" name="dv" class="form-control" value="<?= $venda['data'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Quantidade:</label>
                            <input type="text" name="quantidade" class="form-control" value="<?= $venda['quantidade'] ?>">
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