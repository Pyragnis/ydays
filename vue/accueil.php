<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <!-- FullPage.js CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.css">
    <style>
        /* Ajoutez vos styles personnalisés ici */
        .section {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            color: #fff;
            text-align: center;
        }
        .section:nth-child(odd) {
            background-color: #007bff;
        }
        .section:nth-child(even) {
            background-color: #6c757d;
        }
        h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.5rem;
            margin-bottom: 40px;
        }
        a {
            background-color: #fff;
            color: #333;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.2rem;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #ccc;
        }
    </style>
</head>
<body>
    <div id="fullpage">
        <div class="section">
            <h2>Bienvenue!</h2>
            <p>Vous êtes connecté.</p>
            <a href="deconnexion.php">Déconnexion</a>
        </div>
        <div class="section">
            <h2>Section 2</h2>
            <p>Ceci est la deuxième section.</p>
        </div>
        <div class="section">
            <h2>Section 3</h2>
            <p>Ceci est la troisième section.</p>
        </div>
    </div>
    <!-- FullPage.js et ses dépendances -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/vendors/scrolloverflow.min.js"></script>
    <script>
        new fullpage('#fullpage', {
            // Options de FullPage.js
            autoScrolling: true,
            scrollHorizontally: true
        });
    </script>
</body>
</html>
