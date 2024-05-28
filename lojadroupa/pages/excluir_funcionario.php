<?php
include "cone.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

   $conecta = db_connect();
   $stmt = $conecta->prepare("DELETE FROM tb_funcionario WHERE id = :id");
   $stmt->bindParam(':id', $id, PDO::PARAM_INT);
   $stmt->execute();

    if ($stmt->rowCount() > 0) {
       echo "Funcionario excluído com sucesso!";
   } else {
        echo "Erro ao excluir funcionario.";
    }
} else {
    echo "ID do funcionario não fornecido.";
}

header("Location: consultaFuncionario.php");
exit();

?>