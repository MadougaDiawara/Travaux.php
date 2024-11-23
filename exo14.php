<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 14 - Calcul TVA</title>
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

input[type="number"] {
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
    <h2>Exercice 14 : Calcul TVA et prix TTC</h2>
    <form method="post">
        <label>Prix HT : <input type="number" name="prix_ht" step="0.01"></label><br>
        <label>Taux TVA (%) : <input type="number" name="taux_tva" step="0.01"></label><br>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $prix_ht = $_POST['prix_ht'];
        $taux_tva = $_POST['taux_tva'];
        $montant_tva = $prix_ht * $taux_tva / 100;
        $prix_ttc = $prix_ht + $montant_tva;

        echo "<p>Montant TVA : $montant_tva</p>";
        echo "<p>Prix TTC : $prix_ttc</p>";
    }
    ?>
</body>

</html>