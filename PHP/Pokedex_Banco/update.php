<?php
require_once "connect-postgres.php";

$sql = "UPDATE pokemon SET weight = 7.5 WHERE id = 1";

$conexao->exec($sql);

echo "Pokémon atualizado com sucesso!";
?>