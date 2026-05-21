<?php
require_once "connect-postgres.php";

$sql = "INSERT INTO pokemon (name, types, height, weight, sprite_url, is_legendary, description)
VALUES (:name, :types, :height, :weight, :sprite_url, :is_legendary, :description)";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(":name", "Pikachu");
$stmt->bindValue(":types", "Electric");
$stmt->bindValue(":height", 0.4);
$stmt->bindValue(":weight", 6.0);
$stmt->bindValue(":sprite_url", "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/25.png");
$stmt->bindValue(":is_legendary", false, PDO::PARAM_BOOL);
$stmt->bindValue(":description", "An electric mouse Pokémon.");
$stmt->execute();

echo "Pokémon inserido com sucesso.";
?>
