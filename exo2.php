<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 2 - Multiple de 3 et 5</title>
    <link rel="stylesheet" href="Styles.css">
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
      <h2>Exercice 2 : Tester si votre nombre est un multiple de 3 et 5</h2>
     <form method="post">
         <label>Saisissez un nombre : <input type="number" name="nombre"></label>
         <button type="submit">Tester</button>
     </form>
 
     <?php
     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                                   $nombre = $_POST['nombre'];
                                                    if ($nombre % 3 === 0 && $nombre % 5 === 0) {
                                                                                                    echo "<p>Le nombre $nombre est un multiple de 3 et 5.</p>";
                                                                                                }
                                                                                                 else {
                                                                                                          echo "<p>Le nombre $nombre n'est pas un multiple de 3 et 5.</p>";
                                                                                                        }
                                                }
     ?>
</header>  
<footer>
   <li><a href="index.php">ACCUEIL</a></li>
</footer>   
</body>

</html>