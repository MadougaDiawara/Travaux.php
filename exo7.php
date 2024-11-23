<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 7 - Nombre Parfait</title>
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
  font-size: 1.2em; /* Augmentation de la taille de la police pour une meilleure lisibilité */
}

.resultat-parfait {
  color: green; /* Vert pour indiquer que le nombre est parfait */
}

.resultat-imparfait {
  color: red; /* Rouge pour indiquer que le nombre n'est pas parfait */
}
</style>
</head>

<body>
    <h2>Exercice 7 : Vérifier si un nombre est parfait</h2>
    <form method="post">
        <label>Saisissez un nombre : <input type="number" name="nombre"></label>
        <button type="submit">Vérifier</button>
    </form>

    <?php
    function estParfait($nombre)
    {
        $somme = 0;
        for ($i = 1; $i < $nombre; $i++) {
            if ($nombre % $i == 0) {
                $somme += $i;
            }
        }
        return $somme == $nombre;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        if ($nombre > 0) {
            if (estParfait($nombre)) {
                echo "<p>Le nombre $nombre est parfait.</p>";
            } else {
                echo "<p>Le nombre $nombre n'est pas parfait.</p>";
            }
        } else {
            echo "<p>Veuillez saisir un nombre valide.</p>";
        }
    }
    ?>
</body>

</html>