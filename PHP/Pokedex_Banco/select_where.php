<?php
require_once ("connect-postgres.php");

$id = 1; // change as needed or read from GET: $_GET['id']

$sql = "SELECT * FROM pokemon WHERE id = :id";

$stmt = $conexao->prepare($sql);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);
$stmt->execute();

$p = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$p) {
	echo "Pokémon não encontrado.<br>";
} else {
	echo "ID: " . $p['id'] . "<br>";
	echo "Nome: " . $p['name'] . "<br>";
	echo "Tipos: " . $p['types'] . "<br>";
	echo "Altura: " . $p['height'] . " m<br>";
	echo "Peso: " . $p['weight'] . " kg<br>";
	echo "Legendário: " . ($p['is_legendary'] ? 'Sim' : 'Não') . "<br>";
	if (!empty($p['sprite_url'])) {
		echo '<img src="' . $p['sprite_url'] . '" alt="' . htmlspecialchars($p['name']) . '"><br>';
	}
	echo "Descrição: " . $p['description'] . "<hr><br>";
}
?>