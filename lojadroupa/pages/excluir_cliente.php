<?php
include "cone.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

   $conecta = db_connect();
   $stmt = $conecta->prepare("DELETE FROM tb_cliente WHERE id = :id");
   $stmt->bindParam(':id', $id, PDO::PARAM_INT);
   $stmt->execute();

    if ($stmt->rowCount() > 0) {
       echo "Cliente excluído com sucesso!";
   } else {
        echo "Erro ao excluir cliente.";
    }
} else {
    echo "ID do cliente não fornecido.";
}

header("Location: consulta.php");
exit();

?>
