<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 4 - Calcul du PPCM</title>
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
    <Header>
     <h2>Exercice 4 : Calcul du PPCM de deux entiers</h2>
     <form method="post">
         <label>Entier 1 : <input type="number" name="entier1"></label><br>
         <label>Entier 2 : <input type="number" name="entier2"></label><br>
         <button type="submit">Calculer le PPCM</button>
        </form>

     <?php
     function calculerPPCM($a, $b)
     {
         return abs($a * $b) / gcd($a, $b);
     }

     function gcd($a, $b)
     {
         while ($b != 0) {
             $t = $b;
             $b = $a % $b;
             $a = $t;
         }
         return $a;
     }

     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         $a = $_POST['entier1'];
         $b = $_POST['entier2'];
         if ($a && $b) {
             echo "<p>Le PPCM de $a et $b est " . calculerPPCM($a, $b) . ".</p>";
         } else {
             echo "<p>Veuillez saisir deux entiers valides.</p>";
         }
     }
     ?>
    </Header>
    <footer>
        <li><a href="index.php">ACCUEIL</a></li>
    </footer> 
</body>

</html>