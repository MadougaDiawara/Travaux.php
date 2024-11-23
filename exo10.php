<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 10 - Compter Voyelles et Consonnes</title>
    <style>
 body {
  background-color: black; /* Noir pour le fond */
  color: blue; /* Bleu pour le texte */
}

h1, h2, h3 {
  color: #007bff; /* Bleu pour les titres */
}
</style>
</head>

<body>
    <h2>Exercice 10 : Compter voyelles et consonnes dans une chaîne</h2>
    <form method="post">
        <label>Saisissez une chaîne de caractères : <input type="text" name="chaine"></label>
        <button type="submit">Compter</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $chaine = strtolower($_POST['chaine']);
        $voyelles = preg_match_all('/[aeiouy]/', $chaine);
        $consonnes = preg_match_all('/[bcdfghjklmnpqrstvwxz]/', $chaine);

        echo "<p>Nombre de voyelles : $voyelles</p>";
        echo "<p>Nombre de consonnes : $consonnes</p>";
    }
    ?>
</body>

</html>