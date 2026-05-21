<?php

require_once "connect-postgres.php";

$sql = "DELETE FROM pokemon WHERE id = 1";

$conexao->exec($sql);

echo "Pokémon deletado com sucesso!";

?>