<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 12 - Adresse Client</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  background-color: black;
  color: blue;
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

input[type="text"] {
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 3px;
  width: 250px; /* Ajustez la largeur selon vos besoins */
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
    </style>
</head>

<body>
    <h2>Exercice 12 : Formulaire d'adresse client</h2>
    <form method="post" action="traitement_adresse.php">
        <label>Nom : <input type="text" name="nom"></label><br>
        <label>Prénom : <input type="text" name="prenom"></label><br>
        <label>Adresse : <input type="text" name="adresse"></label><br>
        <label>Ville : <input type="text" name="ville"></label><br>
        <label>Code Postal : <input type="text" name="code_postal"></label><br>
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>