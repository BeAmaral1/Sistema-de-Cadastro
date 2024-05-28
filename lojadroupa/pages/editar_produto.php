<?php
include "cone.php";
$conecta = db_connect(); 

$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['n'] ?? '';
    $marca = $_POST['m'] ?? '';
    $valor = $_POST['v'] ?? '';
    $fornece = $_POST['f'] ?? '';
    $quantidade = $_POST['quantidade'] ?? '';

    $comandoSQL = "UPDATE tb_produto SET nome = ?, marca = ?, valor = ?, fornece = ?, quantidade = ? WHERE id = ?";
    
    $grava = $conecta->prepare($comandoSQL);
    $grava->execute([$nome, $marca, $valor, $fornece, $quantidade, $id]);
    
    echo "<h2>Produto atualizado com sucesso</h2>";
    header("Location: consultaProduto.php");
    exit();
} else {
    $sql = "SELECT * FROM tb_produto WHERE id = ?";
    $stmt = $conecta->prepare($sql);
    $stmt->execute([$id]);
    $produto = $stmt->fetch(PDO::FETCH_ASSOC);
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
        <h1 class="page-header">Editar Produto</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <form role="form" action="editar_produto.php?id=<?= $id ?>" method="POST">
        <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="n" class="form-control" value="<?= $produto['nome'] ?>">
            </div>
            <div class="form-group">
                <label>Marca:</label>
                <input type="text" name="m" class="form-control" value="<?= $produto['marca'] ?>">
            </div>
            <div class="form-group">
                <label>Valor:</label>
                <input type="text" name="v" class="form-control" value="<?= $produto['valor'] ?>">
            </div>
            <div class="form-group">
                <label>Fornece:</label>
                <input type="text" name="f" class="form-control" value="<?= $produto['fornece'] ?>">
            </div>
            <div class="form-group">
                <label>Quantidade:</label>
                <input type="text" name="quantidade" class="form-control" value="<?= $produto['quantidade'] ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="consultaProduto.php" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
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