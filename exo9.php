<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche de personne</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: black; /* Fond gris clair */
    color: #333; /* Texte gris foncé */
}

h2 {
    color: #007bff; /* Bleu pour les titres */
}

table {
    border-collapse: collapse;
    width: 80%;
    margin: 20px auto;
}

th, td {
    border: 1px solid #ddd;
    padding: 15px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}
    </style>
</head>
<body>
    <h1>Rechercher une personne</h1>
    <form method="post" action="">
        <label for="nom">Entrez un nom :</label>
        <input type="text" id="nom" name="nom" required>
        <button type="submit">Rechercher</button>
    </form>

    <?php
    // Tableau multidimensionnel associatif
    $personnes = [
        "John" => [
            "age" => 30,
            "profession" => "Développeur",
            "ville" => "Paris"
        ],
        "Alice" => [
            "age" => 25,
            "profession" => "Designer",
            "ville" => "Lyon"
        ],
        "Emma" => [
            "age" => 28,
            "profession" => "Professeur",
            "ville" => "Marseille"
        ]

    ];

    // Vérifie si un nom a été soumis via le formulaire
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nom'])) {
        $nom = htmlspecialchars(trim($_POST['nom'])); // Nettoie l'entrée utilisateur
        if (array_key_exists($nom, $personnes)) {
            // Affiche les informations de la personne si elle existe dans le tableau
            echo "<h2>Informations sur $nom :</h2>";
            echo "<ul>";
            foreach ($personnes[$nom] as $cle => $valeur) {
                echo "<li><strong>" . ucfirst($cle) . "</strong>: $valeur</li>";
            }
            echo "</ul>";
        } else {
            echo "<p><strong>Erreur :</strong> Le nom <em>$nom</em> n'est pas dans la base de données.</p>";
        }
    }
    ?>
</body>
</html>