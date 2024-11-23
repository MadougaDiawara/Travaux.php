// index.php
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Immobilière de Luxe</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: linear-gradient(45deg, #1a1a1a, #4a4a4a);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            padding: 50px 0;
        }

        h1 {
            color: #fff;
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            animation: fadeInDown 1.5s;
        }

        .subtitle {
            color: #ddd;
            font-size: 1.5em;
            margin-bottom: 40px;
            animation: fadeIn 2s;
        }

        .form-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            padding: 40px 0;
        }

        .btn {
            padding: 15px 30px;
            font-size: 1.2em;
            cursor: pointer;
            border: none;
            border-radius: 50px;
            color: white;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            animation: fadeInUp 1s;
        }

        .btn-vendre {
            background: linear-gradient(45deg, #ff6b6b, #ee5253);
        }

        .btn-acheter {
            background: linear-gradient(45deg, #4834d4, #686de0);
        }

        .btn-louer {
            background: linear-gradient(45deg, #20bf6b, #26de81);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        .btn::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255,255,255,0.2);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .btn:hover::after {
            transform: translateX(0);
        }

        .floating-particles {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: -1;
        }

        .particle {
            position: absolute;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            animation: float 15s infinite linear;
        }

        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); }
            100% { transform: translateY(-100vh) rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="floating-particles">
        <?php for($i = 0; $i < 50; $i++): ?>
            <div class="particle" style="
                left: <?= rand(0, 100) ?>%;
                top: <?= rand(0, 100) ?>%;
                width: <?= rand(2, 6) ?>px;
                height: <?= rand(2, 6) ?>px;
                animation-delay: <?= rand(0, 5000) ?>ms;
                animation-duration: <?= rand(15000, 25000) ?>ms;
            "></div>
        <?php endfor; ?>
    </div>

    <div class="container">
        <div class="header animate_animated animate_fadeIn">
            <h1 class="animate_animated animate_fadeInDown">Votre Agence Immobilière de Confiance</h1>
            <p class="subtitle animate_animated animatefadeIn animate_delay-1s">
                Découvrez l'excellence dans l'immobilier
            </p>
        </div>

        <form action="traitement.php" method="POST" class="form-container">
            <input type="submit" name="action" value="Vendre" class="btn btn-vendre animate_animated animate_fadeInUp">
            <input type="submit" name="action" value="Acheter" class="btn btn-acheter animate_animated animatefadeInUp animate_delay-1s">
            <input type="submit" name="action" value="Louer" class="btn btn-louer animate_animated animatefadeInUp animate_delay-2s">
        </form>
    </div>

    <script>
        // Animation des particules flottantes
        document.addEventListener('DOMContentLoaded', function() {
            const particles = document.querySelectorAll('.particle');
            particles.forEach(particle => {
                particle.style.transform = translate(${Math.random() * 100}vw, ${Math.random() * 100}vh);
            });
        });
    </script>
</body>
</html>

// Style commun pour les pages spécialisées (à inclure dans vendre.php, acheter.php, et louer.php)
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Agence Immobilière - <?php echo ucfirst(basename($_SERVER['PHP_SELF'], '.php')); ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: linear-gradient(45deg, #1a1a1a, #4a4a4a);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            color: white;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            animation: fadeInDown 1s;
        }

        p {
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 30px;
            animation: fadeIn 1.5s;
        }

        .back-btn {
            display: inline-block;
            padding: 15px 30px;
            background: linear-gradient(45deg, #4834d4, #686de0);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            transition: all 0.3s ease;
            animation: fadeInUp 2s;
        }

        .back-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        .content-section {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            margin-bottom: 30px;
            animation: fadeIn 2s;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="animate_animated animate_fadeInDown">
            <?php 
            $page = basename($_SERVER['PHP_SELF'], '.php');
            echo ucfirst($page) . " un bien immobilier";
            ?>
        </h1>
        
        <div class="content-section animate_animated animate_fadeIn">
            <?php if($page == 'vendre'): ?>
                <p>Confiez-nous la vente de votre bien immobilier. Notre équipe d'experts vous accompagne dans toutes les étapes de la vente, de l'estimation à la signature finale.</p>
            <?php elseif($page == 'acheter'): ?>
                <p>Découvrez notre sélection de biens d'exception. Que vous recherchiez un appartement en centre-ville ou une villa avec piscine, nous avons le bien qui vous correspond.</p>
            <?php else: ?>
                <p>Explorez notre catalogue de locations premium. Des studios aux maisons familiales, trouvez le logement idéal pour votre nouvelle vie.</p>
            <?php endif; ?>
        </div>

        <a href="index.php" class="back-btn animate_animated animate_fadeInUp">Retour à l'accueil</a>
    </div>
</body>
</html>