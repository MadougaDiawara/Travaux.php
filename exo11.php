<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 11 - Jours Restants</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
  color: #333;
  text-align: center;
}

h2 {
  color: #007bff; /* Bleu pour les titres */
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

input[type="date"] {
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

p {
  margin-top: 20px;
  font-size: 1.2em;
}
    </style>
</head>

<body>
    <h2>Exercice 11 : Calcul du nombre de jours restants jusqu'à la fin de l'année</h2>
    <form method="post">
        <label>Saisissez une date (format AAAA-MM-JJ) : <input type="date" name="date"></label>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $date = new DateTime($_POST['date']);
        $finAnnee = new DateTime($date->format('Y') . '-12-31');
        $interval = $date->diff($finAnnee);

        echo "<p>Nombre de jours restants : " . $interval->days . "</p>";
    }
    ?>
</body>

</html>