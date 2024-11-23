<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 1 - Palindrome</title>
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
     <h2>Exercice 1 : Entrer un mot pour voir si le mot est un palindrome</h2>
     <form method="post">
         <label>Saisissez un mot : <input type="text" name="mot"></label>
         <button type="submit">Vérifier</button>
     </form>
 
     <?php
     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         $mot = $_POST['mot'];
         $reverse = strrev($mot);
         if ($mot === $reverse) {
                                    echo "<p>Le mot \"$mot\" est un palindrome.</p>";
                                 } 
         else {
                 echo "<p>Le mot \"$mot\" n'est pas un palindrome.</p>";
             }
        }
     ?>
    </header> 
    <footer>
        <li><a href="index.php">ACCUEIL</a></li>
    </footer> 
</body>

</html>