<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 6 - Diviseurs d’un Nombre</title>
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
</style>
</head>

<body>
    <h2>Exercice 6 : Afficher les diviseurs d’un nombre</h2>
    <form method="post">
        <label>Saisissez un nombre : <input type="number" name="nombre"></label>
        <button type="submit">Afficher les diviseurs</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        if ($nombre > 0) {
            echo "<p>Les diviseurs de $nombre sont : ";
            for ($i = 1; $i <= $nombre; $i++) {
                if ($nombre % $i == 0) {
                    echo "$i ";
                }
            }
            echo "</p>";
        } else {
            echo "<p>Veuillez saisir un nombre valide.</p>";
        }
    }
    ?>
</body>

</html> 