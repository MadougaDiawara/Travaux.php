style>
b<ody {
  font-family: Arial, sans-serif;
  background-color: black; /* Fond gris clair */
  color: #333; /* Texte gris foncé */
}

h2 {
  color: #007bff; /* Bleu pour les titres */
}

form {
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
  background-color: #fff;
  width: 300px; /* Ajustez la largeur selon vos besoins */
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 3px;
}

button {
  background-color: #007bff; /* Bleu pour les boutons */
  color: #fff;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 3px;
}

button:hover {
  background-color: #0056b3; /* Bleu plus foncé au survol */
}

.resultats {
  margin-top: 20px;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
  background-color: #f9f9f9;
}
</style>
<?php
// Fonction pour calculer les statistiques d'un tableau d'entiers
function calculerStats(array $nombres) {
    $somme = array_sum($nombres);
    $moyenne = $somme / count($nombres);
    $max = max($nombres);
    $min = min($nombres);

    return [
        'moyenne' => $moyenne,
        'maximum' => $max,
        'minimum' => $min
    ];
}

// Saisie des nombres par l'utilisateur (exemple avec un formulaire)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombresSaisis = explode(',', $_POST['nombres']);
    $nombres = array_map('intval', $nombresSaisis); // Convertir les chaînes en entiers

    $stats = calculerStats($nombres);

    echo "Moyenne : " . $stats['moyenne'] . "<br>";
    echo "Maximum : " . $stats['maximum'] . "<br>";
    echo "Minimum : " . $stats['minimum'] . "<br>";
}
?>

<form method="post">
    <label for="nombres">Entrez les nombres (séparés par des virgules) :</label>
    <input type="text" name="nombres" id="nombres">
    <button type="submit">Calculer</button>
</form>