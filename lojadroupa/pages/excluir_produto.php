<?php
include "cone.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

   $conecta = db_connect();
   $stmt = $conecta->prepare("DELETE FROM tb_produto WHERE id = :id");
   $stmt->bindParam(':id', $id, PDO::PARAM_INT);
   $stmt->execute();

    if ($stmt->rowCount() > 0) {
       echo "Produto excluído com sucesso!";
   } else {
        echo "Erro ao excluir produto.";
    }
} else {
    echo "ID do produto não reconhecido.";
}

header("Location: consultaProduto.php");
exit();

?>
