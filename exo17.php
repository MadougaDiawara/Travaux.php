<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du Sinus</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: black;
    color: #333;
    text-align: center;
}

h1 {
    color: #007bff;
}

form {
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #fff;
    width: 300px;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="number"], select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 3px;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 3px;
}

button:hover {
    background-color: #0056b3;
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
    <h1>Calcul du Sinus</h1>
    <form method="POST" action="">
        <label for="angle">Angle :</label>
        <input type="number" step="any" id="angle" name="angle" required>
        <br><br>
        <label for="unite">Unité :</label>
        <select id="unite" name="unite">
            <option value="r">Radians</option>
            <option value="d">Degrés</option>
            <option value="g">Grades</option>
        </select>
        <br><br>
        <button type="submit">Calculer</button>
    </form>
    <?php
    // Fonction pour calculer le sinus
    function sinus($angle, $unite = 'r') {
        switch (strtolower($unite)) {
            case 'd':
                $angle = deg2rad($angle);
                break;
            case 'g':
                $angle = $angle * M_PI / 200;
                break;
            case 'r':
                break;
            default:
                return "Unité invalide. Utilisez 'r', 'd' ou 'g'.";
        }
        return sin($angle);
    }

    // Traitement du formulaire
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $angle = $_POST['angle'];
        $unite = $_POST['unite'];

        // Calcul du sinus
        $resultat = sinus($angle, $unite);

        // Affichage du résultat
        echo "<h2>Résultat</h2>";
        echo "<p>Le sinus de l'angle $angle en unité '$unite' est : <strong>$resultat</strong></p>";
    }
    ?>
</body>
</html>