<?php
include "cone.php";
$conecta = db_connect(); 

$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['n'] ?? '';
    $cpf = $_POST['c'] ?? '';
    $cargo = $_POST['t'] ?? '';
    $sexo = $_POST['sexo'] ?? '';

    $comandoSQL = "UPDATE tb_funcionario SET nome = ?, cpf = ?, cargo = ?, sexo = ? WHERE id = ?";
    
    $grava = $conecta->prepare($comandoSQL);
    $grava->execute([$nome, $cpf, $cargo, $sexo, $id]);
    
    echo "<h2>Funcionário atualizado com sucesso</h2>";
    header("Location: consultaFuncionario.php");
    exit();
} else {
    $sql = "SELECT * FROM tb_funcionario WHERE id = ?";
    $stmt = $conecta->prepare($sql);
    $stmt->execute([$id]);
    $funcionario = $stmt->fetch(PDO::FETCH_ASSOC);
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
                        <h1 class="page-header">Editar Funcionário</h1>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <form role="form" action="editar_funcionario.php?id=<?= $id ?>" method="POST">
                        <div class="form-group">
                            <label>Nome:</label>
                            <input type="text" name="n" class="form-control" value="<?= $funcionario['nome'] ?>">
                        </div>
                        <div class="form-group">
                            <label>CPF:</label>
                            <input type="text" name="c" class="form-control" value="<?= $funcionario['cpf'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Cargo:</label>
                            <input type="text" name="ca" class="form-control" value="<?= $funcionario['cargo'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Sexo:</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="sexo" value="Feminino" <?= ($funcionario['sexo'] == 'Feminino') ? 'checked' : '' ?>>Feminino
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="sexo" value="Masculino" <?= ($funcionario['sexo'] == 'Masculino') ? 'checked' : '' ?>>Masculino
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="sexo" value="ND" <?= ($funcionario['sexo'] == 'ND') ? 'checked' : '' ?>>Não declarado
                                </label>
                            </div>
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