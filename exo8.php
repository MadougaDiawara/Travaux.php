<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 8 - Moyenne, Maximum, et Minimum d’un Tableau</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  background-color: black;
  color: #333;
  text-align: center;
}

h2 {
  color: #007bff; /* Bleu */
}

form {
  margin: 20px;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"] {
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 3px;
  width: 200px; /* Ajustez la largeur selon vos besoins */
}

button {
  background-color: #007bff; /* Bleu */
  color: #fff;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 3px;
}

button:hover {
  background-color: #0056b3;
}

p {
  margin-top: 10px;
  font-size: 1.2em;
}

.resultats {
  margin-top: 20px;
  border: 1px solid #ddd;
  padding: 10px;
  border-radius: 5px;
  background-color: #f9f9f9;
}
    </style>
</head>

<body>
    <h2>Exercice 8 : Moyenne, Maximum et Minimum d’un tableau</h2>
    <form method="post">
        <label>Entrez des nombres séparés par des virgules : <input type="text" name="tableau"></label>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $tableauStr = $_POST['tableau'];
        $tableau = array_map('intval', explode(',', $tableauStr));

        if (count($tableau) > 0) {
            $moyenne = array_sum($tableau) / count($tableau);
            $max = max($tableau);
            $min = min($tableau);

            echo "<p>Moyenne : $moyenne</p>";
            echo "<p>Maximum : $max</p>";
            echo "<p>Minimum : $min</p>";
        } else {
            echo "<p>Veuillez saisir une liste de nombres valides.</p>";
        }
    }
    ?>
</body>

</html>