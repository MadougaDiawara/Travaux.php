<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 16 - Transformation des Éléments</title>
    <style>
        body {
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
</head>

<body>
    <h2>Exercice 16 : Transformer les éléments d’un tableau</h2>
    <form method="post">
        <label>Entrez des mots séparés par des virgules : <input type="text" name="tableau"></label>
        <button type="submit">Transformer</button>
    </form>

    <?php
    function transformerTableau(&$tableau)
    {
        foreach ($tableau as &$element) {
            $element = ucfirst(strtolower($element));
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $tableau = explode(',', $_POST['tableau']);
        transformerTableau($tableau);

        echo "<p>Tableau transformé : " . implode(', ', $tableau) . "</p>";
    }
    ?>
</body>

</html>