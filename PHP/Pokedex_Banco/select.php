<?php
require_once "connect-postgres.php";

$sql = "SELECT * FROM pokemon ORDER BY id";

$stmt = $conexao->prepare($sql);
$stmt->execute();

$pokemons = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (!$pokemons) {
    echo "Nenhum Pokémon encontrado.<br>";
} else {
    foreach ($pokemons as $p) {
        echo "ID: " . $p['id'] . "<br>";
        echo "Nome: " . $p['name'] . "<br>";
        echo "Tipos: " . $p['types'] . "<br>";
        echo "Altura: " . $p['height'] . " m<br>";
        echo "Peso: " . $p['weight'] . " kg<br>";
        echo "Legendário: " . ($p['is_legendary'] ? 'Sim' : 'Não') . "<br>";
        if (!empty($p['sprite_url'])) {
            echo '<img src="' . $p['sprite_url'] . '" alt="' . htmlspecialchars($p['name']) . '"><br>';
        }
        echo "Descrição: " . $p['description'] . "<br><br>";
    }
}
?>
