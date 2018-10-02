<?php
include("./gestionBD.php");
$table = "A_cliente";
echo "Cliente borrado con exito";
borrar($pdo,$table,$_GET["client_id"])

?>