<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h2>Inscription</h2>
    <form action="../controller/inscription_controller.php" method="post">
        <label for="nom">Nom:</label><br>
        <input type="text" id="nom" name="nom" required><br><br>
        <label for="prenom">Prénom:</label><br>
        <input type="text" id="prenom" name="prenom" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="mot_de_passe">Mot de passe:</label><br>
        <input type="password" id="mot_de_passe" name="mot_de_passe" required><br><br>
        <input type="submit" value="Inscription">
    </form>
</body>
</html>
