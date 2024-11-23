<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 5 - Mesures d’un Cercle</title>
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

input[type="number"] {
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 3px;
}

button {
  background-color: #007bff; /* Bleu */
  color: black;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 3px;
}

button:hover {
  background-color: #0056b3;
}

p {
  margin-top: 20px;
}

/* Ajout d'une classe pour mettre en évidence les résultats */
.resultat {
  font-weight: bold;
  color: #007bff; /* Bleu */
}
</style>
</head>

<body>
    <h2>Exercice 5 : Calculer le diamètre, le périmètre et la surface d’un cercle</h2>
    <form method="post">
        <label>Rayon du cercle : <input type="number" name="rayon" step="0.01"></label>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $rayon = $_POST['rayon'];
        if ($rayon) {
            $diametre = 2 * $rayon;
            $perimetre = 2 * pi() * $rayon;
            $surface = pi() * pow($rayon, 2);

            echo "<p>Diamètre : $diametre</p>";
            echo "<p>Périmètre : $perimetre</p>";
            echo "<p>Surface : $surface</p>";
        } else {
            echo "<p>Veuillez saisir un rayon valide.</p>";
        }
    }
    ?>
</body>

</html>