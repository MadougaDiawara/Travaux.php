<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 3 - Tirages Aléatoires</title>
    <Style>
            h2 {
                color: blue;
            }
            P {
                color: blue;
            }
            label {
                color: blue;
            }
            button {
                color: blue;
            }
            header {
                background-color: black;
            } 
            a  {
                color: red;
                background-color: blue;
            }
    </Style>
</head>

<body>
    <header>
     <h2>Exercice 3 : Tirages aléatoires pour obtenir un nombre</h2>
     <form method="post">
         <label>Saisissez un nombre à trois chiffres : <input type="number" name="nombre" min="100" max="999"></label>
         <button type="submit">Tirer</button>
     </form>
 
     <?php
     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         $nombre = $_POST['nombre'];
         $count = 0;
         $tirage = -1;
 
         while ($tirage != $nombre) {
             $tirage = rand(100, 999);
             $count++;
         }
 
         echo "<p>Le nombre $nombre a été obtenu après $count tirages.</p>";
     }
     ?>
    </header>
    <footer>
        <li><a href="index.php">ACCUEIL</a></li>
    </footer> 
</body>

</html>