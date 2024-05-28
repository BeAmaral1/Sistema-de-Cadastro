<?php
include "cone.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

   $conecta = db_connect();
   $stmt = $conecta->prepare("DELETE FROM tb_fornecedor WHERE id = :id");
   $stmt->bindParam(':id', $id, PDO::PARAM_INT);
   $stmt->execute();

    if ($stmt->rowCount() > 0) {
       echo "Fornecedor excluído com sucesso!";
   } else {
        echo "Erro ao excluir fornecedor.";
    }
} else {
    echo "ID do fornecedor não reconhecido.";
}

header("Location: consultaFornecedor.php");
exit();

?>
